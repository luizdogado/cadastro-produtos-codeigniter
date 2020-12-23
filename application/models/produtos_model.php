<?php

class Produtos_model extends CI_Model 
{

    public function buscaTodos()
    {
        return $this->db->get("produtos")->result_array();//metodo que fazer busca 
    }

    public function salva($produto)
    {
        $this->db->insert("produtos", $produto); //no banco de dados, insere na tabela produtos a $produto da controller produtos
    }
}