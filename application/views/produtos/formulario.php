<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    </head>
    <body>
        <div class="form-control">
        <h1>Cadastro de novo produto</h1>
        <?= validation_errors("<p class='alert alert-danger'>", "</p>") //exibe qual quer erro de validation ?>
        
            <form method="post" action="http://localhost:8080/produtos/novo" enctype="multipart/form-data">
                <h5>Nome</h5>
                <input name="nome" class="form-control" type="text" size="50" value="<?php echo set_value('nome', '');?>"/>

                <h5>Preco</h5>
                <input name="preco" class="form-control" type="number" size="50" value="<?php echo set_value('preco', '');?>"/>

                <h5>Descricao</h5>
                <textarea name="descricao" class="form-control" type="text" value="<?php echo set_value('descricao', '');?>"></textarea>

                
                <div class="row">
                <div class="col-md-6">
                    <div class="text-end mt-3">
                        <button type="submit" class="btn btn-primary" data-tooltip="true">Salvar</button>
                    </div>    
            </form>
                </div>
                <div class="col-md-6">
                    <form method="post" action="http://localhost:8080/produtos/voltar" enctype="multipart/form-data">
                        <div class="text mt-3">
                            <button type="submit" class="btn btn-primary" data-tooltip="true">Voltar</button>
                        </div>
                    </form>
                </div>
            </div>  
        </div>
    </body> 
</html>