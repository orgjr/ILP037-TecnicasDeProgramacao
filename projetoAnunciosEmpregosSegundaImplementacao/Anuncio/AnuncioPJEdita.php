<?php

require_once 'Titulo.php';
require_once 'Descricao.php';
require_once 'Imagem.php';

class AnuncioPJEdita implements Titulo, Descricao, Imagem  
{
    public function titulo() 
    {
        return "Editando o titulo do anúncio.";
    }
    public function descricao() 
    {
        return "Editando a descrição do anúncio.";
    }
    public function imagem() 
    {
        return "Editando a imagem do anúncio.";
    }
}