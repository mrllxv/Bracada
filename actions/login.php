<?php
session_start(); 
require_once '../includes/db.php';
require_once '../classes/Login.php';

try {
    if (isset($_POST['email'], $_POST['senha'])) {
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        if (empty($email) || empty($senha)) {
            echo "Preencha todos os campos.";
            exit;
        }

        $conn = connect();
        $login = new Login($conn);
        $usuario = $login->autenticar($email, $senha);

        if ($usuario) {
            // Pega dados usando métodos da classe User
            $_SESSION['id_usuario'] = $usuario->getId();
            $_SESSION['nome'] = $usuario->getNome();
            $_SESSION['perfil'] = $usuario->getTipoPerfilId();

            echo "Login realizado com sucesso.";
        } else {
            echo "Email ou senha inválidos.";
        }

        $conn->close();
    } else {
        echo "Preencha todos os campos.";
    }
} catch (Exception $e) {
    echo "Erro no processo de login: " . $e->getMessage();
}
