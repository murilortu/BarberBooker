<!DOCTYPE html>
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
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
