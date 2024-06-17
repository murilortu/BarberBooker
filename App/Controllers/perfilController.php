<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Models\PerfilModel;

class perfilController extends Controller
{

    public function index()
    {
        $this->protegerPagina(); // Verifica se o usuário está autenticado

        $perfilModel = new PerfilModel();
        $usuario = $perfilModel->getUsuarioById($_SESSION['id']);

        $dados = ['usuario' => $usuario];
        $this->carregarTemplate('perfil', $dados);
    }

    public function atualizar()
    {
        $this->protegerPagina(); // Verifica se o usuário está autenticado

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $telefone = $_POST['telefone'];

            $perfilModel = new PerfilModel();
            $perfilModel->atualizarUsuario($_SESSION['id'], $nome, $email, $telefone);

            $_SESSION['mensagem'] = 'Perfil atualizado com sucesso!';
            header('Location: /BarberBooker/perfil');
            exit;
        }
    }
}
