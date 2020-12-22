<?php if (! defined('BASEPATH')) exit ('No direct scrip access allowed');

class Login extends CI_Controller
{   
    public function autenticar()
    {
        $this->load->model("usuarios_model");
        $email=$this->input->post("email");
        $senha=md5($this->input->post("senha"));
        $usuario = $this->usuarios_model->buscaPorEmailESenha($email, $senha);
        if($usuario){
            $this->session->set_userdata("usuario_logado",$usuario);// coloca na session o usuario q ta logado, precisa por key de criptografica para isso 
            $this->session->set_flashdata("success", "logado  com suscesso!");
        }else {
            $this->session->set_flashdata("danger", "Usuario ou senha invalida.");
        }    
        redirect('http://localhost:8080/');
    }


    public function logout()
    {
        $this->session->unset_userdata("usuario_logado");// tira o usuario logado do session
        $this->session->set_flashdata("success", "Deslogado com sucesso");
        redirect('http://localhost:8080/');
    }



}