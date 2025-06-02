<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Cadastrar Medalha</title>
    <link rel="stylesheet" href="../../styles/global.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
</head>
<body class="form-page">
    <div class="form-container">
        <h1>Cadastrar Medalha para Atleta</h1>
        <form action="/Bracada/actions/cadastrarMedalha.php" method="POST" class="form" id="medalha-form">
            <label for="cod_atleta">
                <i class="fa-solid fa-id-badge icon-modify"></i>
                <input type="number" name="cod_atleta" id="cod_atleta" placeholder="ID do Atleta" required min="1" />
            </label>

            <label for="cod_tipo_medalha">
                <i class="fa-solid fa-medal icon-modify"></i>
                <select name="cod_tipo_medalha" id="cod_tipo_medalha" required>
                    <option value="">Selecione o Tipo de Medalha</option>
                    <option value="1">Ouro</option>
                    <option value="2">Prata</option>
                    <option value="3">Bronze</option>
                </select>
            </label>

            <div class="btns__container">
                <button type="submit" class="btn btn_submit">Cadastrar Medalha</button>
                <button type="reset" class="btn btn_reset">Limpar</button>
            </div>

            <a href="/Bracada/views/atleta/cadastroAtletaForm.php" class="voltar">
                <i class="fa-solid fa-house"></i> Voltar
            </a>
        </form>
    </div>
</body>
</html>
