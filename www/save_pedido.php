<?php
include_once('../view/ViewPedido.php');
$view = new ViewPedido();

$pedido = $pizza = $pizzas = array();
foreach ($_POST as $key => $value) {
    if (!is_array($value)) {
        $pedido[':'.$key] = $value;
    }
}

for ($i=0; $i<=(count($_POST['itens'])-1); $i++) {
    foreach( $_POST['itens'][$i] as $key => $value) {
        $pizza[':'.$key] = $value;
    }
    array_push($pizzas, $pizza);
}

if ($view->controller->registrarPedido($pedido,$pizzas)) {
    echo json_encode(array ('status' => 'success', 'message' => 'Success!'));
} else {
    echo json_encode(array ('status' => 'error', 'message' => 'Error!'));
}
?>
