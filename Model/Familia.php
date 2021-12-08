<?php
/*
 * Classe que armazena os dados da 'Família'
 * */

namespace Tridia\Model;

class Familia
{

    private string $nome;
    private string $parentesco;

    public function __construct(string $nome, string $parentesco)
    {
        $this->nome = $nome;
        $this->parentesco = $parentesco;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getParentesco(): string
    {
        return $this->parentesco;
    }

    public function geraArray(): array
    {
        return array("nome"=>$this->getNome(), "parentesco" => $this->getParentesco());
    }

}