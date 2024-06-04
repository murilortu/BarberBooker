<?php


class Api
{

    public static function GET(string $url)
    {
        $routes = [
            'AgendamentoApiController::listarAgendamentos' => 'agendamentos',
            'AgendamentoApiController::getAgendamento' => 'agendamentos/{id_agendamento}',
            'AgendamentoApiController::listarServicos'=> 'servicos',
        ];

        $match = self::matchRoute($url, $routes);

        if (!$match) {
            HttpResponse::json_response(404, message: $url);
            return;
        }

        
        try {
            call_user_func_array($match['method'],$match['params']);
        } catch (\Throwable $th) {
            HttpResponse::json_response(500, message: $th->getMessage());
        }
    }



    

    public static function POST(string $url)
    {
        $routes = [
            'AgendamentoApiController::criarAgendamento' => 'agendamentos',
        ];
        
        $match = self::matchRoute($url, $routes);

        if (!$match) {
            HttpResponse::json_response(404, message: $url);
            return;
        }

        
        try {
            call_user_func_array($match['method'],$match['params']);
        } catch (\Throwable $th) {
            HttpResponse::json_response(500, message: $th->getMessage());
        }
    }

    public static function PUT(string $url)
    {
        
    }

    public static function DELETE(string $url)
    {

    }

    static function matchRoute($uri, $routes) {
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
