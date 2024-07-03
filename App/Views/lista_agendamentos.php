<?php include 'theme.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meus Agendamentos - BarberBooker</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="<?= $theme; ?>">
    <div class="container mt-5">
        <h1 class="text-center">Meus Agendamentos</h1>
        <div class="row">
            <?php foreach ($agendamentos as $agendamento) : ?>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <h5 class="card-header"><?= htmlspecialchars($agendamento['tipo_servico']); ?></h5>
                        <div class="card-body">
                            <p class="card-text"><strong>Data:</strong> <?= htmlspecialchars(date('d/m/Y', strtotime($agendamento['data_hora']))); ?></p>
                            <p class="card-text"><strong>Horário:</strong> <?= htmlspecialchars(date('H:i', strtotime($agendamento['data_hora']))); ?></p>
                            <p class="card-text"><strong>Observações:</strong> <?= htmlspecialchars($agendamento['observacoes']); ?></p>
                            <div class="d-flex justify-content-between">
                                <a href="/BarberBooker/agendamento/editar/<?= htmlspecialchars($agendamento['id_agendamento']); ?>" class="btn btn-primary"><i class="fas fa-edit"></i> Editar</a>
                                <a href="/BarberBooker/agendamento/deletar/<?= htmlspecialchars($agendamento['id_agendamento']); ?>" class="btn btn-danger"><i class="fas fa-trash-alt"></i> Deletar</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
