<?php
/*
 * Classe que armazena os dados da 'Pessoa'
 * */
namespace Tridia\Model;

class Pessoa
{
    private int $id;
    private string $nome;
    private string $nascimento;
    private string $cpf;
    private string $familia;

    public function __construct(int $id, string $nome, string $nascimento, string $cpf, string $familia)
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->nascimento = $nascimento;
        $this->cpf = $cpf;
        $this->familia = $familia;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getCpf(): string
    {
        return $this->cpf;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getFamiliaPaterna(string $index): string
    {
        return json_decode($this->familia, true)["parente1"][$index];
    }

    public function getFamiliaMaterna(string $index): string
    {
        return json_decode($this->familia, true)["parente2"][$index];
    }

    public function getNascimento(): string
    {
        $data = new \DateTime($this->nascimento);
        return $data->format('d/m/Y');
    }

    public function __toString(): string
    {
        return "Meu nome é {$this->nome}. {$this->getFamiliaPaterna('nome')} é o meu {$this->getFamiliaPaterna('parentesco')}.";
    }
}
