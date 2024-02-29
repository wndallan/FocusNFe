<?php

namespace FocusNfe;

class ConsultaNCM extends FocusNFe {
    
    public function __construct() {
        $this->setServer('https://homologacao.focusnfe.com.br');
        $this->setUrl('/v2/ncms');
    }
    
    public function get($search) {

        $this->setUrl($this->getUrl().'?codigo='.$search);
        $this->setMethod('GET');
        $this->setData([]);

        return $this->send();

    }

}

?>