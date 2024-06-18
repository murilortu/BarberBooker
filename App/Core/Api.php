<?php

namespace App\Core;

class Api
{
    public static function GET(string $uri)
    {
        $routes = [
            '\App\Controllers\Api\AgendamentoApiController::listarAgendamentos' => 'agendamentos',
            '\App\Controllers\Api\AgendamentoApiController::getAgendamento' => 'agendamentos/{id_agendamento}',
            '\App\Controllers\Api\AgendamentoApiController::listarServicos' => 'servicos',
            '\App\Controllers\Api\UsuarioApiController::listarUsuarios' => 'usuarios',
            '\App\Controllers\Api\UsuarioApiController::listarAgendamentosUsuario' => 'usuarios/{id_usuario}/agendamentos',
        ];

        self::matchAndRun($uri, $routes);
    }





    public static function POST(string $uri)
    {
        $routes = [
            '\App\Controllers\Api\AgendamentoApiController::criarAgendamento' => 'agendamentos',
            '\App\Controllers\Api\UsuarioApiController::cadastrarUsuario' => 'usuarios',
        ];

        self::matchAndRun($uri, $routes);
    }

    public static function PUT(string $uri)
    {
        $routes = [
            '\App\Controllers\Api\AgendamentoApiController::atualizarAgendamento' => 'agendamentos/{id_agendamento}',
        ];

        self::matchAndRun($uri, $routes);
    }

    public static function DELETE(string $uri)
    {
        $routes = [
            '\App\Controllers\Api\AgendamentoApiController::deletarAgendamento' => 'agendamentos/{id_agendamento}',
            '\App\Controllers\Api\UsuarioApiController::deletarAgendamentosUsuario' => 'usuarios/{id_usuario}/agendamentos',
            '\App\Controllers\Api\UsuarioApiController::deleteUser' => 'usuarios/{id_usuario}',
        ];
        self::matchAndRun($uri, $routes);
    }

    static function matchAndRun($uri, $routes)
    {
        $match = self::matchRoute($uri, $routes);

        if (!$match) {
            HttpResponse::json_response(404, message: "Rota não encontrada: $uri");
            return;
        }


        try {
            call_user_func_array($match['method'], $match['params']);
        } catch (\Throwable $th) {
            HttpResponse::json_response(500, message: $th->getMessage());
        }
    }

    static function matchRoute($uri, $routes)
    {
        foreach ($routes as $method => $routePattern) {
            // Transform the route pattern into a regular expression
            $pattern = preg_replace('/\{[a-zA-Z0-9_]+\}/', '([a-zA-Z0-9_]+)', $routePattern);
            $pattern = str_replace('/', '\/', $pattern);
            $pattern = '/^' . $pattern . '$/';

            if (preg_match($pattern, $uri, $matches)) {
                array_shift($matches); // Remove the full match from the matches
                return [
                    'method' => $method,
                    'params' => $matches
                ];
            }
        }

        return false; // No match found
    }
}
