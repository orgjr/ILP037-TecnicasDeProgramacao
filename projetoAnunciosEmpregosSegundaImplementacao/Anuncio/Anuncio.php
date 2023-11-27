<?php

require_once 'Titulo.php';
require_once 'Descricao.php';
require_once 'Imagem.php';

abstract class Anuncio 
{
    protected $titulo;
    protected $descricao;
    protected $imagem;
    
    public function __construct(Titulo $titulo, Descricao $descricao, Imagem $imagem) 
    {
        $this->titulo = $titulo;
        $this->descricao = $descricao;
        $this->imagem = $imagem;
    }

    abstract public function interagirComAnuncios();
}


