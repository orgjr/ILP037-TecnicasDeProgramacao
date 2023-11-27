<?php

require_once 'Contato.php';

class ClienteInterage implements Contato 
{
    public function entrarEmContato() 
    {
        return "Telefonou ou enviou e-mail para a central de atendimentos.";
    }
}