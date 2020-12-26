<?php

class Vendas_model extends CI_Model
{

    public function salvar($venda)
    {
        $this->db->insert("vendas", $venda);
    }
}