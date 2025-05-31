<?php
require_once '../includes/db.php';
require_once '../classes/User.php';
require_once '../enum/Perfil.php';


if (isset($_POST['nome'], $_POST['email'], $_POST['senha'], $_POST['data_nascimento'])) {
        echo $_POST['nome'];
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $data_nascimento = $_POST['data_nascimento'];

        if (empty($nome) || empty($email) || empty($senha) || empty($data_nascimento)) {
            echo "Preencha todos os campos do formulário.";
            exit;
        }

        try {
            $conn = connect();

            // Verificando se já existe um usuário com esse email
            $stmt = $conn->prepare("SELECT id_usuario FROM usuario WHERE email = ?");
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $stmt->store_result();

            if ($stmt->num_rows > 0) {
                echo "Este email já está cadastrado.";
                exit;
            }

            $usuario = new User(
                0,  // o id será gerado automaticamente pelo banco mysql (AUTO_INCREMENT)
                $nome,
                $email,
                $senha,
                new DateTime($data_nascimento),
                Perfil::USUARIO, // perfil padrão para usuario
                false
            );

            // Inserindo no banco MySQL
            $stmtInsert = $conn->prepare("INSERT INTO usuario (nome, email, senha, data_nascimento, cod_tipo_perfil) VALUES (?, ?, ?, ?, ?)");
            $senhaHash = password_hash($senha, PASSWORD_DEFAULT);
            $data = $usuario->getDataNascimento()->format('Y-m-d');
            $stmtInsert->bind_param("ssssi", $nome, $email, $senhaHash, $data, $usuario->getTipoPerfilId());
            $stmtInsert->execute();

            $conn->close();

            echo "Usuário cadastrado com sucesso.";

        } catch (Exception $e) {
            echo "Erro: " . $e->getMessage();
        }
    } else {
        echo "Preencha todos os campos do formulário.";
    }

