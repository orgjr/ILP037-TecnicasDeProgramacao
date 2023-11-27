<?php

require_once 'Anuncio.php';
require_once 'AnuncioPJExclui.php';

class PJExclui extends Anuncio 
{
    public function interagirComAnuncios()
    {
        echo "Excluindo Anúncios..." .PHP_EOL;
        echo $this->titulo->titulo() .PHP_EOL;
        echo $this->descricao->descricao() .PHP_EOL;
        echo $this->imagem->imagem() .PHP_EOL;
    }
}