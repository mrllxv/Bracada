<?php
require_once '../includes/db.php';
header('Content-Type: application/json');

// verifica se o parametro modalidade foi passado na url
$modalidade = isset($_GET['modalidade']) ? $_GET['modalidade'] : '';

try {
    $conn = connect();

    if ($modalidade !== '') {
        // filtra atletas com base na modalidade (usando a VIEW)
        $stmt = $conn->prepare("SELECT nome_atleta, data_nascimento FROM atletas_por_modalidade WHERE descricao_tipo_modalidade = ?");
        $stmt->bind_param("s", $modalidade);
    } else {
        // sem filtro, retorna todos
        $stmt = $conn->prepare("SELECT nome_atleta, data_nascimento FROM atletas_por_modalidade");
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

