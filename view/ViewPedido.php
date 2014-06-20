<?php
include_once('../controllers/ControllerPedido.php');

class ViewPedido {

    private $dados;
    private $controller;

    function __construct() {
        $this->controller = new ControllerPedido();
    }

    private function setDados($array) {
        $this->dados = $array();
    }

    public function render() {
        $arr = $this->controller->buscarPedido();
        echo "<!DOCTYPE html><html><head><meta charset='utf-8'></head><body>";
        echo "";
        foreach ($arr as $key => $row) {
            echo "Data: ".$row->getData()."<br />".
                 "Observaçã o: ".$row->getObservacao()."<br />".
                 "Total: ".$row->getTotal();
            echo "<br /><br />";
        }
        echo "</body></html>";
    }
}
