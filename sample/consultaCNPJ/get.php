<?php

require_once('../conf.php');
require_once('../../vendor/autoload.php');

use FocusNfe\ConsultaCNPJ;

$focusnfe = new ConsultaCNPJ();

$focusnfe->setTest(true);
$focusnfe->setToken(TOKEN_PRINCIPAL);

$res = $focusnfe->get('88888888888778');




var_dump($res);

?>