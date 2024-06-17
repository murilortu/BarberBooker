<?php

namespace App\Controllers\Api;

use App\Core\HttpResponse;
use App\Models\AgendamentoModel;

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



    public static function criarAgendamento()
    {
        $request = json_decode(file_get_contents('php://input'), true);
        $model = new AgendamentoModel();

        if (!isset($request["id_usuario"], $request["id_servico"], $request["data_hora"], $request["observacoes"])) {
            HttpResponse::json_response(422, message: "É preciso informar o id_servico, id_usuario, data_hora (YYYY-MM-DD HH:mm:ss) e observacoes");
            return;
        }
        $result = $model->criarAgendamento($request["id_usuario"], $request["id_servico"], $request["data_hora"], $request["observacoes"], true);

        if ($result)
            HttpResponse::json_response(200, $result, "Agendado com sucesso!");
        else
            HttpResponse::json_response(500, $result, "Falha ao agendar");
    }

    public static function atualizarAgendamento($id_agendamento)
    {
        $request = json_decode(file_get_contents('php://input'), true);
        $model = new AgendamentoModel();

        if (!isset($request["id_servico"], $request["data_hora"], $request["observacoes"])) {
            HttpResponse::json_response(422, message: "É preciso informar o id_servico, data_hora (YYYY-MM-DD HH:mm:ss) e observacoes");
            return;
        }
        $data_hora = explode(" ", $request["data_hora"]);
        $result = $model->atualizarAgendamento($id_agendamento, $request["id_servico"], $data_hora[0], $data_hora[1], $request["observacoes"]);

        if ($result)
            HttpResponse::json_response(200, $result, "Agendamento atualizado com sucesso!");
        else
            HttpResponse::json_response(500, $result, "Falha ao atualizar agendamento");
    }


    public static function getAgendamento($id)
    {
        $model = new AgendamentoModel();
        $result = $model->pegarAgendamento($id);

        if ($result)
            HttpResponse::json_response(200, $result, "sucesso!");
        else
            HttpResponse::json_response(500, $result, "Falha ao pegar agendamento");
    }

    public static function listarServicos()
    {
        $model = new AgendamentoModel();
        HttpResponse::json_response(200, $model->listarServicos(), "Sucesso!");
    }

    public static function deletarAgendamento($id_agendamento)
    {
        $model = new AgendamentoModel();
        $result = $model->deletarAgendamento($id_agendamento);

        if ($result)
            HttpResponse::json_response(200, $result, "Agendamento deletado com sucesso!");
        else
            HttpResponse::json_response(500, $result, "Falha ao deletar agendamento");
    }
}
