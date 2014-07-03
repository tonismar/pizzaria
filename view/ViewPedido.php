<?php
include_once('../controllers/ControllerPedido.php');

class ViewPedido {

    private $pessoa;
    public $controller;

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
                $i=1;
                echo "Data: ".$row->getData()."<br />".
                    // "Observação: ".utf8_encode($row->getObservacao())."<br />".
                     "Total: ".number_format($row->getTotal(),2,',','');
                echo "<br />";
                $itens = $this->controller->buscarItensPedido($row->getId());
                echo "Itens:<br /><table style='background-color: #ccc; border: 1px solid' cellpadding='1'>";
                foreach ($itens as $itemRow) {
                    echo "<tr><td>".$i."</td><td>".$itemRow->getSabores()."</td><td>".$itemRow->getTamanho()."</td><td>".$itemRow->getValor()."</td></tr>";
                    $i++;
                }
                echo "</table><br />";
            }
        } else {
            echo 'Sem pedidos.';
        }
        echo "<a href='new_pedido.php?id_pessoa=".$this->getPessoa()."'>Novo</a>&nbsp&nbsp;<a href='javascript:history.back()'>Voltar</a><br />";
        echo "</body></html>";
    }
}
