<?php

class Vendas_model extends CI_Model
{

    public function salvar($venda)
    {
        $this->db->insert("vendas", $venda);
        $this->db->update("produtos", // update no campo vendido da tabela produtos 
            array('vendido'=>TRUE),
            array("id"=>$venda["produto_id"])// where faz o update
        );
    }
}