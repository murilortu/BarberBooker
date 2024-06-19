<?php

use PHPUnit\Framework\TestCase;
use App\Models\AgendamentoModel;

class AgendamentoModelTest extends TestCase
{
    private $agendamentoModel;

    protected function setUp(): void
    {
        // Configurar a conexão com o banco de dados para testes
        $this->agendamentoModel = new AgendamentoModel();
    }

    public function testCreateAgendamento()
    {
        $result = $this->agendamentoModel->criarAgendamento(1, 1, '2024-06-18 14:00:00', 'Teste de agendamento');
        $this->assertTrue($result);
    }

    public function testUpdateAgendamento()
    {
        $result = $this->agendamentoModel->atualizarAgendamento(1, 1, '2024-06-18', '14:00:00', 'Atualização de agendamento');
        $this->assertTrue($result);
    }

    public function testDeleteAgendamento()
    {
        $result = $this->agendamentoModel->deletarAgendamento(1);
        $this->assertTrue($result);
    }

    public function testListarAgendamentos()
    {
        $result = $this->agendamentoModel->listarAgendamentos(1);
        $this->assertIsArray($result);
        $this->assertNotEmpty($result);
    }

    public function testListarTodosAgendamentos()
    {
        $result = $this->agendamentoModel->listarTodosAgendamentos();
        $this->assertIsArray($result);
        $this->assertNotEmpty($result);
    }
}
