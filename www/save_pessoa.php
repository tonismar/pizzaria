<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
<?php
include_once('../view/ViewPessoa.php');

if ($_POST['Salvar']) {
    array_pop($_POST);
    $view = new ViewPessoa();
    $view->salvar($_POST);
}
?>
<p><a href="index.php">Voltar</a></p>
</body>
</html>
