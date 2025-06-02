<?php
require_once '../includes/db.php';
header('Content-Type: application/json');

// verifica se os dados foram enviados
if (isset($_POST['id_atleta'], $_POST['id_modalidade'])) {
    $id_atleta = intval($_POST['id_atleta']);
    $id_modalidade = intval($_POST['id_modalidade']);

    if ($id_atleta <= 0 || $id_modalidade <= 0) {
        echo json_encode(['erro' => 'IDs inválidos.']);
        exit;
    }

    try {
        $conn = connect();

        // verificando se a relação já existe (evita duplicatas)
        $check = $conn->prepare("SELECT 1 FROM atleta_modalidade WHERE cod_atleta = ? AND cod_modalidade = ?");
        $check->bind_param("ii", $id_atleta, $id_modalidade);
        $check->execute();
        $check->store_result();

        if ($check->num_rows > 0) {
            echo json_encode(['aviso' => 'Atleta já está vinculado a essa modalidade.']);
        } else {
            // insere a relação
            $stmt = $conn->prepare("INSERT INTO atleta_modalidade (cod_atleta, cod_modalidade) VALUES (?, ?)");
            $stmt->bind_param("ii", $id_atleta, $id_modalidade);
            $stmt->execute();
            $stmt->close();

            echo json_encode(['sucesso' => 'Vínculo criado com sucesso.']);
        }

        $check->close();
        $conn->close();
    } catch (Exception $e) {
        http_response_code(500);
        echo json_encode(['erro' => 'Erro ao vincular modalidade: ' . $e->getMessage()]);
    }
} else {
    echo json_encode(['erro' => 'Dados incompletos.']);
}
