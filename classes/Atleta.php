<?php
class Atleta
{
    private int $id;
    private string $nome;
    private string $genero;
    private string $biografia;
    private DateTime $data_nascimento;
    private int $cod_pais;
    private int $ativo;

    public function __construct(int $id, string $nome, string $genero, string $biografia, DateTime $data_nascimento, int $cod_pais)
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->genero = $genero;
        $this->biografia = $biografia;
        $this->data_nascimento = $data_nascimento;
        $this->cod_pais = $cod_pais;
    }

    public function getId()
    {
        return $this->id;
    }
    public function getNome()
    {
        return $this->nome;
    }
    public function getGenero()
    {
        return $this->genero;
    }

    public function getBiografia()
    {
        return $this->biografia;
    }

    public function getDataNascimento(): DateTime
    {
        return $this->data_nascimento;
    }
    public function getIdPais(): int
    {
        return $this->cod_pais;
    }
    
    public function getAtivo(): int
    {
        return $this->ativo;
    }

    public function setNome(string $nome)
    {
        $this->nome = $nome;
    }
    public function setGenero(string $genero)
    {
        $this->genero = $genero;
    }

    public function setBiografia(string $biografia)
    {
        $this->biografia = $biografia;
    }

    public function setDataNascimento(DateTime $data)
    {
        $this->data_nascimento = $data;
    }
    public function setIdPais(int $cod_pais)
    {
        $this->cod_pais = $cod_pais;
    }
    public function setAtivo(int $ativo)
    {
        $this->ativo = $ativo;
    }
}
