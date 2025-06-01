<?php
require_once '../includes/db.php';
header('Content-Type: application/json');


// pega o parâmetro modalidade enviado via url usando get, senão atribui uma string vazia ''
//utilizando operador ternario tambem
$modalidade = isset($_GET['modalidade']) ? ($_GET['modalidade']) : '';

try {
    $conn = connect();

    // se o parametro modalidade não estiver vazio, prepara uma consulta filtrando pela modalidade
    if ($modalidade !== '') {
        $stmt = $conn->prepare("SELECT nome, data_nascimento FROM atleta WHERE modalidade = ?");
        $stmt->bind_param("s", $modalidade);
    } else {
        $stmt = $conn->prepare("SELECT nome, data_nascimento FROM atleta");
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
?>
