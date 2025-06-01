<?php
require_once '../includes/db.php';
header('Content-Type: application/json');

$pais = isset($_GET['pais']) ? trim($_GET['pais']) : '';

try {
    $conn = connect();

    if ($pais !== '') {
        // filtra atletas com base no nome do país
        $stmt = $conn->prepare("SELECT * FROM atletas_por_pais WHERE nome_pais = ?");
        $stmt->bind_param("s", $pais);
    } else {
        // sem filtro, retorna todos os atletas da view
        $stmt = $conn->prepare("SELECT * FROM atletas_por_pais");
    }

    $stmt->execute();
    $result = $stmt->get_result();
    $atletas = [];

    while ($row = $result->fetch_assoc()) {
        $atletas[] = $row;
    }

    echo json_encode($atletas, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);

    $stmt->close();
    $conn->close();
} catch (Exception $e) {
    http_response_code(500);
    echo json_encode(['erro' => 'Erro ao buscar atletas: ' . $e->getMessage()]);
}
