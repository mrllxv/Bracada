<?php
require_once '../includes/db.php';
header('Content-Type: application/json');

// verifica se o parâmetro 'pais' foi passado na URL e remove espaços em branco
$pais = isset($_GET['pais']) ? trim($_GET['pais']) : '';

try {
    $conn = connect();

    if ($pais !== '') {
        // Com filtro por país
        $sql = "SELECT id_atleta AS id, nome_atleta AS nome, data_nascimento 
                FROM atletas_por_pais 
                WHERE pais LIKE ?";
        $stmt = $conn->prepare($sql);
        $like = "%" . $pais . "%";
        $stmt->bind_param("s", $like);
    } else {
        // Sem filtro, retorna todos
        $sql = "SELECT id_atleta AS id, nome_atleta AS nome, data_nascimento 
                FROM atletas_por_pais";
        $stmt = $conn->prepare($sql);
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

