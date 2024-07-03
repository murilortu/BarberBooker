<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Models\AdminModel;
use App\Models\AgendamentoModel;

class AdminController extends Controller
{
    private $adminModel;
    private $agendamentoModel;

    public function __construct()
    {
        parent::__construct();
        $this->adminModel = new AdminModel();
        $this->agendamentoModel = new AgendamentoModel();
        $this->protegerPagina();
        if (!isset($_SESSION['is_admin']) || $_SESSION['is_admin'] != 1) {
            header('Location: /BarberBooker/login/');
            exit;
        }
    }

    public function index()
    {
        $agendamentos = $this->agendamentoModel->listarTodosAgendamentos();
        $users = $this->adminModel->getAllUsers();

        $dados = [
            'totalAgendamentos' => count($agendamentos),
            'totalUsuarios' => count($users)
        ];

        $this->carregarTemplate('admin_index', $dados);
    }

    public function listarUsuarios()
    {
        $users = $this->adminModel->getAllUsers();
        $this->carregarTemplate('admin_listar_usuarios', ['users' => $users]);
    }

    public function deleteUser($userId)
    {
        if ($this->adminModel->deleteUser($userId)) {
            header('Location: /BarberBooker/admin');
            exit;
        } else {
            echo "Erro ao deletar usuário.";
        }
    }

    public function ListarTodosAgendamentos() {
        $agendamentoModel = new AgendamentoModel();
        $agendamentos = $agendamentoModel->listarTodosAgendamentos();
        $dados = ['agendamentos' => $agendamentos];
        $this->carregarTemplate('lista_todos_agendamentos', $dados);
    }

    public function viewUserAgendamentos($userId)
    {
        $agendamentos = $this->adminModel->getAgendamentosByUserId($userId);
        $this->carregarTemplate('lista_agendamentos', ['agendamentos' => $agendamentos]);
    }
}
