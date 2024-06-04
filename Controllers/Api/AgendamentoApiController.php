<?php

class AgendamentoApiController
{
    public static function listarTodosAgendamentos()
    {
        $model = new AgendamentoModel();
        HttpResponse::json_response(200, $model->listarTodosAgendamentos(), "Urrul, deu tudo certo!");
    }

    public static function getAgendamento($id)
    {
        $model = new AgendamentoModel();
        HttpResponse::json_response(200, $model->pegarAgendamento($id), "Urrul, deu tudo certo!");
    }
}
