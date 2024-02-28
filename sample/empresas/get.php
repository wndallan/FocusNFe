<?php

require_once('../conf.php');
require_once('../../vendor/autoload.php');

use FocusNfe\Empresas;

$focusnfe = new Empresas();

$focusnfe->setTest(true);
$focusnfe->setToken(TOKEN_PRINCIPAL);

$res = $focusnfe->get('70669');

var_dump($res);

?>