<?php
/*
 * Classe que gera o json de acordo com os dados do usuário
 * */
namespace Tridia\Controller;
require_once "../Model/Familia.php";

use Tridia\Model\Familia;

abstract class GeraJson
{
    public static function geraJson(Familia $pai, Familia $mae): string
    {
        $juntaArrayAssoc = array("parente1"=>$pai->geraArray(), "parente2"=>$mae->geraArray());
        return json_encode($juntaArrayAssoc, JSON_UNESCAPED_UNICODE);
    }
}