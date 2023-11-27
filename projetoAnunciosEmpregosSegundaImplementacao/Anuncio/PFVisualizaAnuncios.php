<?php

require_once 'Anuncio.php';
require_once 'AnuncioInteracaoPF.php';

class PFVisualizaAnuncios extends Anuncio
{
    public function interagirComAnuncios()
    {
        echo "Lendo Anúncios..." .PHP_EOL;
        echo $this->titulo->titulo() .PHP_EOL;
        echo $this->descricao->descricao() .PHP_EOL;
        echo $this->imagem->imagem() .PHP_EOL;
    }
}