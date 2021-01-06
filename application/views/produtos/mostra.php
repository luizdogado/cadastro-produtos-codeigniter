           <h2><?= $produto["nome"]?></br></h2>      
            Preco: <?= numeroEmReais($produto["preco"])?></br>      
            <?= auto_typography(html_escape($produto["descricao"]))?>
        
            <h2>Compre agora mesmo!</h2>

            <form method="post" action="http://localhost:8080/vendas/novo" enctype="multipart/form-data" >
                <div class="form-control">

                        <input type="hidden" name="produto_id" value="<?php echo $produto['id'];?>" />
                    <h5>Data de entrega</h5>
                        <input name="data_de_entrega" class="form-control" id="data_de_entrega" type="data" value=""/>
                    </div>

                    <div class="text-center mt-3">
                        <button type="submit" class="btn btn-primary" title="autenticar" data-tooltip="true">Comprar</button>
                        <a method="post" class="btn btn-primary" href="http://localhost:8080/produtos/voltar">Voltar</a>
                    </div>
