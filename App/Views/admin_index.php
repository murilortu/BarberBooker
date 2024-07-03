<?php include 'theme.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel de Administração - BarberBooker</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .card {
            margin-bottom: 20px;
        }
        .card-body {
            text-align: center;
        }
    </style>
</head>
<body class="<?= $theme; ?>">
    <div class="container mt-5">
        <h1 class="mb-4">Painel de Administração</h1>
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Total de Agendamentos</h5>
                        <p class="card-text"><?= $totalAgendamentos ?></p>
                        <a href="/BarberBooker/admin/listarTodosAgendamentos" class="btn btn-primary">Ver Agendamentos</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Total de Usuários</h5>
                        <p class="card-text"><?= $totalUsuarios ?></p>
                        <a href="/BarberBooker/admin/listarUsuarios" class="btn btn-primary">Ver Usuários</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
