<?php

class cadastroController extends Controller {
    
    public function index() {
        // Exibir o formulário de cadastro
        $this->carregarViewNoTemplate('cadastro');
    }

    public function cadastrar() {
        // Lógica para processar o formulário de cadastro
        // Capturar os dados do formulário
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $senha = $_POST['senha'];

        // Validar entradas
        if (empty($nome) || empty($email) || empty($telefone) || empty($senha)) {
            $_SESSION['mensagem'] = 'Todos os campos são obrigatórios.';
            header('Location: /BarberBooker/cadastro');
            exit;
        }

        // Instanciar o modelo de usuário
        $usuarioModel = new CadastroModel();

        // Chamar o método para cadastrar o usuário
        $cadastrado = $usuarioModel->cadastrarUsuario($nome, $email, $telefone, $senha);

        if ($cadastrado) {
            // Usuário cadastrado com sucesso
            $_SESSION['mensagem'] = 'Cadastro realizado com sucesso!';
            header('Location: /BarberBooker/login'); // Redirecionar para a tela de login
            exit;
        } else {
            // Falha no cadastro
            $_SESSION['mensagem'] = 'Erro ao cadastrar usuário. Tente novamente.';
            header('Location: /BarberBooker/cadastro'); // Redirecionar de volta para a página de cadastro
            exit;
        }
    }
}
