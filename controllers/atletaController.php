<?php
require_once '../includes/db.php';
header('Content-Type: application/json');

$id = isset($_GET['id']) ? (int) $_GET['id'] : 0;

try {
    $conn = connect();
    // utilizando view no banco de dados
    //$stmt = $conn->prepare("SELECT * FROM perfil_atleta WHERE id_atleta = ?");
    $stmt = $conn->prepare("SELECT * from perfil_atleta_simplificado WHERE id_atleta = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->bind_result($id_atleta, $nome, $pais, $modalidade, $biografia);

    if ($stmt->fetch()) {
        // apenas 1 resultado, então monta o json diretamente sem array
        echo json_encode([
            'nome' => $nome,
            'pais' => $pais,
            'modalidade' => $modalidade,
            'biografia' => $biografia
        ], JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
    } else {
        http_response_code(404);
        echo json_encode(['erro' => 'Atleta não encontrado.']);
    }

    $stmt->close();
    $conn->close();
} catch (Exception $e) {
    http_response_code(500);
    echo json_encode(['erro' => 'Erro ao buscar atleta: ' . $e->getMessage()]);
}
?>
