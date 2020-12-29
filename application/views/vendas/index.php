<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <h1>Minhas vendas</h1>
            <table class="table">
                <?php foreach($produtosVendidos as $produto) : ?>
                    <tr>
                        <td><?= $produto['nome']?></td>
                        <?php $this->load->helper("date");?>
                        <td><?= dataBancoParaPtBr($produto['data_de_entrega']) ?></td>
                    </tr>
                <?php endforeach ?>
            </table>
        </div>
    </body>
</html>