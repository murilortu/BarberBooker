<?php

use PHPUnit\Framework\TestCase;
use App\Models\LoginModel;

class LoginModelTest extends TestCase
{
    private $db;
    private $loginModel;

    protected function setUp(): void
    {
        // Configuração do banco de dados em memória para testes
        $this->db = new PDO('sqlite::memory:');
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Configuração para lançar exceções em erros SQL

        // Criação da tabela Usuarios
        $this->db->exec("CREATE TABLE Usuarios (id_usuario INTEGER PRIMARY KEY, nome TEXT, email TEXT, telefone TEXT, senha TEXT)");

        // Inserção de um usuário de teste
        $stmt = $this->db->prepare("INSERT INTO Usuarios (nome, email, telefone, senha) VALUES ('João Atualizado', 'joaoatualizado@example.com', '987654321', '123')");
        $stmt->execute();

        // Inicialização do LoginModel com a conexão do banco de dados mockada
        $this->loginModel = new LoginModel($this->db);
    }

    public function testVerificarCredenciaisCorretas()
    {
        $result = $this->loginModel->verificarCredenciais('joaoatualizado@example.com', '123');
        $this->assertTrue($result, 'Login com credenciais corretas deve retornar true');
    }

    public function testVerificarCredenciaisIncorretas()
    {
        $result = $this->loginModel->verificarCredenciais('teste@il.ocm', 'senha_incorreta');
        $this->assertFalse($result, 'Login com credenciais incorretas deve retornar false');
    }
}


