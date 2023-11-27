<?php

require_once 'Cliente.php';

class PessoaJuridica extends Cliente
{
    public $email;
    public $telefone;
    public $razaoSocial;
    public $cnpj;


    public function setRazaoSocial($r) {
        $this->razaoSocial = $r;
    }

    public function setCNPJ($cn) {
        $this->cnpj = $cn;
    }

    public function getRazaoSocial(){
        return $this->razaoSocial;
    }

    public function getCNPJ(){
        return $this->cnpj;
    }

    public function cadastrar(Anuncio $anuncio)
    {
        $anuncio->titulo = "Título: Anuncio de Emprego\n";
        $anuncio->descricao = "Descrição: Descrição da Vaga\n";
        $anuncio->imagem = "Imagem do ambiente de trabalho\n";
        echo $anuncio->titulo .$anuncio->descricao .$anuncio->imagem;
        echo "Status: Cadastrando anúncio.\n";
    }

    public function editar(Anuncio $anuncio)
    {
        $anuncio->titulo = "Editou o título\n";
        $anuncio->descricao = "Editou a descrição\n";
        $anuncio->imagem = "Trocou a imagem\n";
        echo $anuncio->titulo .$anuncio->descricao .$anuncio->imagem;
        echo "Status: Editando anúncio.\n";
    }

    public function excluir(Anuncio $anuncio)
    {
        echo "excluiu o anúncio\n";
    }

}