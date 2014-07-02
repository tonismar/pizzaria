<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script language="javascript">
        $(document).ready( function () {
            $('#tamanho').change( function() {
                switch ($(this).val()) {
                    case 'P':
                        $('#valor').val('30,00');
                        break;
                    case 'M':
                        $('#valor').val('45,00');
                        break;
                    case 'G':
                        $('#valor').val('60,00');
                        break;
                }
            });

            $('#add').click( function() {
                    $('#tblitens').append('<tr><td>' + ($('#tblitens tr').length-1) + '</td><td>' + $('#tamanho').val() + '</td><td>' + $('#sabores').val() + '</td><td>' + $('#valor').val() + '</td>');
                    $('#sabores').val('');
                    $('valor').val('');
            });

            $('#salvar').live('click', function(e) {
                var itens = new Array();
                var i = 0;
                var id_pessoa = $('#id_pessoa').val();
                var data = $('#data').val();
                var total = 0;

                e.preventDefault();
                $('#tblitens tr').each( function() {
                    var t = $(this).find('td').eq(0).html();
                    if ((t != '&nbsp;') && (t != null)) {
                        itens[i] = {tamanho:$(this).find('td').eq(1).html(),
                                    sabores:$(this).find('td').eq(2).html(),
                                    valor:$(this).find('td').eq(3).html()};
                        total = total + parseInt($(this).find('td').eq(3).html());
                        i = i + 1;
                    }
                });

                if (confirm('Salvar pedido?')) {
                    $.ajax({
                        url: 'save_pedido.php',
                        type: 'POST',
                        dataType: 'json',
                        data: {itens: itens, id_pessoa: id_pessoa, data: data, total: total},
                        success: function(response) {
                            alert('Pedido salvo.');
                        },
                        error : function (XMLHttpRequest, ajaxOptions, thrownError) {
                            alert("Erro ao salvar pedido");
                        }
                    });
                }
            });

        });

    </script>
</head>
<body>
    <form id="frmPedido" action="save_pedido.php" method="post">
        <input type="hidden" id="id_pessoa" name="id_pessoa" value="<?=$_GET['id_pessoa']?>">
        Data:&nbsp;<input type="text" id='data' name='data' value="<?=date('d/m/Y')?>" readonly="true"><br /><br />
        Tamanho:&nbsp;
        <select id="tamanho" name="tamanho">
            <option value="" selected>selecione</option>
            <option value="P">P</option>
            <option value="M">M</option>
            <option value="G">G</option>
        </select><br /><br />
        Valor:&nbsp;<input type='text' id='valor' name='valor' readonly="true" size="5"><br /><br />
        Sabores:&nbsp;<input type='text' id='sabores' name='sabores' value='' size='60'>
        <input type='button' value='+' id='add' name='add'><br /><br />
        Itens:<br /><br />
        <div id="itens">
            <table id="tblitens" border="0" width="500">
                <tr>
                    <th>&nbsp;</th>
                    <th>Tamanho</th>
                    <th>Sabores</th>
                    <th>Valor</th>
                </tr>
                <tr>
                    <td colspan="4">&nbsp;</td>
                </tr>
            </table>
        </div>
        <input type='button' value='Salvar' id='salvar' name='salvar'>
    </form>
</body>
</html>
