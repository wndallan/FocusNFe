<?php

namespace FocusNfe;

class FocusNFe {

    private $server = 'https://api.focusnfe.com.br';
    private $test = false;
    private $url = '';
    private $method = '';
    private $token = '';
    private $data = '';

    public function setServer ($value) {
        $this->server = $value;
    }

    public function getServer () {
        return $this->server;
    }

    public function setTest ($value) {
        $this->test = $value;
    }

    public function getTest () {
        return $this->test;
    }

    public function setUrl ($value) {
        $this->url = $value;
    }

    public function getUrl () {
        return $this->url;
    }

    public function setMethod ($value) {
        $this->method = $value;
    }

    public function getMethod () {
        return $this->method;
    }

    public function setToken ($value) {
        $this->token = $value;
    }

    public function getToken () {
        return $this->token;
    }

    public function setData ($value) {
        $this->data = $value;
    }

    public function getData () {
        return $this->data;
    }

    public function send () {

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $this->server.$this->url.( $this->test ? '?dry_run=1' : '' ) );
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $this->method);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($this->data));
        curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
        curl_setopt($ch, CURLOPT_USERPWD, $this->token);

        $body = curl_exec($ch);
        $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);

        return [ 'reponse' => $body, 'http_code' => $http_code];

    }

}

?>