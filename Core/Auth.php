<?php
class Auth {
    public static function verificarAutenticacao() {
        if (!isset($_SESSION)) {
            session_start();
        }
        
        if (!isset($_SESSION['usuario'])) {
            header('Location: /BarberBooker/login');
            exit;
        }
    }
}
?>
