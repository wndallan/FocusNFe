<?php

namespace FocusNfe;

class Empresas extends FocusNFe {
    
    public function __construct() {
        $this->setUrl('/v2/empresas');
    }

    public function add($vo) {

        $this->setMethod('POST');
        $this->setData($vo);

        return $this->send();

    }

    public function edit($vo, $id) {

        $this->setUrl($this->getUrl().'/'.$id);
        $this->setMethod('PUT');
        $this->setData($vo);

        return $this->send();

    }

    public function delete($id) {

        $this->setUrl($this->getUrl().'/'.$id);
        $this->setMethod('DELETE');
        $this->setData([]);

        return $this->send();

    }
    
    public function get($id) {

        $this->setUrl($this->getUrl().'/'.$id);
        $this->setMethod('GET');
        $this->setData([]);

        return $this->send();

    }

}

?>