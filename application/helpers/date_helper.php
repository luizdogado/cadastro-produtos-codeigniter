<?php

function dataBancoParaPtBr($dataBanco)//pega data do banco formata para  d-m-y 
{
    $data= new DateTime($dataBanco);
    return $data->format("d/m/Y");
}