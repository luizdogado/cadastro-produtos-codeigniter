<?php
function numeroEmReais($numero)
{
    return "R$ " . number_format($numero, 2, ",", "."); //helper para tratar o preco da tabela
}