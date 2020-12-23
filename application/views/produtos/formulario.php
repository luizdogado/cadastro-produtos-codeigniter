<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    </head>
        <body>
            <h1>Cadastro de novo produto</h1>
                <form method="post" action="http://localhost:8080/produtos/novo" enctype="multipart/form-data" >
                    <div class="form-control">
                        <h5>Nome</h5>
                        <input name="nome" class="form-control" type="text" size="50">

                        <h5>Preco</h5>
                        <input name="preco" class="form-control" type="number" size="50">

                        <h5>Descricao</h5>
                        <textarea name="descricao" class="form-control" type="text"></textarea>

                    </div>

                    <div class="text-center mt-3">
                        <button type="submit" class="btn btn-primary" title="Salvar dados" data-tooltip="true">Salvar</button>
            </div>
        </body>
    </form>
</html>