<?php

class loginController extends Controller {
    
    public function index($mensagem) {
        $this->carregarViewNoTemplate('login', ['mensagem'=> $mensagem]);
    }

    public function autenticar() {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            // Se a requisição não for POST, redireciona para a tela de login
            header('Location: /BarberBooker/login');
            exit;
        }

        // Verifica se os campos de e-mail e senha foram enviados
        if (!isset($_POST['email']) || !isset($_POST['senha'])) {
            $_SESSION['mensagem'] = 'E-mail e senha são obrigatórios.';
            header('Location: /BarberBooker/login');
            exit;
        }

        // Obtenha os dados do formulário
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        // Instancie o modelo de usuário para autenticação
        $usuarioModel = new LoginModel();

        // Verifica as credenciais do usuário
        $autenticado = $usuarioModel->verificarCredenciais($email, $senha);

        if ($autenticado) {
            // Autenticação bem-sucedida
            // Inicia a sessão e redireciona para a página inicial do sistema
            $_SESSION['usuario'] = $email;
            header('Location: /BarberBooker/');
            exit;
        } else {
            // Credenciais inválidas, exibe mensagem de erro e redireciona de volta para a tela de login
            $mensagem = 'Usuário ou senha incorretos.';
            
            header('Location: /BarberBooker/login/index/'. urlencode($mensagem));
            exit;
        }
    }

    

    public function sair() {
        session_start();
        session_destroy();
        header('Location: /BarberBooker/login');
        exit;
    }
}
