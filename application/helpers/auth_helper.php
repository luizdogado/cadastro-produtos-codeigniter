<?php

function autoriza()
{
    $ci = get_instance();// pega codeigniter e pede instancia para operar e no lugar do $this oloca a instancia
    $usuarioLogado = $ci->session->userdata("usuario_logado");// pega usuario logado 
    if(!$usuarioLogado){//if se n estiver logado manda pra pagina inicial
        $ci->session->set_flashdata("danger", "Voce precisa estar logado");//mostra erro para usuario saber o que esta acontecendo 
        redirect("/");
    }
    return $usuarioLogado;
}