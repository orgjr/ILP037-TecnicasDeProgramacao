<?php

require_once 'Cliente.php';
require_once 'ClienteInterage.php';

class ClienteContatos extends Cliente 
{
    public function contatar()
    {
        echo $this->contato->entrarEmContato() .PHP_EOL;
    }
}