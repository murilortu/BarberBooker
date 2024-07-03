<?php
// Iniciar a sessão (se ainda não estiver iniciada)
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Verificar se o formulário foi enviado
if (isset($_POST['theme'])) {
    // Alternar entre os temas
    $_SESSION['theme'] = ($_SESSION['theme'] == 'dark') ? 'light' : 'dark';
    // Redirecionar para a mesma página para aplicar a mudança de tema
    header("Location: " . $_SERVER['REQUEST_URI']);
    exit();
}

// Determinar o tema atual
$theme = isset($_SESSION['theme']) ? $_SESSION['theme'] : 'dark';

// Variável global para controlar a exibição do botão
$showThemeButton = true; // Definir que o botão deve ser exibido nesta página
?>
