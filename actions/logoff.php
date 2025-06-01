<?php
session_start();

// limpa todas as variaveis de sessão
$_SESSION = [];

// destrói a sessão
session_destroy();

// redireciona para a página de login
header('Location: /Bracada/views/loginForm.php');
exit;
