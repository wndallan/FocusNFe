<?php

namespace FocusNfe;

class ConsultaCNPJ extends FocusNFe {
    
    public function __construct() {
        $this->setUrl('/v2/cnpjs');
    }
    
    public function get($id) {

        $this->setUrl($this->getUrl().'/'.$id);
        $this->setMethod('GET');
        $this->setData([]);

        return $this->send();

    }

}

?>