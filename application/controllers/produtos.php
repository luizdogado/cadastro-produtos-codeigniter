<?php if (! defined('BASEPATH')) exit ('No direct scrip access allowed');


class Produtos extends CI_Controller
{

    public function index()
    {
        $this->output->enable_profiler(FALSE);
        //$this->load->database();//chama o banco mas tem q ser condigurado em congig database.php
        $this->load->model("produtos_model");//carrega modelo
        $produtos = $this->produtos_model->buscaTodos();//busca o que eh pedido e foi montado no models


        $dados = array("produtos"=> $produtos);
        $this->load->helper('currency');//helper chamado para tratar o valor obs sempre tem q chamar helper quando usar um
        $this->load->view("produtos/index", $dados);
    }
    
    public function formulario()
    {
        $this->load->view("produtos/formulario");
    }

    public function novo()
    {
        $usuarioLogado = $this->session->userdata("usuario_logado");
        $produtos = array(//pega o vem pelo moetodo post do site e coloca em cada lugar correto para salvar no banco de dados
            "nome" => $this->input->post("nome"),
            "descricao" => $this->input->post("descricao"),
            "preco" => $this->input->post("preco"),
            "usuario_id" => $usuarioLogado["id"]
        );
        $this->load->model("produtos_model");//chama a model
        $this->produtos_model->salva($produtos);//chama a function salva dentro da produtos_model
        $this->session->set_flashdata("success", "Produto salvo com sucesso");
        redirect("/");
    }

    public function mostra()
    {
        $id = $this->input->get("id");// pega id q vai ser enviado na url e coloca na variavel $id
        $this->load->model("produtos_model");
        $produto = $this->produtos_model->busca($id);
        $dados = array("produto" => $produto);
        $this->load->helper(array('typography', 'currency'));// helper que converte linguagem de programacaco para html exemplo /n para /br
        $this->load->view("produtos/mostra", $dados);
    }

}