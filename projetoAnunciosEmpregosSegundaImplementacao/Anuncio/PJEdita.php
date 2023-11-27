<?php

require_once 'Anuncio.php';
require_once 'AnuncioPJEdita.php';

class PJEdita extends Anuncio 
{
    public function interagirComAnuncios()
    {
        echo "Editando Anúncios..." .PHP_EOL;
        echo $this->titulo->titulo() .PHP_EOL;
        echo $this->descricao->descricao() .PHP_EOL;
        echo $this->imagem->imagem() .PHP_EOL;
    }
}