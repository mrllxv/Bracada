<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Atleta</title>
    <link rel="stylesheet" href="../../styles/global.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>

<body class="form-page">
    <div class="form-container">
        <h1>Cadastrar Atleta</h1>
        <form action="/Bracada/dbcreate/create_atleta.php" id="cadastro-form" class="form" method="POST">
            <label for="nome">
                <i class="fa-solid fa-person icon-modify"></i>
                <input type="text" name="nome" placeholder="Nome completo" required>
            </label>

            <label for="genero">
                <i class="fa-solid fa-venus-mars icon-modify"></i>
                <select name="genero" required>
                    <option value="" disabled selected>Selecione o Gênero</option>
                    <option value="Masculino">Masculino</option>
                    <option value="Feminino">Feminino</option>
                </select>
            </label>

            <label for="biografia">
                <i class="fa-solid fa-pen icon-modify"></i>
                <textarea name="biografia" placeholder="Biografia do atleta" required></textarea>
            </label>

            <label for="data_nascimento">
                <i class="fa-solid fa-cake-candles icon-modify"></i>
                <input type="date" name="data_nascimento" required>
            </label>

            <label for="id_pais">
                <i class="fa-solid fa-flag icon-modify"></i>
                <input type="text" name="id_pais" placeholder="País" required>
            </label>

            <div class="btns__container">
                <a href="/Bracada/views/atleta/vincular_modalidade_form.php" class="btn btn_secondary">
                    <i class="fa-solid fa-link"></i> Vincular Atleta a Modalidade
                </a>
                <button type="submit" class="btn btn_submit">Cadastrar</button>
                <button type="reset" class="btn btn_reset">Limpar dados</button>
            </div>

            <a href="/Bracada/pages/athletes/athletes.php" class="voltar">
                <i class="fa-solid fa-house"></i>
                Voltar
            </a>
            <a href="/Bracada/views/atleta/deleteAtletaForm.php"
                class="button nav__buttons nav__buttons--circle nav__buttons--hover nav__buttons--focus">
                <i class="fa-solid fa-trash"></i> Excluir Atleta
            </a>

        </form>
    </div>
</body>

</html>