<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluir Atleta</title>
    <link rel="stylesheet" href="../../styles/global.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body class="form-page">
    <div class="form-container">
        <h1>Excluir Atleta</h1>
        <form action="/Bracada/dbcreate/delete_atleta.php" method="POST" class="form">
            <label for="id">
                <i class="fa-solid fa-id-badge icon-modify"></i>
                <input type="number" name="id" id="id" placeholder="ID do Atleta" required min="1">
            </label>

            <div class="btns__container">
                <button type="submit" class="btn btn_delete">
                    <i class="fa-solid fa-trash"></i> Excluir Atleta
                </button>
                <button type="reset" class="btn btn_reset">
                    <i class="fa-solid fa-eraser"></i> Limpar
                </button>
            </div>

            <a href="/Bracada/pages/athletes/athletes.php" class="voltar">
                <i class="fa-solid fa-house"></i> Voltar
            </a>
        </form>
    </div>
</body>
</html>
