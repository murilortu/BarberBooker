<?php

class HttpResponse 
{
    public static function json_response($code = 200, $data = null, $message = null)
    {
        // Limpa headers
        header_remove();
        // Define o codigo http
        http_response_code($code);
        header("Cache-Control: no-transform,public,max-age=300,s-maxage=900");
        // Define o retorno como json
        header('Content-Type: application/json');
        $status = array(
            200 => '200 OK',
            400 => '400 Bad Request',
            422 => 'Unprocessable Entity',
            500 => '500 Internal Server Error'
        );

        header('Status: ' . $status[$code]);
        // return the encoded json
        echo json_encode(
            [
                'status' => $code, // success or not?
                'message' => $message,
                'data' => $data
            ]
        );
    }
}
