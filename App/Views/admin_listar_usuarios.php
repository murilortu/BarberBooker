<!DOCTYPE html>
<html>
<head>
    <title>Lista de Usuários - Admin</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .spacer {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="text-center">Lista de Usuários</h1>
        <div class="spacer">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($users as $user): ?>
                        <tr>
                            <td><?php echo $user['id_usuario']; ?></td>
                            <td><?php echo $user['nome']; ?></td>
                            <td><?php echo $user['email']; ?></td>
                            <td>
                                <a href="/BarberBooker/admin/deleteUser/<?php echo $user['id_usuario']; ?>" class="btn btn-danger" onclick="return confirm('Tem certeza que deseja deletar este usuário?');">Deletar</a>
                                <a href="/BarberBooker/admin/viewUserAgendamentos/<?php echo $user['id_usuario']; ?>" class="btn btn-primary">Ver Agendamentos</a>
                            </td>
                        </tr>
                        <!-- Exibir agendamentos do usuário -->
                        <?php if (isset($user['agendamentos'])): ?>
                            <tr>
                                <td colspan="4">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>ID Agendamento</th>
                                                <th>Data</th>
                                                <th>Serviço</th>
                                                <th>Ações</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($user['agendamentos'] as $agendamento): ?>
                                                <tr>
                                                    <td><?php echo $agendamento['id_agendamento']; ?></td>
                                                    <td><?php echo $agendamento['data']; ?></td>
                                                    <td><?php echo $agendamento['servico']; ?></td>
                                                    <td>
                                                        <a href="/BarberBooker/admin/agendamento/<?php echo $agendamento['id_agendamento']; ?>" class="btn btn-danger" onclick="return confirm('Tem certeza que deseja deletar este agendamento?');">Deletar Agendamento</a>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Bootstrap JS (opcional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
