<?php
session_start();
require_once '../utils/funcoes.php';
requireAdmin();
require_once '../includes/db.php';

if (isset($_POST['id'])) {
    $id = intval($_POST['id']);

    try {
        $conn = connect();

        $stmt = $conn->prepare("UPDATE atleta SET ativo = 0 WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();

        if ($stmt->affected_rows > 0) {
            echo json_encode(['sucesso' => 'Atleta excluído logicamente com sucesso.']);
        } else {
            echo json_encode(['erro' => 'Atleta não encontrado ou já inativo.']);
        }

        $stmt->close();
        $conn->close();
    } catch (Exception $e) {
        echo json_encode(['erro' => 'Erro ao excluir atleta: ' . $e->getMessage()]);
    }
} else {
    echo json_encode(['erro' => 'ID do atleta não informado.']);
}
