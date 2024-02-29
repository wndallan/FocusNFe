<?php

require_once('../conf.php');
require_once('../../vendor/autoload.php');

use FocusNfe\ConsultaNCM;

$focusnfe = new ConsultaNCM();

$focusnfe->setTest(true);
$focusnfe->setToken(TOKEN_PRINCIPAL);

$res = $focusnfe->get($_REQUEST['ncm']);

var_dump($res, $_REQUEST);

?>