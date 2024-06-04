<?php

class AgendamentoApiController
{
    public static function listarAgendamentos()
    {
        $model = new AgendamentoModel();
        $result = $model->listarTodosAgendamentos();

        if ($result)
            HttpResponse::json_response(200, $result, "Sucesso!");
        else
            HttpResponse::json_response(200, $result, "Sem agendamentos");
    }

    public static function listarAgendamentosUsuario($id)
    {
        $model = new AgendamentoModel();
        $result = $model->listarAgendamentos(id_usuario: $id);

        if ($result)
            HttpResponse::json_response(200, $result, "Sucesso!");
        else
            HttpResponse::json_response(200, $result, "Sem agendamentos para esse usuario");

    }

    public static function criarAgendamento()
    {
        $request = json_decode(file_get_contents('php://input'), true);
        $model = new AgendamentoModel();

        if (!isset($request["id_usuario"], $request["id_servico"], $request["data_hora"], $request["observacoes"])) {
            HttpResponse::json_response(422, message: "É preciso informar o id_servico, id_usuario, data_hora e observacoes");
            return;
        }
        $result = $model->criarAgendamento($request["id_usuario"], $request["id_servico"], $request["data_hora"], $request["observacoes"], true);

        if ($result)
            HttpResponse::json_response(200, $result, "Agendado com sucesso!");
        else
            HttpResponse::json_response(500, $result, "Falha ao agendar");
    }


    public static function getAgendamento($id)
    {
        $model = new AgendamentoModel();
        HttpResponse::json_response(200, $model->pegarAgendamento($id), "Urrul, deu tudo certo!");
    }

    public static function listarServicos()
    {
        $model = new AgendamentoModel();
        HttpResponse::json_response(200, $model->listarServicos(), "Sucesso!");
    }
}
