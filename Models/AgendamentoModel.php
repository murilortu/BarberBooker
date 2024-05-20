<?php 

require_once 'Conexao.php';

class AgendamentoModel {

    private $con;

    public function __construct() {
        $this->con = Conexao::getConexao();
    }

    public function listarServicos() {
        $dados = array(); 
        $cmd = $this->con->query('SELECT * FROM Servicos');
        $dados = $cmd->fetchall(PDO::FETCH_ASSOC);
        return $dados;
    }

    public function listarAgendamentos() {
        $dados = array(); 
        $cmd = $this->con->query('
            SELECT 
                Agendamentos.id_agendamento, 
                Agendamentos.id_usuario, 
                Agendamentos.id_servico, 
                Agendamentos.data_hora, 
                Agendamentos.observacoes, 
                Servicos.tipo_servico as nome_servico 
            FROM Agendamentos
            JOIN Servicos ON Agendamentos.id_servico = Servicos.id_servico
        ');
        $dados = $cmd->fetchAll(PDO::FETCH_ASSOC);
        return $dados;
    }
    
    
    public function criarAgendamento($idUsuario, $idServico, $dataHora, $observacoes) {
        try {
            $sql = "INSERT INTO Agendamentos (id_usuario, id_servico, data_hora, observacoes) VALUES (:id_usuario, :id_servico, :data_hora, :observacoes)";
            $cmd = $this->con->prepare($sql);
            $cmd->bindValue(':id_usuario', $idUsuario);
            $cmd->bindValue(':id_servico', $idServico);
            $cmd->bindValue(':data_hora', $dataHora);
            $cmd->bindValue(':observacoes', $observacoes);
    
            if ($cmd->execute() === TRUE) {
                echo '<div class="alert alert-success" role="alert">Agendamento realizado com sucesso!</div>';
                header("refresh:2;url=home.php"); // Redirecionar para home.php após 2 segundos
            } else {
                echo '<div class="alert alert-danger" role="alert">Erro ao realizar agendamento: ' . $cmd->error . '</div>';
                header("refresh:5;url=home.php"); // Redirecionar para home.php após 5 segundos
            }
        } catch (PDOException $e) {
            // Lidar com exceções (por exemplo, registrar o erro, exibir uma mensagem de erro, etc.)
            echo "Erro ao criar agendamento: " . $e->getMessage();
            return false; // Indicar falha na criação do agendamento
        }
    }       
}