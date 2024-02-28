<?php

require_once('../conf.php');
require_once('../../vendor/autoload.php');

use FocusNfe\ConsultaCEP;

$focusnfe = new ConsultaCEP();

$focusnfe->setTest(true);
$focusnfe->setToken(TOKEN_PRINCIPAL);

$res = $focusnfe->get('17603190');

var_dump($res);

?>