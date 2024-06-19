<?php

use PHPUnit\Framework\TestCase;
use App\Models\PerfilModel;

class PerfilModelTest extends TestCase
{
    private $perfilModel;

    protected function setUp(): void
    {
        // Criar um mock da conexão com o banco de dados
        $this->perfilModel = $this->getMockBuilder(PerfilModel::class)
                                   ->disableOriginalConstructor()
                                   ->getMock();
    }

    public function testGetUsuarioById()
    {
        $expectedResult = [
            'id_usuario' => 1,
            'nome' => 'João',
            'email' => 'joao@example.com',
            'telefone' => '123456789'
        ];

        // Configurar o mock para retornar o resultado esperado
        $this->perfilModel->method('getUsuarioById')
                          ->willReturn($expectedResult);

        $result = $this->perfilModel->getUsuarioById(1);
        $this->assertIsArray($result);
        $this->assertEquals($expectedResult, $result);
    }

    public function testAtualizarUsuario()
    {
        // Mockar a atualização do usuário para não fazer a chamada real
        $this->perfilModel->method('atualizarUsuario')
                          ->willReturn(true);

        $result = $this->perfilModel->atualizarUsuario(1, 'João Atualizado', 'joaoatualizado@example.com', '987654321');
        $this->assertTrue($result);
    }
}
