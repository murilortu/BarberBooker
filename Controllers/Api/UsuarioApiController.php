<?php

class UsuarioApiController 
{
    public static function listarAgendamentosUsuario($id)
    {
        $model = new AgendamentoModel();
        $result = $model->listarAgendamentos(id_usuario: $id);

        if ($result)
            HttpResponse::json_response(200, $result, "Sucesso!");
        else
            HttpResponse::json_response(200, $result, "Sem agendamentos para esse usuario");

    }

    public static function deletarAgendamentosUsuario($id_usuario)
    {
        $model = new AgendamentoModel();
        $result = $model->deletarAgendamentosUsuario($id_usuario);

        if ($result)
            HttpResponse::json_response(200, $result, "Agendamentos do usuario deletados com sucesso!");
        else
            HttpResponse::json_response(500, $result, "Falha ao deletar agendamentos");
    }
}
