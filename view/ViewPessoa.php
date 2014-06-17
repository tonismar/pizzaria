<?php
class ViewPessoa {

    private $dados;

    private function setDados($array) {
        $this->dados = $array();
    }

    public function render() {
        foreach ($this->dados as $key => $row) {
            echo "Nome: ".$row->getNome()."< /br>".
                 "Telefone: ".$row->getTelefone()."< /br>".
                 "Endereço: ".$row->getEndereco();
        }
    }
}
?>
