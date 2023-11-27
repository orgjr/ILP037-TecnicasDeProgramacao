<?php

require_once 'Anuncio/PFVisualizaAnuncios.php';
require_once 'Anuncio/PJCadastra.php';
require_once 'Anuncio/PJEdita.php';
require_once 'Anuncio/PJExclui.php';
require_once 'Cliente/ClienteContatos.php';
require_once 'Singleton/RunLog.php';

$log = new RunLog();

function pfVisualiza()
{
    $interacaoPF = new AnuncioInteracaoPF();
    $visualizacao = new PFVisualizaAnuncios($interacaoPF, $interacaoPF, $interacaoPF);
    $visualizacao->interagirComAnuncios();

    // Singleton gerando logs.
    global $log;
    $log->runLog("João da Silva viewed an ad.");
}

function pjCadastra()
{
    $anuncios = new AnuncioPJCadastra();
    $cadastra = new PJCadastra($anuncios, $anuncios, $anuncios);
    $cadastra->interagirComAnuncios();

    // Singleton gerando logs.
    global $log;
    $log->runLog("Laticínios LTDA. registered a new ad.");
}

function pjEdita()
{
    $anuncios = new AnuncioPJEdita();
    $edita = new PJEdita($anuncios, $anuncios, $anuncios);
    $edita->interagirComAnuncios();

    // Singleton gerando logs.
    global $log;
    $log->runLog("Laticínios LTDA. edited an ad.");
}

function pjExclui()
{
    $anuncios = new AnuncioPJExclui();
    $exclui = new PJExclui($anuncios, $anuncios, $anuncios);
    $exclui->interagirComAnuncios();

    // Singleton gerando logs.
    global $log;
    $log->runLog("Laticínios LTDA. removed an ad.");
}

function clienteContata()
{
    $cliente = new ClienteInterage();
    $interacoes = new ClienteContatos($cliente);
    $interacoes->contatar();
}

// pjEdita();

// pfVisualiza();

// pjExclui();

pjCadastra();

// clienteContata();