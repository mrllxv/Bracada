<?php
session_start();
require_once '../utils/funcoes.php';
requireAdmin();  // só admins podem desativar usuários
require_once '../includes/db.php';

// Verifica se o email foi enviado no POST
if (!isset($_POST['email'])) {
    echo json_encode(['erro' => 'Email do usuário não informado.']);
    exit;
}

$email = trim($_POST['email']);

try {
    $conn = connect();

    // Atualiza o campo ativo para 0 (desativa o usuário) pelo email
    $stmt = $conn->prepare("UPDATE usuario SET ativo = 0 WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        echo json_encode(['sucesso' => 'Usuário desativado com sucesso.']);
    } else {
        echo json_encode(['erro' => 'Nenhum usuário encontrado com esse email ou já está desativado.']);
    }

    $stmt->close();
    $conn->close();

} catch (Exception $e) {
    http_response_code(500);
    echo json_encode(['erro' => 'Erro ao desativar usuário: ' . $e->getMessage()]);
}
