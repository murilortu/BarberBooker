<?php

require_once 'Conexao.php';

class AgendamentoModel
{

    private $con;

    public function __construct()
    {
        $this->con = Conexao::getConexao();
    }

    public function listarServicos()
    {
        $dados = array();
        $cmd = $this->con->query('SELECT * FROM Servicos');
        $dados = $cmd->fetchall(PDO::FETCH_ASSOC);
        return $dados;
    }

    public function listarAgendamentos($id_usuario)
    {
        $dados = array();
        $cmd = $this->con->query("
            SELECT 
                Agendamentos.id_agendamento, 
                Agendamentos.id_usuario, 
                Agendamentos.id_servico, 
                Agendamentos.data_hora, 
                Agendamentos.observacoes, 
                Servicos.tipo_servico as nome_servico 
            FROM Agendamentos
            JOIN Servicos ON Agendamentos.id_servico = Servicos.id_servico
            WHERE Agendamentos.id_usuario = $id_usuario
        ");
        $dados = $cmd->fetchAll(PDO::FETCH_ASSOC);
        return $dados;
    }

    public function listarTodosAgendamentos()
    {
        try {
            $sql = "SELECT A.id_agendamento, U.nome AS usuario, S.tipo_servico AS servico, A.data_hora, A.observacoes
                    FROM Agendamentos A
                    JOIN Usuarios U ON A.id_usuario = U.id_usuario
                    JOIN Servicos S ON A.id_servico = S.id_servico";
            $stmt = $this->con->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Erro ao listar agendamentos: " . $e->getMessage();
            return [];
        }
    }

    public function pegarAgendamento(int $id_agendamento)
    {
        $result = $this->con->query("
        SELECT *
        FROM Agendamentos
        WHERE id_agendamento = $id_agendamento
    ");
        if ($result)
            $result = $result->fetchAll(PDO::FETCH_ASSOC);
        else
            die("Problema ao fazer consulta");

        return $result[0];
    }

    public function atualizarAgendamento($id_agendamento, $id_servico, $data, $hora, $observacao)
    {
        $query = "UPDATE Agendamentos 
        SET id_servico = $id_servico,
        data_hora = '$data $hora',
        observacoes = '$observacao'
        WHERE $id_agendamento = id_agendamento";

        try {
            $result = $this->con->query($query);
            return $result;
        } catch (PDOException $th) {
            die("Erro ao atualizar: " . $th->getMessage());
        }
    }

    public function deletarAgendamento($id_agendamento)
    {
        $query = "DELETE FROM Agendamentos WHERE id_agendamento = $id_agendamento";

        try {
            $result = $this->con->query($query);
            return $result;
        } catch (PDOException $th) {
            die("Erro ao deletar: " . $th->getMessage());
        }
    }


    public function criarAgendamento($idUsuario, $idServico, $dataHora, $observacoes)
    {
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
                echo '<div class="alert alert-danger" role="alert">Erro ao realizar agendamento: ' . $cmd->errorInfo()[2] . '</div>';
                header("refresh:5;url=home.php"); // Redirecionar para home.php após 5 segundos
            }
        } catch (PDOException $e) {
            // Lidar com exceções (por exemplo, registrar o erro, exibir uma mensagem de erro, etc.)
            echo "Erro ao criar agendamento: " . $e->getMessage();
            return false; // Indicar falha na criação do agendamento
        }
    }
}
