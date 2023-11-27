<?php

require_once 'Titulo.php';
require_once 'Descricao.php';
require_once 'Imagem.php';

class AnuncioPJExclui implements Titulo, Descricao, Imagem 
{
    public function titulo() 
    {
        return "Excluindo o titulo do anúncio.";
    }
    public function descricao() 
    {
        return "Excluindo a descrição do anúncio.";
    }
    public function imagem() 
    {
        return "Excluindo a imagem do anúncio.";
    }
}