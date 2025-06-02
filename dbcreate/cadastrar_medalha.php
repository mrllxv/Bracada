<?php
require_once '../includes/db.php'; // conexão com banco
require_once '../enum/TipoMedalha.php';

if (isset($_POST['cod_tipo_medalha'], $_POST['cod_atleta'])) {
    $cod_tipo_medalha = (int) $_POST['cod_tipo_medalha'];
    $cod_atleta = (int) $_POST['cod_atleta'];

    if ($cod_tipo_medalha <= 0 || $cod_atleta <= 0) {
        echo json_encode(['erro' => 'Tipo de medalha e atleta devem ser válidos.']);
        exit;
    }

    try {
        $conn = connect();

        // verificando se o atleta existe e está ativo
        $stmt = $conn->prepare("SELECT ativo FROM atleta WHERE id = ?");
        $stmt->bind_param("i", $cod_atleta);
        $stmt->execute();
        $result = $stmt->get_result();
        $atleta = $result->fetch_assoc();
        $stmt->close();

        if (!$atleta) {
            echo json_encode(['erro' => 'Atleta não encontrado.']);
            exit;
        }

        if ((int)$atleta['ativo'] !== 1) {
            echo json_encode(['erro' => 'Só é possível cadastrar medalha para atletas ativos.']);
            exit;
        }

        // validando se tipo_medalha existe na enum ou tabela tipo_medalha
        if (TipoMedalha::descricao($cod_tipo_medalha) === null) {
            echo json_encode(['erro' => 'Tipo de medalha inválido.']);
            exit;
        }

        // inseririndo a medalha no banco
        $stmt = $conn->prepare("INSERT INTO medalha (cd_tipo_medalha, cd_atleta) VALUES (?, ?)");
        $stmt->bind_param("ii", $cod_tipo_medalha, $cod_atleta);
        $stmt->execute();

        if ($stmt->affected_rows > 0) {
            echo json_encode(['sucesso' => 'Medalha cadastrada com sucesso.']);
        } else {
            echo json_encode(['erro' => 'Falha ao cadastrar a medalha.']);
        }

        $stmt->close();
        $conn->close();

    } catch (Exception $e) {
        echo json_encode(['erro' => 'Erro ao cadastrar medalha: ' . $e->getMessage()]);
    }

} else {
    echo json_encode(['erro' => 'Dados incompletos.']);
}
