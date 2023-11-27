<?php

require_once 'Cliente.php';

class PessoaFisica extends Cliente
{
    public $email;
    public $telefone;
    public $nome;
    public $cpf;

    public function setNome($n) {
        $this->nome = $n;
    }

    public function setCPF($c) {
        $this->cpf = $c;
    }

    public function getNome(){
        return $this->nome;
    }

    public function getCPF(){
        return $this->cpf;
    }      

    public function visualizar(Anuncio $anuncio)
    {
        echo "Status: Visualizando anúncios de emprego\n";
    }

}