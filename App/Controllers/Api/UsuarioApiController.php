<?php

class UsuarioApiController
{
    public static function cadastrarUsuario()
    {
        $request = json_decode(file_get_contents('php://input'), true);

        $nome = $request['nome'];
        $email = $request['email'];
        $telefone = $request['telefone'];
        $senha = $request['senha'];

        if (!$nome or !$email or !$telefone or !$senha) {
            HttpResponse::json_response(422, message: "JSON no formato incorreto. Body precisa ter nome, email, senha, telefone");
            return;
        }
        $model = new CadastroModel();
        $result = $model->cadastrarUsuario($nome, $email, $telefone, $senha);

        if ($result)
            HttpResponse::json_response(200, $result, "Cadastrado com sucesso!");
        else
            HttpResponse::json_response(500, $result, "Falha ao cadastrar usuario");

    }
    public static function listarUsuarios()
    {
        $model = new AdminModel();
        $result = $model->getAllUsers();


        if ($result)
            HttpResponse::json_response(200, $result, "Sucesso!");
        else
            HttpResponse::json_response(500, $result, "Falha ao listar usuarios");
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

    public static function deleteUser($id_usuario)
    {
        $model = new AdminModel();
        $result = $model->deleteUser($id_usuario);

        if ($result)
            HttpResponse::json_response(200, $result, "Deletado com sucesso!");
        else
            HttpResponse::json_response(500, $result, "Falha ao deletar");
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
