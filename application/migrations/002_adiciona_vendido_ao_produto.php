<?php

class Migration_adiciona_vendido_ao_produto extends CI_Migration
{
    public function up()
    {
        $this->dbforge->add_column('produtos', array(//na tabela produtos adicona um array de campos
            'vendido' => array(
                'type' => 'boolean',
                'default' => 'FALSE'
            )
        ));
    }

    public function ddown()
    {
        $this->dbforge->drop_column('produtos', 'vendido');
    }
}