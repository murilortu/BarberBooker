
<?php
$showThemeButton = true; // Definir que o botão deve ser exibido nesta página
include 'theme.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página com Alternância e Tema</title>
    <!-- Incluir Bootstrap CSS -->
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
<body class="<?php echo $theme; ?>">
<div class="container py-5">
    <h1 class="text-center">Alterar Tema</h1>
    <!-- Incluir o botão de alternância de tema onde for necessário -->
    <?php if ($showThemeButton): ?>
<div class="text-center mt-3">
    <form method="post">
        <button type="submit" name="theme" class="btn btn-primary">Alterar Tema</button>
    </form>
</div>
<?php endif; ?>
</div>
</body>
</html>
