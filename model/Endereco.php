<?php
class Endereco {
    private $rua;
    private $numero;
    private $bairro;
    private $complemento;

    public function setEndereco($rua, $numero, $bairro, $complemento="") {
        $this->rua = $rua;
        $this->numero = $numero;
        $this->bairro = $barro;
        $this->complemento = $complemento;
    }

    public function getEndereco() {
        return $this->rua.' '.$this->numero.' '.$this->bairro.' '.$this->complemento;
    }
}
