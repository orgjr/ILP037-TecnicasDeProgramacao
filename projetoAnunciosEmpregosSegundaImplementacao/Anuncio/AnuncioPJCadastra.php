<?php

require_once 'Titulo.php';
require_once 'Descricao.php';
require_once 'Imagem.php';

class AnuncioPJCadastra implements Titulo, Descricao, Imagem 
{
    public function titulo() 
    {
        return "Cadastrando o titulo do anúncio.";
    }
    public function descricao() 
    {
        return "Cadastrando a descrição do anúncio.";
    }
    public function imagem() 
    {
        return "Cadastrando a imagem do anúncio.";
    }
}


