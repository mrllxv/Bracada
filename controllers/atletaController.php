<?php
session_start();
require_once '../includes/db.php';
header('Content-Type: application/json');

$id = isset($_GET['id']) ? (int) $_GET['id'] : 0;

try {
    $conn = connect();

    // utilizando view no banco de dados
    $stmt = $conn->prepare("SELECT * FROM perfil_atleta_simplificado WHERE id_atleta = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->bind_result($id_atleta, $nome, $pais, $modalidade, $biografia);

    if ($stmt->fetch()) {
        $stmt->close();

        // consulta medalhas do atleta na view 
        $stmt2 = $conn->prepare("SELECT ouro, prata, bronze, total_medalhas FROM medalhas_por_atleta WHERE id_atleta = ?");
        $stmt2->bind_param("i", $id);
        $stmt2->execute();
        $stmt2->bind_result($ouro, $prata, $bronze, $total);

        if ($stmt2->fetch()) {
            $medalhas = [
                'ouro' => (int)$ouro,
                'prata' => (int)$prata,
                'bronze' => (int)$bronze,
                'total' => (int)$total
            ];
        } else {
            // nenhuma medalha encontrada
            $medalhas = [
                'ouro' => 0,
                'prata' => 0,
                'bronze' => 0,
                'total' => 0
            ];
        }

        $stmt2->close();
        $conn->close();

        // resposta do json combinando os dados acima
        echo json_encode([
            'id_atleta' => $id,
            'nome' => $nome,
            'pais' => $pais,
            'modalidade' => $modalidade,
            'biografia' => $biografia,
            'medalhas' => $medalhas
        ], JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
    } else {
        http_response_code(404);
        echo json_encode(['erro' => 'Atleta não encontrado.']);
    }
} catch (Exception $e) {
    http_response_code(500);
    echo json_encode(['erro' => 'Erro ao buscar atleta: ' . $e->getMessage()]);
}
?>

