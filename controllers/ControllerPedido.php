<?php
include_once('../dao/PedidoDAO.php');
include_once('../dao/PizzaDAO.php');

class ControllerPedido {

    private $PedidoDAO;
    private $PizzaDAO;

    public function __construct() {
        $this->PedidoDAO = new PedidoDAO();
        $this->PizzaDAO = new PizzaDAO();
    }

    public function registrarPedido($Pedido, $Pizzas) {
        $pedido = $this->PedidoDAO->insert('id_pessoa, data, total', $Pedido);
        if ($pedido) {
            foreach ($Pizzas as $Pizza) {
                $Pizza[':id_pedido'] = $pedido;
                $item = $this->registrarItensPedido($Pizza);
            }
        } else {
            return false;
        }

        return $pedido;
    }

    private function registrarItensPedido($Pizza) {
        return $this->PizzaDAO->insert('tamanho, sabores, valor, id_pedido', $Pizza);
    }

    public function buscarPedido($pessoa) {
        $where = "where id_pessoa = ".$pessoa;
        return $this->PedidoDAO->load("*", $where);
    }

    public function buscarItensPedido($pedido) {
        $where = "where id_pedido = ".$pedido;
        return $this->PizzaDAO->load("*", $where);
    }

    public function cancelarPedido() {

    }
}
