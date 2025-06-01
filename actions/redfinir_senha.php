<?php
require_once '../includes/db.php';
require_once '../classes/User.php';

// verifica se os dados foram enviados
if (isset($_POST['email'], $_POST['frase_secreta'], $_POST['nova_senha'])) {
    $email = trim($_POST['email']);
    $frase = trim($_POST['frase_secreta']);
    $novaSenha = trim($_POST['nova_senha']);

    if (empty($email) || empty($frase) || empty($novaSenha)) {
        echo "Todos os campos são obrigatórios.";
        exit;
    }

    $conn = connect();

    // buscar usuário pelo e-mail
    $stmt = $conn->prepare("SELECT * FROM usuario WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $resultado = $stmt->get_result();

    if ($resultado && $resultado->num_rows > 0) {
        $dados = $resultado->fetch_assoc();
        $usuario = new User(
            $dados['id_usuario'],
            $dados['nome'],
            $dados['email'],
            $dados['senha'], // senha já está com hash
            new DateTime($dados['data_nascimento']),
            (int)$dados['cod_tipo_perfil'],
            true,
            (int)$dados['ativo']
        );

        // definir frase secreta no objeto
        $usuario->setFraseSecreta($dados['frase_secreta']);

        // verificar a frase informada
        if ($usuario->verificarFraseSecreta($frase)) {
            $usuario->setSenha($novaSenha);

            // pegar senha hashada atualizada
            $senhaHash = $usuario->getSenha();

            // atualizar no banco de dados
            $stmtUpdate = $conn->prepare("UPDATE usuario SET senha = ? WHERE id_usuario = ?");
            $stmtUpdate->bind_param("si", $senhaHash, $usuario->getId());

            if ($stmtUpdate->execute()) {
                echo "Senha redefinida com sucesso.";
            } else {
                echo "Erro ao atualizar a senha.";
            }
            $stmtUpdate->close();
        } else {
            echo "Frase secreta incorreta.";
        }
    } else {
        echo "E-mail não encontrado.";
    }

    $stmt->close();
    $conn->close();
} else {
    echo "Preencha todos os campos do formulário.";
}