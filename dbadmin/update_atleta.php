<?php
session_start();
require_once '../utils/funcoes.php';
requireAdmin();
require_once '../includes/db.php';

if (isset($_POST['id']) && isset($_POST['biografia']) && isset($_POST['cod_medalha'])) {
    $id = intval($_POST['id']);
    $biografia = $_POST['biografia'];
    $cod_medalha = intval($_POST['cod_medalha']);

    try {
        $conn = connect();

        //query para atualizar apenas os campos biografia e codigo da medalha
        $stmt = $conn->prepare("UPDATE atleta SET biografia = ?, cod_medalha = ? WHERE id = ? AND ativo = 1");
        $stmt->bind_param("sii", $biografia, $cod_medalha, $id);
        $stmt->execute();

        if ($stmt->affected_rows > 0) {
            echo "Dados atualizados com sucesso.";
        } else {
            echo "Nenhuma atualização realizada (atleta inexistente ou inativo).";
        }

        $conn->close();
    } catch (Exception $e) {
        echo "Erro ao atualizar dados do atleta: " . $e->getMessage();
    }
} else {
    echo "Campos obrigatórios não foram preenchidos.";
}
