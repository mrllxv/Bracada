<?php
session_start();
require_once '../includes/db.php';
require_once '../utils/funcoes.php';
requireAdmin();
header('Content-Type: application/json');

if (isset($_POST['id_atleta'], $_POST['id_modalidade'])) {
    $id_atleta = intval($_POST['id_atleta']);
    $id_modalidade = intval($_POST['id_modalidade']);

    if ($id_atleta <= 0 || $id_modalidade <= 0) {
        echo json_encode(['erro' => 'IDs inválidos.']);
        exit;
    }

    try {
        $conn = connect();

        // verifica se o vínculo existe
        $check = $conn->prepare("SELECT 1 FROM atleta_modalidade WHERE cod_atleta = ? AND cod_modalidade = ?");
        $check->bind_param("ii", $id_atleta, $id_modalidade);
        $check->execute();
        $check->store_result();

        if ($check->num_rows === 0) {
            echo json_encode(['aviso' => 'Esse vínculo não existe.']);
        } else {
            // remove o vínculo
            $stmt = $conn->prepare("DELETE FROM atleta_modalidade WHERE cod_atleta = ? AND cod_modalidade = ?");
            $stmt->bind_param("ii", $id_atleta, $id_modalidade);
            $stmt->execute();
            $stmt->close();

            echo json_encode(['sucesso' => 'Modalidade desvinculada com sucesso.']);
        }

        $check->close();
        $conn->close();
    } catch (Exception $e) {
        http_response_code(500);
        echo json_encode(['erro' => 'Erro ao desvincular modalidade: ' . $e->getMessage()]);
    }
} else {
    echo json_encode(['erro' => 'Dados incompletos.']);
}
