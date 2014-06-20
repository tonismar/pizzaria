<?php
include_once('../dao/PedidoDAO.php');

class ControllerPedido {

    private $PedidoDAO;

    public function __construct() {
        $this->PedidoDAO = new PedidoDAO();
    }

    public function registrarPedido() {

    }

    public function buscarPedido() {
        return $this->PedidoDAO->load();
    }

    public function cancelarPedido() {

    }
}
