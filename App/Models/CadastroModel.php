<?php

namespace App\Models;

use PDO;
use PDOException;

class CadastroModel
{
    private $con;

    public function __construct(PDO $con)
    {
        $this->con = $con;
    }

    public function cadastrarUsuario($nome, $email, $telefone, $senha)
    {
        try {
            $sql = "INSERT INTO Usuarios (nome, email, telefone, senha) VALUES (?, ?, ?, ?)";
            $stmt = $this->con->prepare($sql);
            $stmt->execute([$nome, $email, $telefone, $senha]);
            return true;
        } catch (PDOException $e) {
            return false;
        }
    }

    public function atualizarUsuario($id, $nome, $email, $telefone, $senha)
    {
        try {
            $sql = "UPDATE Usuarios SET nome = ?, email = ?, telefone = ?, senha = ? WHERE id = ?";
            $stmt = $this->con->prepare($sql);
            $stmt->execute([$nome, $email, $telefone, $senha, $id]);
            return true;
        } catch (PDOException $e) {
            return false;
        }
    }

    public function deletarUsuario($id)
    {
        try {
            $sql = "DELETE FROM Usuarios WHERE id = ?";
            $stmt = $this->con->prepare($sql);
            $stmt->execute([$id]);
            return true;
        } catch (PDOException $e) {
            return false;
        }
    }

    public function emailDuplicado($email)
    {
        try {
            $sql = "SELECT COUNT(*) FROM Usuarios WHERE email = ?";
            $stmt = $this->con->prepare($sql);
            $stmt->execute([$email]);
            $count = $stmt->fetchColumn();
            return $count > 0;
        } catch (PDOException $e) {
            return false;
        }
    }
}
