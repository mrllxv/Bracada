<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Desvincular Modalidade</title>
    <link rel="stylesheet" href="../../styles/global.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
</head>

<body class="form-page">
    <div class="form-container">
        <h1>Desvincular Modalidade do Atleta</h1>
        <form action="/Bracada/dbcreate/desvincular_modalidade.php" method="POST" class="form" id="desvincular-form">
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
                <button type="submit" class="btn btn_delete">
                    <i class="fa-solid fa-unlink"></i> Desvincular
                </button>
                <button type="reset" class="btn btn_reset">Limpar</button>
            </div>

            <a href="/Bracada/views/atleta/vincular_modalidade_form.php" class="voltar">
                <i class="fa-solid fa-house"></i> Voltar
            </a>
        </form>
    </div>
</body>

</html>
