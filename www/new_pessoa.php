<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
    <form action="save_pessoa.php" method="post">
        <label for="nome">Nome</label>
        <input type="text" name="nome" value="" size="50"><br /><br />

        <label for="telefone">Telefone</label>
        <input type="text" name="telefone" value=""><br /><br />

        <label for="endereco">Endereço</label>
        <input type="text" name="endereco" value="" size="80"><br /><br />

        <input type="submit" name="Salvar" value="Salvar">&nbsp;&nbsp;
        <a href="javascript:history.back()">Voltar</a>
    </form>
</body>
</html>
