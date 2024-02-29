<?php

namespace FocusNfe;

class NFe extends FocusNFe {
    
    public function __construct() {
        $this->setUrl('/v2/nfe');
    }

    public function add($vo, $ref) {

        $this->setUrl($this->getUrl().'?ref='.$ref);
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