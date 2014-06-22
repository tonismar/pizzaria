<?php
include_once('../view/ViewPedido.php');
$view = new ViewPedido();
$view->setPessoa($_GET['pessoa']);
$view->render();
?>
