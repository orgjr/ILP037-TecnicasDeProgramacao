<?php

require_once 'PessoaFisica.php';
require_once 'PessoaJuridica.php';
require_once 'Anuncio.php';

$usuario;
$corporacao;

function PF()
{
    global $usuario;
    global $log;
    $anuncio = new Anuncio();
    $usuario = new PessoaFisica();
    $usuario->setNome("Nome: João de Souza");
    $usuario->setCPF("CPF: 11122233344411");
    $usuario->setEmail("e-mail: joaozin@abc.com");
    $usuario->setTelefone("Telefone: 11 11223344");

    echo $usuario->getNome() . PHP_EOL;
    echo $usuario->getCPF() . PHP_EOL;
    echo $usuario->getEmail() . PHP_EOL;
    echo $usuario->getTelefone() . PHP_EOL;
    $usuario->visualizar($anuncio);
}

function PJ()
{
    global $corporacao;
    global $log;
    $anuncio = new Anuncio();
    $corporacao = new PessoaJuridica();
    $corporacao->setRazaoSocial("Razão Social: Laticínios LTDA");
    $corporacao->setTelefone("Telefone: 15 55511231");
    echo $corporacao->getRazaoSocial() . PHP_EOL;
    echo $corporacao->getTelefone() . PHP_EOL;
    $corporacao->cadastrar($anuncio);
}

PF();

echo "------------------------------" . PHP_EOL;
echo "------------------------------" . PHP_EOL;

PJ();