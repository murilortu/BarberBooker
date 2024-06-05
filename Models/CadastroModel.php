<?php

require_once 'Conexao.php';

class CadastroModel {

    private $con;

    public function __construct() {
        $this->con = Conexao::getConexao();
    }

    public function cadastrarUsuario($nome, $email, $telefone, $senha) {
        // Lógica para inserir o usuário no banco de dados
        try {
            $sql = "INSERT INTO Usuarios (nome, email, telefone, senha) VALUES (?, ?, ?, ?)";
            $stmt = $this->con->prepare($sql);
            $stmt->execute([$nome, $email, $telefone, $senha]);
            return true; // Cadastro bem-sucedido
        } catch (PDOException $e) {
            // Lidar com erros de exceção (por exemplo, registro de erro, mensagem de erro, etc.)
            // echo "Erro ao cadastrar usuário: " . $e->getMessage();
            return false; // Falha no cadastro
        }
    }
    
}
