<?php

class Usuarios_model extends CI_Model
{
    public function salvar($usuario)
    {
        $this->db->insert("usuarios", $usuario);
    }
}