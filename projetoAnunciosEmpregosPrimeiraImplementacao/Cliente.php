<?php

require_once 'Anuncio.php';

abstract class Cliente
{
    public $email;
    public $telefone;


    public function setEmail($e) {
        $this->email = $e;
    }

    public function setTelefone($t) {
        $this->telefone = $t;
    }

    public function getEmail(){
        return $this->email;
    }

    public function getTelefone(){
        return $this->telefone;
    }

    // empresas
    public function cadastrar(Anuncio $anuncio) {}

    public function editar(Anuncio $anuncio) {}

    public function excluir(Anuncio $anuncio) {}
    // /empresas


    // pessoa física
    public function visualizar(Anuncio $anuncio) {}
    
}


