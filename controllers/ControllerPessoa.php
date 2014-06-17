<?php
include_once('../dao/PessoaDAO.php');
include_once('../view/ViewPessoa.php');

class ControllerPessoa {

    private $PessoaDAO;
    private $ViewPessoa;

    public functin __construct() {
        $this->PessoaDAO = new PessoaDAO();
        $this->ViewPessoa = new ViewPessoa();
    }

    public function cadastrarPessoa($Pessoa) {

    }

    public function buscarPessoa() {
        $this->ViewPessoa->setDados($this->PessoaDAO->load());
    }
}
