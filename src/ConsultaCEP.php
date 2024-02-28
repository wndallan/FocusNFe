<?php

namespace FocusNfe;

class ConsultaCEP extends FocusNFe {
    
    public function __construct() {
        $this->setUrl('/v2/ceps');
    }
    
    public function get($id) {

        $this->setUrl($this->getUrl().'/'.$id);
        $this->setMethod('GET');
        $this->setData([]);

        return $this->send();

    }

}

?>