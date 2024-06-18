<?php

use PHPUnit\Framework\TestCase;
use App\Models\CadastroModel;

class CadastroModelTest extends TestCase
{
    private $db;
    private $cadastroModel;

    protected function setUp(): void
    {
        // Configuração do banco de dados em memória para testes
        $this->db = new PDO('sqlite::memory:');
        $this->db->exec("CREATE TABLE Usuarios (id INTEGER PRIMARY KEY, nome TEXT, email TEXT, telefone TEXT, senha TEXT)");
        $this->cadastroModel = new CadastroModel($this->db); // Injetar conexão mockada
    }

    public function testCadastrarUsuario()
    {
        $result = $this->cadastroModel->cadastrarUsuario('Daniel', 'daniel@example.com', '123456789', 'senha123');
        $this->assertTrue($result);

        $stmt = $this->db->query("SELECT * FROM Usuarios WHERE email = 'daniel@example.com'");
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        $this->assertNotEmpty($user);
        $this->assertEquals('Daniel', $user['nome']);
        $this->assertEquals('daniel@example.com', $user['email']);
        $this->assertEquals('123456789', $user['telefone']);
    }

    public function testAtualizarUsuario()
    {
        $this->cadastroModel->cadastrarUsuario('Daniel', 'daniel@example.com', '123456789', 'senha123');
        $stmt = $this->db->query("SELECT * FROM Usuarios WHERE email = 'daniel@example.com'");
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        $result = $this->cadastroModel->atualizarUsuario($user['id'], 'Daniel Atualizado', 'daniel@example.com', '987654321', 'senha456');
        $this->assertTrue($result);

        $stmt = $this->db->query("SELECT * FROM Usuarios WHERE email = 'daniel@example.com'");
        $updatedUser = $stmt->fetch(PDO::FETCH_ASSOC);

        $this->assertEquals('Daniel Atualizado', $updatedUser['nome']);
        $this->assertEquals('987654321', $updatedUser['telefone']);
    }

    public function testDeletarUsuario()
    {
        $this->cadastroModel->cadastrarUsuario('Daniel', 'daniel@example.com', '123456789', 'senha123');
        $stmt = $this->db->query("SELECT * FROM Usuarios WHERE email = 'daniel@example.com'");
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        $result = $this->cadastroModel->deletarUsuario($user['id']);
        $this->assertTrue($result);

        $stmt = $this->db->query("SELECT * FROM Usuarios WHERE email = 'daniel@example.com'");
        $deletedUser = $stmt->fetch(PDO::FETCH_ASSOC);

        $this->assertEmpty($deletedUser);
    }

    public function testEmailDuplicado()
    {
        $this->cadastroModel->cadastrarUsuario('Daniel', 'daniel@example.com', '123456789', 'senha123');

        $isDuplicated = $this->cadastroModel->emailDuplicado('daniel@example.com');
        $this->assertTrue($isDuplicated);

        $isNotDuplicated = $this->cadastroModel->emailDuplicado('outro@example.com');
        $this->assertFalse($isNotDuplicated);
    }
}
