<?php

class Produtos_model extends CI_Model 
{

    public function buscaTodos()
    {
        return $this->db->get("produtos")->result_array();//metodo que fazer busca 
    }
}