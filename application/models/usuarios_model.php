<?php

class Usuarios_model extends CI_Model
{
    public function salvar($usuario)
    {
        $this->db->insert("usuarios", $usuario);
    }

    public function buscaPorEmailESenha($email, $senha)
    {
        $this->db->where("email", $email);//da where pelo dado email no banco
        $this->db->where("senha", $senha);//da where pelo dado senha no banco
        
        $usuario = $this->db->get("usuarios")->row_array();//pega dado usuario do banco primeiro q achar coloca na variavel
        return $usuario;

    }
}