<?php
if ($_POST['telefone']) {
    include_once('../view/ViewPessoa.php');
    $view = new ViewPessoa();
    $view->setTelefone($_POST['telefone']);
    $view->render();
} else {
    echo "<!DOCTYPE html>
          <html>
            <head><meta charset='utf-8'></head>
            <body>
                Telefone não informado.<br /><br />
                <a href='index.php'>Voltar</a>
            </body>
        </html>";
}
?>
