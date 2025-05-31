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
        <h1>Crie sua conta</h1>
        <form action ="cadastro.php"id="cadastro-form" class="form" method="POST">
            <label for="nome">
                <i class="fa-solid fa-person icon-modify"></i>
                <input type="text" name="nome" placeholder="Nome" required>
            </label>
            <label for="email">
                <i class="fa-solid fa-envelope icon-modify"></i>
                <input type="email" name="email" placeholder="Email" required>
            </label>
            <label for="senha">
                <i class="fa-solid fa-lock icon-modify"></i>
                <input type="password" name="senha" placeholder="Senha" required>
            </label>
            <label for="data_nascimento">
                <i class="fa-solid fa-cake-candles icon-modify"></i>
                <input type="date" name="data_nascimento" placeholder="Data de Nascimento" required>
            </label>
            <label for="frase_secreta">
                <i class="fa-solid fa-key icon-modify"></i>
                <input type="text" name="frase_secreta" placeholder="Frase Secreta" required>
            </label>
            <div class="btns__container">
                <button type="submit" class="btn btn_submit" id="btn_register">Cadastrar</button>
                <button type="reset" class="btn btn_reset">Limpar dados</button>
            </div>

            <a href="index.php" class="voltar"> 
                <i class="fa-solid fa-house"></i>
            </a>
        </form>
    </div>
</body>
</html>
