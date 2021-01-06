<?php if (! defined('BASEPATH')) exit ('No direct scrip access allowed');

class Vendas extends CI_Controller
{

    public function novo()
    {
        $usuario = autoriza();// soh tem acesso a pagina se passar pelo helper de autoriza
        $this->load->model(array("vendas_model", "produtos_model", "usuarios_model"));
        $venda = array(
            "produto_id" => $this->input->post("produto_id"),
            "comprador_id" => $usuario['id'],
            "data_de_entrega" => $this->input->post("data_de_entrega")
        );
        $this->vendas_model->salvar($venda);

        $this->load->library('email');//configura conta de email que manda email para os clientes
        $config['protocol']  = "smtp";
        $config['smtp_host'] = "ssl://smtp.googlemail.com";
        $config['smtp_user'] = "mercadocodeigniterr@gmail.com";
        $config['smtp_pass'] = "1.codeigniter";
        $config['charset'] = "utf-8";
        $config['mailtype'] = "html";
        $config['newline'] = "\r\n";
        $config['smtp_port'] =  465;
        $this->email->initialize($config);


        $produto = $this->produtos_model->busca($venda["produto_id"]); // busca dados do produto pelo id q ja foi buscado ante
        $vendedor = $this->usuarios_model->busca($produto["usuario_id"]);

        $dados = array("produto"=>$produto);
        $conteudo = $this->load->view("vendas/email.php", $dados, TRUE);

        $this->email->from("mercadocodeigniterr@gmail.com", "Mercado");
        $this->email->to($vendedor["email"]);
        $this->email->subject("Seu produto {$produto['nome']} foi vendido!");
        $this->email->message($conteudo);
        $this->email->send();

        $this->session->set_flashdata("success", "Produto comprado com sucesso!");
        redirect('/');
    }

    public function index()
    {
        $usuario = autoriza(); // soh tem acesso a pagina se passar pelo helper de autoriza
        $this->load->model("produtos_model");
        $produtosVendidos = $this->produtos_model->buscaVendidos($usuario);
        $dados = array("produtosVendidos" => $produtosVendidos);
        $this->load->template("vendas/index", $dados);
    }
}