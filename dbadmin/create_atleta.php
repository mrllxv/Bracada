<?php
require_once '../includes/db.php';

if (isset($_POST['nome'], $_POST['genero'], $_POST['biografia'], $_POST['data_nascimento'], $_POST['id_pais'])) {
    $nome = trim($_POST['nome']);
    $genero = trim($_POST['genero']);
    $biografia = trim($_POST['biografia']);
    $data_nascimento = trim($_POST['data_nascimento']);
    $pais_nome = trim($_POST['id_pais']); // agora é o nome do país

    if (empty($nome) || empty($genero) || empty($data_nascimento) || empty($pais_nome)) {
        echo json_encode(['erro' => 'Preencha todos os campos.']);
        exit;
    }

    try {
        $conn = connect();

        // Buscar o ID do país pelo nome
        $stmt = $conn->prepare("SELECT id FROM pais WHERE nome = ?");
        $stmt->bind_param("s", $pais_nome);
        $stmt->execute();
        $result = $stmt->get_result();
        $pais = $result->fetch_assoc();
        $stmt->close();

        if (!$pais) {
            echo json_encode(['erro' => 'País não encontrado.']);
            exit;
        }

        $id_pais = $pais['id'];
        $ativo = 1;

        // Inserir o atleta
        $stmt = $conn->prepare("INSERT INTO atleta (nome, genero, biografia, data_nascimento, cod_pais, ativo) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssii", $nome, $genero, $biografia, $data_nascimento, $id_pais, $ativo);
        $stmt->execute();
        $stmt->close();
        $conn->close();

        echo json_encode(['sucesso' => 'Atleta cadastrado com sucesso.']);
    } catch (Exception $e) {
        echo json_encode(['erro' => 'Erro ao cadastrar atleta: ' . $e->getMessage()]);
    }
} else {
    echo json_encode(['erro' => 'Dados incompletos.']);
}
