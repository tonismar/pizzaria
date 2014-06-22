<?php
include_once('../controllers/ControllerPessoa.php');

class ViewPessoa {

    private $telefone;
    private $controller;

    function __construct() {
        $this->controller = new ControllerPessoa();
    }

    public function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    public function getTelefone() {
        return $this->telefone;
    }

    public function render() {
        $arr = $this->controller->buscarPessoa($this->getTelefone());

        echo "<!DOCTYPE html><html><head><meta http-equiv='Content-Type' content='text/html; charset=UTF-8'></head><body>";
        if (count($arr)>0) {
            foreach ($arr as $key => $row) {
                echo "Nome: ".utf8_encode($row->getNome())."<br />".
                     "Telefone: ".$row->getTelefone()."<br />".
                     "Endereço: ".utf8_encode($row->getEndereco());
                echo "<br /><br />";
                echo "<a href='lista_pedido.php?pessoa=".$row->getId()."'>Pedidos</a>";
            }
        } else {
            echo 'Zero resultados.';
        }
        echo "&nbsp;&nbsp;<a href='javascript:history.back()'>Voltar</a>";
        echo "</body></html>";
    }
}
?>
