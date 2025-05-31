<?php
session_start();
require_once '../utils/funcoes.php';
requireAdmin();
require_once '../includes/db.php';

if (isset($_GET['id'])) {
    // converte o id pra tipo inteiro por segurança
    $id = intval($_GET['id']);

    try {
        $conn = connect();
        $stmt = $conn->prepare("UPDATE atleta SET ativo = 0 WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();

        // verifica se alguma linha foi afetada, se o atleta existia e foi atualizadop
        if ($stmt->affected_rows > 0) {
            echo "Atleta excluído logicamente com sucesso.";
        } else {
            echo "Atleta não encontrado ou já excluído.";
        }

        $conn->close();
    } catch (Exception $e) {
        echo "Erro ao excluir atleta: " . $e->getMessage();
    }
} else {
    echo "ID do atleta não informado.";
}
