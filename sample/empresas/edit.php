<?php

require_once('../conf.php');
require_once('../../vendor/autoload.php');

use FocusNfe\Empresas;

$focusnfe = new Empresas();

$focusnfe->setTest(true);
$focusnfe->setToken(TOKEN_PRINCIPAL);

$res = $focusnfe->edit([
    "nome" => "Nome da empresa Ltda ALOOO",
    "nome_fantasia" => "Nome Fantasia",
    "bairro" => "Vila Isabel",
    "cep" => 80210000,
    "complemento" => "Loja 1",
    "discrimina_impostos" => true,
    "email" => "test@example.com",
    "enviar_email_destinatario" => true,
    "inscricao_estadual" => 1234,
    "inscricao_municipal" => 46532,
    "logradouro" => "Rua João da Silva",
    "numero" => 153,
    "regime_tributario" => 1,
    "telefone" => "4130333333",
    "municipio" => "Curitiba",
    "uf" => "PR",
    "habilita_nfe" => true,
    "habilita_nfce" => true,
    "csc_nfce_producao" => "ABCDEF",
    "id_token_nfce_producao" => "00001"
], '70669');

var_dump($res);

?>