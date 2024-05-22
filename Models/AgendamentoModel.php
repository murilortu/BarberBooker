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

    public function listarAgendamentos($id_usuario) {
        $dados = array();
        $cmd = $this->con->prepare("
            SELECT 
                Agendamentos.id_agendamento, 
                Agendamentos.id_usuario, 
                Agendamentos.id_servico, 
                Agendamentos.data_hora, 
                Agendamentos.observacoes, 
                Servicos.tipo_servico as nome_servico 
            FROM Agendamentos
            JOIN Servicos ON Agendamentos.id_servico = Servicos.id_servico
            WHERE Agendamentos.id_usuario = :id_usuario
        ");
        $cmd->bindParam(':id_usuario', $id_usuario, PDO::PARAM_INT);
        $cmd->execute();
        $dados = $cmd->fetchAll(PDO::FETCH_ASSOC);
        return $dados;
    }

    public function listarTodosAgendamentos() {
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

    public function pegarAgendamento(int $id_agendamento) {
        $stmt = $this->con->prepare("SELECT * FROM Agendamentos WHERE id_agendamento = :id_agendamento");
        $stmt->bindParam(':id_agendamento', $id_agendamento, PDO::PARAM_INT);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($result) {
            return $result;
        } else {
            die("Problema ao fazer consulta");
        }
    }

    public function atualizarAgendamento($id_agendamento, $id_servico, $data, $hora, $observacao) {
        $query = "UPDATE Agendamentos 
        SET id_servico = :id_servico,
        data_hora = :data_hora,
        observacoes = :observacao
        WHERE id_agendamento = :id_agendamento";

        try {
            $stmt = $this->con->prepare($query);
            $stmt->bindParam(':id_servico', $id_servico, PDO::PARAM_INT);
            $stmt->bindParam(':data_hora', $data . ' ' . $hora, PDO::PARAM_STR);
            $stmt->bindParam(':observacao', $observacao, PDO::PARAM_STR);
            $stmt->bindParam(':id_agendamento', $id_agendamento, PDO::PARAM_INT);
            $stmt->execute();
            return true;
        } catch (PDOException $th) {
            die("Erro ao atualizar: " . $th->getMessage());
        }
    }

    public function deletarAgendamento($id_agendamento) {
        $query = "DELETE FROM Agendamentos WHERE id_agendamento = :id_agendamento";

        try {
            $stmt = $this->con->prepare($query);
            $stmt->bindParam(':id_agendamento', $id_agendamento, PDO::PARAM_INT);
            $stmt->execute();
            return true;
        } catch (PDOException $th) {
            die("Erro ao deletar: " . $th->getMessage());
        }
    }

    public function deletarAgendamentosUsuario($id_usuario) {
        $query = "DELETE FROM Agendamentos WHERE id_usuario = :id_usuario";

        try {
            $stmt = $this->con->prepare($query);
            $stmt->bindParam(':id_usuario', $id_usuario, PDO::PARAM_INT);
            $stmt->execute();
            return true;
        } catch (PDOException $th) {
            die("Erro ao deletar agendamentos do usuário: " . $th->getMessage());
        }
    }
}
?>
