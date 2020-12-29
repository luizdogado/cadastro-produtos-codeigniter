<?php if (! defined('BASEPATH')) exit ('No direct scrip access allowed');

class Vendas extends CI_Controller
{

    public function novo()
    {
        $usuario=$this->session->userdata("usuario_logado"); // pega o usuario logado
        $this->load->model("vendas_model");
        $venda = array(
            "produto_id" => $this->input->post("produto_id"),
            "comprador_id" => $usuario['id'],
            "data_de_entrega" => $this->input->post("data_de_entrega")
        );
        $this->vendas_model->salvar($venda);
        $this->session->set_flashdata("success", "Produto comprado com sucesso!");
        redirect('/');
    }

    public function index()
    {
        $usuario = $this->session->userdata("usuario_logado");//pega usuario logado
        $this->load->model("produtos_model");
        $produtosVendidos = $this->produtos_model->buscaVendidos($usuario);
        $dados = array("produtosVendidos" => $produtosVendidos);
        $this->load->view("vendas/index", $dados);
    }
}