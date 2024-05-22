<?php

require_once 'Conexao.php';

class AdminModel {
    private $con;

    public function __construct() {
        $this->con = Conexao::getConexao();
    }

    public function getAllUsers() {
        $sql = "SELECT * FROM Usuarios";
        $stmt = $this->con->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function deleteUser($userId) {
        try {
            $query = "DELETE FROM Usuarios WHERE id_usuario = :id_usuario";
            $stmt = $this->con->prepare($query);
            $stmt->bindParam(':id_usuario', $userId, PDO::PARAM_INT);
            return $stmt->execute();
        } catch (PDOException $e) {
            echo "Erro ao deletar usuário: " . $e->getMessage();
            return false;
        }
    }
}
?>
