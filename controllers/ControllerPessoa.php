<?php
include_once('../dao/PessoaDAO.php');

class ControllerPessoa {

    private $PessoaDAO;

    public function __construct() {
        $this->PessoaDAO = new PessoaDAO();
    }

    public function cadastrarPessoa($Pessoa) {

    }

    public function buscarPessoa($telefone) {
        $where = "where telefone = ".$telefone;
        return $this->PessoaDAO->load("*", $where);
    }
}
