<?php

namespace App\Models;

use PDO;

class LoginModel
{
    private $con;

    public function __construct(PDO $con = null) {
        
        $this->con = $con ?? Conexao::getConexao();
    }

    public function verificarCredenciais($email, $senha) {
        // Verifica se o email e a senha foram passados
        if (!empty($email) && !empty($senha)) {
            // Realiza a consulta SQL utilizando placeholders
            $sql = "SELECT * FROM Usuarios WHERE email = :email AND senha = :senha";
            $stmt = $this->con->prepare($sql);
            // Executa a consulta substituindo os placeholders pelos valores das variáveis
            $stmt->execute(array(':email' => $email, ':senha' => $senha));
            // Obtém o resultado da consulta
            $usuario = $stmt->fetch(PDO::FETCH_ASSOC);
            // Verifica se encontrou algum usuário com as credenciais fornecidas
            if ($usuario) {
                // Inicia a sessão e armazena os dados do usuário
                session_start();
                $_SESSION['id'] = $usuario['id_usuario'];
                $_SESSION['nome'] = $usuario['nome'];
                $_SESSION['is_admin'] = $usuario['is_admin'];
                return true; // Credenciais válidas
            } else {
                return false; // Credenciais inválidas
            }
        } else {
            return false; // Campos não preenchidos
        }
    }
    
}