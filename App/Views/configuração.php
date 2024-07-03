<?php
include 'theme.php'; // Incluir o arquivo onde $theme é definido

// Restante do código que usa $theme e $showThemeButton
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Configuração</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .dark {
            background-color: #333;
            color: #fff;
        }
        .light {
            background-color: #fff;
            color: #333;
        }
    </style>
</head>
<body class="<?= $theme; ?>">
<div class="container py-5">
    <h1 class="text-center">Configurações</h1>
    <ul class="list-group">
        <!-- Item de configuração -->
        <li class="list-group-item <?= ($theme == 'dark') ? 'dark' : 'light'; ?>">
            <form method="post">
                <button type="submit" name="theme" class="btn btn-primary"><?= ($theme == 'dark') ? 'Tema Escuro' : 'Tema Claro'; ?></button>
            </form>
        </li>
        <!-- Outros itens de configuração podem ser adicionados aqui -->
    </ul>
</div>
</body>
</html>
