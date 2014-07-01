<?php
if ($_GET['telefone']) {
    include_once('../view/ViewPessoa.php');
    $view = new ViewPessoa();
    $view->setTelefone($_GET['telefone']);
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
