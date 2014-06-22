<?php
include_once("Endereco.php");

class Pessoa {

    private $nome;
    private $telefone;
    private $Endereco;
    private $id;

    public function __construct() {
        $this->Endereco = new Endereco();
    }

    public function __destruct() {
        foreach ($this as $key => $value) {
            unset($this->key);
        }
        foreach(array_keys(get_defined_vars()) as $var) {
            unset(${"$var"});
        }
        unset($var);
    }

/*    public function setEndereco($rua, $numero, $bairro, $complemento="") {
        $this->Endereco->setEndereco($rua, $numero, $bairro, $complemento);
    }
*/
    public function setEndereco($endereco) {
        $this->endereco = $endereco;
    }

    public function getEndereco() {
        return $this->endereco;
    }

/*    public function getEndereco() {
        return $this->Endereco->getEndereco();
    }
*/
    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getTelefone() {
        return $this->telefone;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getId() {
        return $this->id;
    }
}
