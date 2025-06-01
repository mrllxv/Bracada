<?php
require_once '../includes/db.php';
header('Content-Type: application/json');

// verifica se o parametro modalidade foi passado na URL
// e remove espaços em branco no início e no fim da string com trim.
$modalidade = isset($_GET['modalidade']) ? trim($_GET['modalidade']) : '';

try {
    $conn = connect();

    if ($modalidade !== '') {
        $sql = "SELECT id_atleta AS id, nome_atleta AS nome, data_nascimento 
                FROM atletas_por_modalidade 
                WHERE modalidade LIKE ?";
        $stmt = $conn->prepare($sql);
        $like = "%" . $modalidade . "%";
        $stmt->bind_param("s", $like);
    } else {
        $sql = "SELECT id_atleta AS id, nome_atleta AS nome, data_nascimento 
                FROM atletas_por_modalidade";
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
