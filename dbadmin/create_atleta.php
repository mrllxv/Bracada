<?php
session_start();
require_once '../utils/funcoes.php';
requireAdmin();
require_once '../includes/db.php';

if (isset($_POST['nome'], $_POST['genero'], $_POST['biografia'], $_POST['data_nascimento'], $_POST['id_pais'])) {
    $nome = trim($_POST['nome']);
    $genero = trim($_POST['genero']);
    $biografia = trim($_POST['biografia']);
    $data_nascimento = trim($_POST['data_nascimento']);
    $id_pais = intval($_POST['id_pais']);

    if (empty($nome) || empty($genero) || empty($data_nascimento) || empty($id_pais)) {
        echo json_encode(['erro' => 'Preencha todos os campos.']);
        exit;
    }

    try {
        $conn = connect();
        $ativo = 1;
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
