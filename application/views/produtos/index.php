<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Produtos</h1>
        <table class="table">
        <?php foreach($produtos as $produto) : ?>
            <tr>
                <td><?= $produto["nome"]?></td>
                <td><?= numeroEmReais($produto["preco"])?></td>
            </tr>
        <?php endforeach ?>
        </table>  
    </div>
</body>
</html>