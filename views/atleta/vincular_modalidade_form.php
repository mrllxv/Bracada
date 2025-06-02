<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Vincular Modalidade</title>
    <link rel="stylesheet" href="../../styles/global.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
</head>

<body class="form-page">
    <div class="form-container">
        <h1>Vincular Modalidade ao Atleta</h1>
        <form action="/Bracada/actions/vincular_modalidade.php" method="POST" class="form" id="vincular-form">
            <label for="id_atleta">
                <i class="fa-solid fa-id-badge icon-modify"></i>
                <input type="number" name="id_atleta" id="id_atleta" placeholder="ID do Atleta" required min="1" />
            </label>

            <label for="id_modalidade">
                <i class="fa-solid fa-water icon-modify"></i>
                <select name="id_modalidade" id="id_modalidade" required>
                    <option value="">Selecione uma Modalidade</option>
                    <option value="1">Crawl</option>
                    <option value="2">Costas</option>
                    <option value="3">Peito</option>
                    <option value="4">Borboleta</option>
                </select>
            </label>

            <div class="btns__container">
                <button type="submit" class="btn btn_submit">Vincular</button>
                <button type="reset" class="btn btn_reset">Limpar</button>
            </div>

            <div class="btns__container" style="margin-top: 20px;">
                <a href="/Bracada/views/atleta/cadastroMedalhaForm.php" class="btn btn_submit" style="text-decoration:none; display:inline-block; padding:10px 20px; background-color:#007bff; color:#fff; border-radius:5px; text-align:center;">
                    <i class="fa-solid fa-medal"></i> Cadastrar Medalha
                </a>
            </div>

            <a href="/Bracada/views/atleta/cadastroAtletaForm.php" class="voltar">
                <i class="fa-solid fa-house"></i> Voltar
            </a>
        </form>
    </div>
</body>

</html>