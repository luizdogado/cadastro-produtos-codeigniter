<?php

class Produtos_model extends CI_Model 
{

    public function buscaTodos()
    {
        $this->db->where("vendido", false);
        return $this->db->get("produtos")->result_array();//metodo que fazer busca 
        
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

    public function buscaVendidos($usuario)
    {
        $id = $usuario['id'];
        $this->db->select("produtos.*, vendas.data_de_entrega");// o que quer selecionar
        $this->db->from("produtos");// fala de qual tabela vem tudo
        $this->db->join("vendas", "vendas.produto_id = produtos.id");//faz join com tabela que ja trouxe
        $this->db->where("vendido", TRUE);
        $this->db->where("usuario_id", $id);
        return $this->db->get()->result_array();//pega todos com resulta_array, nao precisa informar qual tabela pq ja tem um from
    }
}