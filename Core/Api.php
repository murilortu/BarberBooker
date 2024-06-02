<?php


class Api
{

    public static function GET(string $url)
    {
        switch (1) {
            case preg_match('#^agendamento$#i', $url):
                $method = "index";
                $controller = "AgendamentoApiController";
                break;
            case preg_match('#^agendamento/\d*$#i', $url):
                $method = 'listar';
                $controller = 'AgendamentoApiController';
                $parameter = (int) explode('/', $url)[1];
                break;
            default:
                HttpResponse::json_response(404, null, "Controlador não encontrado.");
                return;
                
        }

        $controllerMethod = "$controller::$method";
        call_user_func($controllerMethod,$parameter);
    }

    public static function POST(string $url)
    {
        $data = json_decode(file_get_contents('php://input'), true);
        
        echo json_encode($data);
    }

    public static function PUT(string $url)
    {
        
    }

    public static function DELETE(string $url)
    {

    }


}
