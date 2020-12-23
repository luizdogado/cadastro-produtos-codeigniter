<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    </head>
        
        <body>
            <div class="container">

                <?php if ($this->session->flashdata("success")) :?>       
                <p class = "alert alert-success"><?= $this->session->flashdata("success") ?></p>
                <?php endif ?>
                <?php if ($this->session->flashdata("danger")) :?> 
                <p class = "alert alert-danger"><?= $this->session->flashdata("danger") ?></p>
                <?php endif ?>
                
                <h1>Produtos</h1>
                <table class="table">
                <?php foreach($produtos as $produto) : ?>
                    <tr>
                        <td><?= $produto["nome"]?></td>
                        <td><?= numeroEmReais($produto["preco"])?></td>
                    </tr>
                <?php endforeach ?>
                </table>  

                <?php if ($this->session->userdata("usuario_logado")) : ?>
                    <a method="post" class="btn btn-primary" href="http://localhost:8080/produtos/formulario">Novo Produto</a>


                    <a method="post" class="btn btn-primary" href="http://localhost:8080/login/logout">Logout</a>

                    <?php else : ?>

                <div class="container">
                <div class="row">
                <div class="col">
                <h1>Cadastro</h1>
                <form method="post" action="http://localhost:8080/usuarios/novo" enctype="multipart/form-data" >
                    <div class="form-control">
                        <h5>Nome</h5>
                        <input name="nome" class="form-control" type="text" size="50">

                        <h5>Email</h5>
                        <input name="email" class="form-control" type="text" size="50">

                        <h5>Senha</h5>
                        <input name="senha" class="form-control" type="password" size="50">
                    </div>

                    <div class="text-center mt-3">
                        <button type="submit" class="btn btn-primary" title="Salvar dados" data-tooltip="true">Cadastrar</button>
                    </div>
                </form>

                </div>
                <div class="col">

                <h1> Login </h1>
                <form method="post" action="http://localhost:8080/login/autenticar" enctype="multipart/form-data" >
                <div class="form-control">
                        <h5>Email</h5>
                        <input name="email" class="form-control" type="text" size="50">

                        <h5>Senha</h5>
                        <input name="senha" class="form-control" type="password" size="50">
                    </div>

                    <div class="text-center mt-3">
                        <button type="submit" class="btn btn-primary" title="Salvar dados" data-tooltip="true">Login</button>
                    </div>
                </form>

                <?php endif ?>
                </div>
            </div>
    </body>
</html>