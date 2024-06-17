
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Lista de Agendamentos</title>
</head>
<body>
    <div class="container mt-5">
        <h1>Todos Agendamentos</h1>
        <?php if (isset($_SESSION['mensagem'])): ?>
            <div class="alert alert-info">
                <?= $_SESSION['mensagem'] ?>
            </div>
            <?php unset($_SESSION['mensagem']); ?>
        <?php endif; ?>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Usuário</th>
                    <th>Serviço</th>
                    <th>Data e Hora</th>
                    <th>Observações</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($agendamentos as $agendamento): ?>
                    <tr>
                        <td><?= htmlspecialchars($agendamento['id_agendamento']) ?></td>
                        <td><?= htmlspecialchars($agendamento['usuario']) ?></td>
                        <td><?= htmlspecialchars($agendamento['servico']) ?></td>
                        <td><?= htmlspecialchars($agendamento['data_hora']) ?></td>
                        <td><?= htmlspecialchars($agendamento['observacoes']) ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
