<?php

class Core {

    public function __construct() {
        $this->run();
    }

    public function run() {
        $url = '';

        if (isset($_GET['pag'])) {
            $url = $_GET['pag'];
        }

        $parametros = [];

        if (!empty($url)) {
            $url = explode('/', $url);
            $controller = $url[0] . 'Controller';
            array_shift($url);

            if (isset($url[0]) && !empty($url[0])) {
                $metodo = $url[0];
                array_shift($url);
            } else {
                $metodo = 'index';
            }

            if (count($url) > 0) {
                $parametros = $url;
            }

        } else {
            $controller = 'homeController';
            $metodo = 'index';
        }

        $caminho = 'Controllers/' . $controller . '.php';

        if (!file_exists($caminho) || !method_exists($controller, $metodo)) {
            $controller = 'homeController';
            $metodo = 'index';
            $caminho = 'Controllers/' . $controller . '.php';
        }

        require_once $caminho;

        if (!class_exists($controller)) {
            die("Controller $controller não encontrado.");
        }

        $c = new $controller;

        if (!method_exists($c, $metodo)) {
            die("Método $metodo não encontrado no controlador $controller.");
        }

        call_user_func_array([$c, $metodo], $parametros);
    }
}
