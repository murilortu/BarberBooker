<?php

namespace tests;

use App\Models\AdminModel;
use PDO;
use PHPUnit\Framework\TestCase;

class AdminModelTest extends TestCase
{
	private AdminModel $model;
	private PDO $pdo;
	protected function setUp(): void
	{
		$this->pdo = new PDO('sqlite::memory:');
		$this->model = new AdminModel($this->pdo);
		$this->pdo->exec("
			CREATE TABLE IF NOT EXISTS Usuarios
				(id_usuario INTEGER PRIMARY KEY, nome TEXT, email TEXT, telefone TEXT, senha TEXT);

			INSERT INTO Usuarios
				(nome, telefone, email, senha)
			VALUES
				('Cleber Cleiton', 'cleberCleinto@mail.com', '63-99191 7623', 'cleito123'),
				('Cleber Cleiton Jr', 'cleberCleitoJunior@Sucessada.com', '63-99191 7624', 'cleito3');	

			CREATE TABLE IF NOT EXISTS Agendamentos
				(id_agendamento INTEGER PRIMARY KEY, id_usuario INTEGER, id_servico INTEGER, data_hora TEXT, observacoes TEXT);

			CREATE TABLE IF NOT EXISTS Servicos
				(id_servico INTEGER PRIMARY KEY, tipo_servico TEXT);

			INSERT INTO Servicos
				(tipo_servico)
			VALUES
				('Cabelo'),
				('Barba'),
				('Bigode');

			INSERT INTO Agendamentos
				(id_usuario, id_servico, data_hora, observacoes)
			VALUES
				(1, 1, '2024-06-18 14:00:00', 'Palavras não bastam'),
				(1, 2, '2024-06-18 14:00:00', 'Não da pra entender');

		");
	}

	public function test_getAllUsers_function()
	{
		$result = $this->model->getAllUsers();
		$this->assertIsArray($result);
		$this->assertTrue(count($result) >= 2);
	}

	public function test_getAgendamentosByUserId_function()
	{
		$result = $this->model->getAgendamentosByUserId(1)[0];
		$this->assertArrayHasKey('id_agendamento', $result);
		$this->assertArrayHasKey('tipo_servico', $result);
		$this->assertArrayHasKey('data_hora', $result);
		$this->assertArrayHasKey('observacoes', $result);
	}

	public function test_if_getAgendamentosByUserId_return_empty_array()
	{
		$result = $this->model->getAgendamentosByUserId(10000);
		$this->assertEmpty($result);
	}


	public function test_if_deleteUser_deletes_user()
	{
		$users = $this->model->getAllUsers();
		$users = count($users);
		$result = $this->model->deleteUser(2);

		$this->assertTrue($result, 'DeleteUser retornou falso');

		$usersPostDelete = $this->model->getAllUsers();
		$usersPostDelete = count($usersPostDelete);

		$this->assertGreaterThan($usersPostDelete, $users);
	}
}
