<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Models\AdminModel;
use App\Models\AgendamentoModel;

// require_once 'Models/AdminModel.php';
// require_once 'Models/AgendamentoModel.php'; // Importe o AgendamentoModel
// require_once 'core/Controller.php';
// require_once 'core/Auth.php';

class AdminController extends Controller
{
    private $adminModel;
    private $agendamentoModel; // Adicione uma propriedade para o AgendamentoModel

    public function __construct()
    {
        parent::__construct();
        $this->adminModel = new AdminModel();
        $this->agendamentoModel = new AgendamentoModel(); // Inicialize o AgendamentoModel
        $this->protegerPagina();
        if (!isset($_SESSION['is_admin']) || $_SESSION['is_admin'] != 1) {
            header('Location: /BarberBooker/login/');
            exit;
        }
    }

    public function index()
    {

        $agendamentoModel = new AgendamentoModel();
        $agendamentos = $agendamentoModel->listarTodosAgendamentos();
        $dados = ['agendamentos' => $agendamentos];
        $this->carregarViewNoTemplate('lista_todos_agendamentos', $dados);
    }

    public function listarUsuarios()
    {
        $users = $this->adminModel->getAllUsers();
        $this->carregarTemplate('admin_listar_usuarios', ['users' => $users]);
    }

    public function deleteUser($userId)
    {
        // Agora podemos deletar o usuário
        if ($this->adminModel->deleteUser($userId)) {
            header('Location: /BarberBooker/admin');
            exit;
        } else {
            echo "Erro ao deletar usuário.";
        }
    }

    public function viewUserAgendamentos($userId)
    {
        $agendamentos = $this->adminModel->getAgendamentosByUserId($userId);
        $this->carregarTemplate('lista_agendamentos', ['agendamentos' => $agendamentos]);
    }
}
