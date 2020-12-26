<?php

class Produtos_model extends CI_Model 
{

    public function buscaTodos()
    {
        return $this->db->get_where("produtos", array(//traz do banco os produtos com campo vendido false
            "vendido" => "0"
        ))->result_array();//metodo que fazer busca 
        
    }

    public function salva($produto)
    {
        $this->db->insert("produtos", $produto); //no banco de dados, insere na tabela produtos a $produto da controller produtos
    }

    public function busca($id)
    {
        return $this->db->get_where("produtos", array( //usando get do metodo controller com where de procura na tabale e pegando array de condicoes primeira igual traz do banco
            "id" => $id
        ))->row_array(); 
    }
}