
<?php

class AgendamentoController extends Controller {
    public function index() {
        $this->protegerPagina(); // Verifica se o usuário está autenticado

        $agendamentoModel = new AgendamentoModel();
        $tiposServico = $agendamentoModel->listarServicos();

        $dados = [
            'tiposServico' => $tiposServico
        ];

        $this->carregarTemplate('agendamento', $dados);
    }

    public function listarAgendamentos() {
        $this->protegerPagina(); // Verifica se o usuário está autenticado
        // Instanciar o model de agendamento
        $agendamentoModel = new AgendamentoModel();

        // Recuperar os agendamentos do banco de dados
        $agendamentos = $agendamentoModel->listarAgendamentos();

        // Passar os agendamentos para a visão
        $dados = [
            'agendamentos' => $agendamentos
        ];

        // Carregar a visão de lista de agendamentos
        $this->carregarTemplate('lista_agendamentos', $dados);
    }

    
    public function agendar() {
        $this->protegerPagina(); // Verifica se o usuário está autenticado
        
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $idUsuario = 1; // O id do usuário logado, ajustar conforme necessário
            $idServico = 4;
            $data = $_POST['data'];
            $horario = $_POST['horario'];
            $observacoes = $_POST['observacao'];
    
            $dataHora = $data . ' ' . $horario;
    
            $agendamentoModel = new AgendamentoModel();
            $agendamentoModel->criarAgendamento($idUsuario, $idServico, $dataHora, $observacoes);
    
            // Define a mensagem de sucesso
            $_SESSION['mensagem'] = 'Agendamento realizado com sucesso!';
    
            // Redireciona para a página inicial após 3 segundos
            header('Refresh: 3; URL=/BarberBooker/');
            exit; 
        }
    }
    
    
    
}