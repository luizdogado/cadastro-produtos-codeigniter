<?php if (! defined('BASEPATH')) exit ('No direct scrip access allowed');

class Usuarios extends CI_Controller 
{
    public function novo()
    {
            $usuario = array(
            "nome" => $this->input->post("nome"),
            "email" => $this->input->post("email"),
            "senha" => md5($this->input->post("senha"))
            );
            $this->load->model("usuarios_model");//qual local do banco
            $this->usuarios_model->salvar($usuario);//pegar dado do campo salvar e coloca em usuario
            $this->session->set_flashdata("success", "Cadastro feito com sucesso!");
            redirect('http://localhost:8080/');
        
    }
}