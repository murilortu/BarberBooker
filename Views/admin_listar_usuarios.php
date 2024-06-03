<<!DOCTYPE html>
<html>
<head>
    <title>Lista de Usuários - Admin</title>
</head>
<body>
    <h1>Lista de Usuários</h1>
    <table>
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
                        <a href="/BarberBooker/admin/deleteUser/<?php echo $user['id_usuario']; ?>" onclick="return confirm('Tem certeza que deseja deletar este usuário?');">Deletar</a>
                        <!-- Link para visualizar agendamentos do usuário -->
                        <a href="/BarberBooker/admin/viewUserAgendamentos/<?php echo $user['id_usuario']; ?>">Ver Agendamentos</a>
                    </td>
                </tr>
                <!-- Exibir agendamentos do usuário -->
                <?php if (isset($user['agendamentos'])): ?>
                    <tr>
                        <td colspan="4">
                            <table>
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
                                                <a href="/BarberBooker/admin/agendamento/<?php echo $agendamento['id_agendamento']; ?>" onclick="return confirm('Tem certeza que deseja deletar este agendamento?');">Deletar Agendamento</a>
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
</body>
</html>
