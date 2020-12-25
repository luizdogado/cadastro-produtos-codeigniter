<?php

class Migration_Cria_tabela_de_vendas extends CI_Migration
{

    public function up()//metodo que eh chamado para criar uma migrastion
    {   
        $this->dbforge->add_field(array(//cria um array com os dados da tabela q vai ser criada 
            'id' => array(
                'type' => 'INT',
                'serial' => true
            ),
            'produto_id' => array (
                'type' => 'INT'
            ),
            'comprador_id' => array(
                'type' => 'INT'
            ),
            'data_de_entrega' => array(
                'type' => 'DATE'
            )
        ));
        $this->dbforge->add_key('id', TRUE); // faz id chave primaria
        $this->dbforge->create_table('vendas');
    }

    public function down()//motodo que desfaz a migration caso tenha q voltar atras
    {
            $this->dbforge->drop_table('vendas');
    }
}