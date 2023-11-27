<?php

require_once 'Titulo.php';
require_once 'Descricao.php';
require_once 'Imagem.php';

class AnuncioInteracaoPF implements Titulo, Descricao, Imagem
{
    public function titulo() {
        return "Lendo o titulo do anúncio.";
    }
    public function descricao() {
        return "Lendo a descrição do anúncio.";
    }
    public function imagem() {
        return "Visualizando a imagem do anúncio.";
    }
}