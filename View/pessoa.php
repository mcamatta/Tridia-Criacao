<?php
/*
 * Arquivo que captura e mostra as informacoes do usuário
 * */
use Tridia\Controller\GeraJson;
use Tridia\Model\Familia;
use Tridia\Model\Pessoa;
require_once '../Controller/GeraJson.php';
require_once '../Model/Pessoa.php';
require_once '../Model/Familia.php';

$familiaPaterna = new Familia('José', 'Pai');
$familiaMaterna = new Familia('Maria', 'Mãe');
$geraJson =  GeraJson::geraJson($familiaPaterna, $familiaMaterna);

$pessoa = new Pessoa(1,'João', '2016-10-02', '123.456.789-10', $geraJson);

echo "<pre>";
var_dump($pessoa);

$nome = $pessoa->getNome();
$nomeParente = $pessoa->getFamiliaPaterna('nome');
$parentesco = $pessoa->getFamiliaPaterna('parentesco');

echo "Meu nome é $nome. $nomeParente é meu $parentesco.";

//Classe convertida para string
//echo $pessoa;