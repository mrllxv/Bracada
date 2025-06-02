<?php
session_start();
require_once '../includes/db.php';
header('Content-Type: application/json');

try {
    $conn = connect();

    $sql = "SELECT 
                nome_atleta AS nome,
                pais,
                ouro,
                prata,
                bronze,
                total_medalhas
            FROM medalhas_por_atleta
            WHERE ativo = 1
            ORDER BY total_medalhas DESC";

    $stmt = $conn->prepare($sql);
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
    echo json_encode(['erro' => 'Erro ao buscar medalhas: ' . $e->getMessage()]);
}

