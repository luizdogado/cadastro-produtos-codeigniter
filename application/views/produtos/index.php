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

            <?php if (!$this->session->userdata("usuario_logado")) : ?>
            <h1> Login </h1>
            <form method="post" class="form-control" action="http://localhost:8080/login/autenticar" enctype="multipart/form-data" >
            <div class="">
                    <h5>Email</h5>
                    <input name="email" class="form-control" type="text" size="50">

                    <h5>Senha</h5>
                    <input name="senha" class="form-control" type="password" size="50">
                </div>

                <div class="text-center mt-3">
                    <button type="submit" class="btn btn-primary" title="Salvar dados" data-tooltip="true">Salvar</button>
                </div>
            </form>

            <h1>Cadastro</h1>
            <form method="post" class="form-control" action="http://localhost:8080/usuarios/novo" enctype="multipart/form-data" >
                <div class="">
                    <h5>Nome</h5>
                    <input name="nome" class="form-control" type="text" size="50">

                    <h5>Email</h5>
                    <input name="email" class="form-control" type="text" size="50">

                    <h5>Senha</h5>
                    <input name="senha" class="form-control" type="password" size="50">
                </div>

                <div class="text-center mt-3">
                    <button type="submit" class="btn btn-primary" title="Salvar dados" data-tooltip="true">Salvar</button>
                </div>
            </form>
            <?php endif ?>
        </div>
    </body>
</html>