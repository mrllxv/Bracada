<?php
session_start();
require_once '../utils/funcoes.php';
requireAdmin();
require_once '../includes/db.php';
require_once '../classes/Atleta.php';

if (isset($_POST['nome']) && isset($_POST['genero']) && isset($_POST['biografia']) && isset($_POST['data_nascimento']) && isset($_POST['id_pais'])) {
    $nome = $_POST['nome'];
    $genero = $_POST['genero'];
    $biografia = $_POST['biografia'];
    $data_nascimento = $_POST['data_nascimento'];
    $id_pais = $_POST['id_pais'];

    if (empty($nome) || empty($genero) || empty($data_nascimento) || empty($id_pais)) {
        echo "Preencha todos os campos.";
        exit;
    }

    try {
        $conn = connect();
        $stmt = $conn->prepare("INSERT INTO atleta (nome, genero, biografia, data_nascimento, id_pais) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssi", $nome, $genero, $biografia, $data_nascimento, $id_pais);
        $stmt->execute();
        echo "Atleta cadastrado com sucesso.";
        $conn->close();
    } catch (Exception $e) {
        echo "Erro ao cadastrar atleta: " . $e->getMessage();
    }
}
