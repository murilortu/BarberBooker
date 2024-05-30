<?php

class AgendamentoController extends Controller
{
    public function index()
    {
        $this->protegerPagina(); // Verifica se o usuário está autenticado

        $agendamentoModel = new AgendamentoModel();
        $tiposServico = $agendamentoModel->listarServicos();

        $dados = [
            'tiposServico' => $tiposServico
        ];

        $this->carregarTemplate('agendamento', $dados);
    }

    public function listarAgendamentos()
    {
        $this->protegerPagina(); // Verifica se o usuário está autenticado
        // Instanciar o model de agendamento
        $agendamentoModel = new AgendamentoModel();

        // Recuperar os agendamentos do banco de dados
        $agendamentos = $agendamentoModel->listarAgendamentos($_SESSION['id']);

        // Passar os agendamentos para a visão
        $dados = [
            'agendamentos' => $agendamentos
        ];

        // Carregar a visão de lista de agendamentos
        $this->carregarTemplate('lista_agendamentos', $dados);
    }


    public function agendar()
    {
        $this->protegerPagina(); // Verifica se o usuário está autenticado
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $idUsuario = $_SESSION['id']; // O id do usuário logado, ajustar conforme necessário
            $idServico = $_POST['tipo_servico'];
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

    public function editar($id)
    {
        $this->protegerPagina();
        $model = new AgendamentoModel;
        $result = $model->pegarAgendamento($id);
        $this->carregarTemplate('editar', $result);
    }

    public function deletar($id)
    {
        $model = new AgendamentoModel;
        $model->deletarAgendamento($id);
        header("Location: /BarberBooker/agendamento/listarAgendamentos");
        exit;
    }

    public function processarEdit()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $tipo = $_POST['select_tipo_servico'];
            $data = $_POST['data'];
            $hora = $_POST['horario'];
            $observacao = $_POST['observacao'];
            $id = $_POST['id_agendamento'];


            $model = new AgendamentoModel;
            $model->atualizarAgendamento($id, $tipo, $data, $hora, $observacao);

            header("Location: /BarberBooker/agendamento/listarAgendamentos");
            exit;
        }
    }
}
