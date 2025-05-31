<?php
session_start();
// verificando se o usuario esta logado
if (!isset($_SESSION['usuario'])) {
    // redirecionando se o usuario nao esta logado, para a pagina de login
    header("Location: /Bracada/views/loginForm.php");
    exit();
}
?>
