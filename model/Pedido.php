<?php
include_once('Pizza.php');

class Pedido {

    private $data;
    private $observacao;
    private $total;
    private $Pizzas = array();

    public function setData($data) {
        $this->data = $data;
    }

    public function getData() {
        return $this->data;
    }

    public function setObservacao($obs) {
        $this->observacao = $obs;
    }

    public function getObservacao() {
        return $this->observacao;
    }

    public function setTotal($total) {
        $this->total = $total;
    }

    public function getTotal() {
        return $this->total;
    }

    public function addPizza($pizza) {
        array_push($this->Pizzas, $pizza);
    }

    public function removePizza($key) {
    }
}
?>
