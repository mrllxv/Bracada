<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esqueci a Senha</title>
    <link rel="stylesheet" href="../styles/global.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body class="form-page">
    <div class="form-container">
        <h1>Recuperação de Senha</h1>
        <form action="/Bracada/actions/redefinir_senha.php" id="esqueci-senha-form" class="form" method="POST">
            
            <label for="email">
                <i class="fa-solid fa-envelope icon-modify"></i>
                <input type="email" name="email" placeholder="Seu E-mail" required>
            </label>

            <label for="frase_secreta">
                <i class="fa-solid fa-key icon-modify"></i>
                <input type="text" name="frase_secreta" placeholder="Frase Secreta" required>
            </label>

            <label for="nova_senha">
                <i class="fa-solid fa-lock icon-modify"></i>
                <input type="password" name="nova_senha" placeholder="Nova Senha" required>
            </label>

            <label for="repita_senha">
                <i class="fa-solid fa-lock icon-modify"></i>
                <input type="password" name="repita_senha" placeholder="Repita Nova Senha" required>
            </label>

            <div class="btns__container">
                <button type="submit" class="btn btn_submit" id="btn_redefinir_senha">Redefinir senha</button>
                <button type="reset" class="btn btn_reset">Limpar dados</button>
            </div>

            <a href="/Bracada/views/index.php" class="voltar">
                <i class="fa-solid fa-house"></i>
            </a>
        </form>
    </div>
</body>
</html>
