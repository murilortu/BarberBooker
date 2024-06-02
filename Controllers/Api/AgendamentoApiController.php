<?php

class AgendamentoApiController
{
    public static function index()
    {

        $model = new AgendamentoModel();
        HttpResponse::json_response(200, $model->listarTodosAgendamentos(), "Urrul, deu tudo certo!");
    }

    public static function listar($id)
    {
        $model = new AgendamentoModel();
        HttpResponse::json_response(200, $model->listarAgendamentos($id), "Urrul, deu tudo certo!");
    }
}
