<?php
include_once('../controllers/ControllerPedido.php');

class ViewPedido {

    private $pessoa;
    private $controller;

    function __construct() {
        $this->controller = new ControllerPedido();
    }

    public function setPessoa($pessoa) {
        $this->pessoa = $pessoa;
    }

    public function getPessoa() {
        return $this->pessoa;
    }

    public function render() {
        $arr = $this->controller->buscarPedido($this->getPessoa());
        echo "<!DOCTYPE html><html><head><meta http-equiv='Content-Type' content='text/html; charset=UTF-8'></head><body>";
        echo "";
        if (count($arr)>0) {
            foreach ($arr as $key => $row) {
                echo "Data: ".$row->getData()."<br />".
                     "Observação: ".utf8_encode($row->getObservacao())."<br />".
                     "Total: ".$row->getTotal();
                echo "<br /><br />";
            }
        } else {
            echo 'Sem pedidos.';
        }
        echo "<a href='new_pedido.php?id_pessoa=".$this->getPessoa()."'>Novo</a>&nbsp&nbsp;<a href='javascript:history.back()'>Voltar</a><br />";
        echo "</body></html>";
    }
}
