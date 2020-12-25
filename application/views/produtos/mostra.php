<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <h2><?= $produto["nome"]?></br></h2>      
            Preco: <?= numeroEmReais($produto["preco"])?></br>      
            <?= auto_typography(html_escape($produto["descricao"]))?>
        <a method="post" class="btn btn-primary" href="http://localhost:8080/produtos/voltar">Voltar</a>
        </div>
    </body>
</html>      