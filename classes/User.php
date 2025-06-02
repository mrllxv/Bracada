<?php
require_once '../enum/Perfil.php';

class User
{
    private string $nome;
    private int $id_usuario;
    private string $email;
    private string $senha;
    private DateTime $data_nascimento;
    private string $frase_secreta;
    private int $ativo;

    //propriedade do tipo perfil
    private int $cod_tipo_perfil;


    //Construtor do usuario
    public function __construct(int $id_usuario, string $nome, string $email, string $senha, DateTime $data_nascimento, string $frase_secreta, int $cod_tipo_perfil, bool $senhaJaHash = false, int $ativo = 1)
    {
        $this->id_usuario = $id_usuario;
        $this->nome = $nome;
        $this->email = $email;
        // se a senha ja estiver criptografada (como no login), armazena direto
        // se nao, aplica o hash antes de salvar
        //utilizando operador ternario
        $this->senha = $senhaJaHash ? $senha : password_hash($senha, PASSWORD_DEFAULT);
        $this->data_nascimento = $data_nascimento;
        $this->frase_secreta = $frase_secreta;
        $this->cod_tipo_perfil = $cod_tipo_perfil;
        $this->ativo = $ativo;
    }


    //GETTERS
    public function getTipoPerfilId(): int
    {
        return $this->cod_tipo_perfil;
    }

    public function getNome()
    {
        return $this->nome;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function getDataNascimento()
    {
        return $this->data_nascimento;
    }

    public function getFraseSecreta()
    {
        return $this->frase_secreta;
    }

    public function getId()
    {
        return $this->id_usuario;
    }

    public function getAtivo(): int
    {
        return $this->ativo;
    }

    public function getSenha(): string
{
    return $this->senha;
}


    //SETTERS
    public function setTipoPerfilId(int $cod_tipo_perfil): void
    {
        $this->cod_tipo_perfil = $cod_tipo_perfil;
    }

    public function setNome(string $nome): void
    {
        $this->nome = $nome;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function setDataNascimento(DateTime $data_nascimento): void
    {
        $this->data_nascimento = $data_nascimento;
    }

    public function setFraseSecreta(string $frase_secreta): void
    {
        $this->frase_secreta = $frase_secreta;
    }

    public function setSenha(string $senha): void
    {
        $this->senha = password_hash($senha, PASSWORD_DEFAULT);
    }

    public function setAtivo(int $ativo): void
    {
        $this->ativo = $ativo;
    }

    //verifica a frase secreta do usuario
    public function verificarFraseSecreta(string $frase): bool
    {
        return $this->frase_secreta === $frase;
    }

    //pega a descricao do tipo de perfil (Usuario ou Adm)
    public function getDescricaoTipoPerfil(): string
    {
        return Perfil::descricao($this->cod_tipo_perfil);
    }

    //converte o objeto para array
    public function toArray(): array
    {
        return [
            'id_usuario' => $this->id_usuario,
            'nome' => $this->nome,
            'email' => $this->email,
            'data_nascimento' => $this->data_nascimento->format('Y-m-d'),
            'cod_tipo_perfil' => $this->cod_tipo_perfil,
            'descricao_perfil' => $this->getDescricaoTipoPerfil()
        ];
    }
}
