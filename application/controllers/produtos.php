<?php if (! defined('BASEPATH')) exit ('No direct scrip access allowed');


class Produtos extends CI_Controller
{

    public function index()
    {
        //$this->load->database();//chama o banco mas tem q ser condigurado em congig database.php
        $this->load->model("produtos_model");//carrega modelo
        $produtos = $this->produtos_model->buscaTodos();//busca o que eh pedido e foi montado no models


        $dados = array("produtos"=> $produtos);
        $this->load->helper(array('form',"url","currency"));//helper chamado para tratar o valor obs sempre tem q chamar helper quando usar um
        $this->load->view("produtos/index.php", $dados);
    }
}