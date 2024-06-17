<?php

namespace App\Core;

class Controller
{

    public $dados;
    public $dados2;

    public function __construct()
    {

        $this->dados = array();
    }

    public function carregarTemplate($nomeView, $dadosModel = array())
    {

        $this->dados = $dadosModel;
        require 'App/Views/template.php';
    }

    public function carregarViewNoTemplate($nomeView, $dadosModel = array())
    {

        extract($dadosModel);
        require 'App/Views/' . $nomeView . '.php';
    }

    public function protegerPagina()
    {
        Auth::verificarAutenticacao();
    }
}

