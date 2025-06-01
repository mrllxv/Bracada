<?php

require_once 'User.php';
require_once '../includes/db.php';

class Login
{
    private $conn;

    public function __construct(mysqli $conn)
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        $this->conn = $conn;
    }

    public function autenticar($email, $senha)
    {
        $email = mysqli_real_escape_string($this->conn, $email);

        $stmt = $this->conn->prepare("SELECT * FROM usuario WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result && $row = $result->fetch_assoc()) {
            if ((int)$row['ativo'] === 1 && password_verify($senha, $row['senha'])) {
                return new User(
                    (int)$row['id_usuario'],
                    $row['nome'],
                    $row['email'],
                    $row['senha'], // já hashada
                    new DateTime($row['data_nascimento']),
                    (int)$row['cod_tipo_perfil'],
                    true, // senha já está hashada
                    (int)$row['ativo']
                );
            }
        }

        return false;
    }
}
