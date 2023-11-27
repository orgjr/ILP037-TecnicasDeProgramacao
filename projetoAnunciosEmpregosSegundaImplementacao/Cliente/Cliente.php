<?php

require_once 'Contato.php';

abstract class Cliente
{
    protected $contato;

    public function __construct(Contato $contato) {
        $this->contato = $contato;
    }

    abstract public function contatar();
}


