<?php
include_once('../controllers/ControllerPessoa.php');

class ViewPessoa {

    private $dados;
    private $controller;

    function __construct() {
        $this->controller = new ControllerPessoa();
    }

    private function setDados($array) {
        $this->dados = $array();
    }

    public function render() {
        $arr = $this->controller->buscarPessoa();
        echo "<!DOCTYPE html><html><head><meta charset='utf-8'></head><body>";
        foreach ($arr as $key => $row) {
            echo "Nome: ".$row->getNome()."<br />".
                 "Telefone: ".$row->getTelefone()."<br />".
                 "Endereço: ".$row->getEndereco();
            echo "<br /><br />";
        }
        echo "</body></html>";
    }
}
?>
