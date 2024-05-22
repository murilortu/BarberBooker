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
}
