<?php 

class PerfilModel {
    
    public function getUsuarioById($id) {
        $conexao = Conexao::getConexao();
        $sql = 'SELECT * FROM Usuarios WHERE id_usuario = :id';
        $stmt = $conexao->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    
    public function atualizarUsuario($id, $nome, $email, $telefone) {
        $conexao = Conexao::getConexao();
        $sql = 'UPDATE Usuarios SET nome = :nome, email = :email, telefone = :telefone WHERE id_usuario = :id';
        $stmt = $conexao->prepare($sql);
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':telefone', $telefone);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
    }
}
