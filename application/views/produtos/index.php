
            
            <h1>Produtos</h1>
            <table class="table">
            <?php foreach($produtos as $produto) : ?>
                <tr>
                    <td><?= anchor("produtos/{$produto['id']}", $produto["nome"]) ?></td>
                    <td><?= character_limiter($produto["descricao"], 10)?></td>
                    <td><?= numeroEmReais($produto["preco"])?></td>
                </tr>
            <?php endforeach ?>
            </table>  

            <?php if ($this->session->userdata("usuario_logado")) : //se usuarios estiver logado mostra somente os botoes?>
                <div class="text-center mt-3">
                <a method="post" class="btn btn-primary" href="produtos/formulario">Novo Produto</a>

                <a method="post" class="btn btn-primary" href="vendas/index">Produtos Vendidos</a>

                <a method="post" class="btn btn-primary" href="login/logout">Logout</a>
                </div>
                <?php else : //se nao mostra cadastro e login?>

            <div class="row">
            <div class="col">
            
                <h1>Cadastro</h1>
                <form method="post" action="http://localhost:8080/usuarios/novo" enctype="multipart/form-data" >
                    <div class="form-control">
                        <h5>Nome</h5>
                        <input name="nome" class="form-control" type="text" required minlength="4" />

                        <h5>Email</h5>
                        <input name="email" class="form-control" type="text" size="50" required  />

                        <h5>Senha</h5>
                        <input name="senha" class="form-control" type="password" size="50" required minlength="4" />

                    </div>

                    <div class="text-center mt-3">
                        <button type="submit" class="btn btn-primary" title="Novo" data-tooltip="true">Cadastrar</button>
                    </div>
                </form>
            </div>
            <div class="col">

                <h1> Login </h1>
                <form method="post" action="http://localhost:8080/login/autenticar" enctype="multipart/form-data" >
                <div class="form-control">
                        <h5>Email</h5>
                        <input name="email" class="form-control" type="text" size="50"/>

                        <h5>Senha</h5>
                        <input name="senha" class="form-control" type="password" size="50"/>
                    </div>

                    <div class="text-center mt-3">
                        <button type="submit" class="btn btn-primary" title="autenticar" data-tooltip="true">Login</button>
                    </div>
                </form>

                <?php endif ?>
            </div>
        </div>
