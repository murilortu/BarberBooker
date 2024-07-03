<!-- Views/perfil.php -->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Perfil do Usuário - BarberBooker</title>
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h1 class="card-title text-center">Perfil do Usuário</h1>
                        <?php if (isset($_SESSION['mensagem'])): ?>
                            <p class="alert alert-info"><?= $_SESSION['mensagem']; unset($_SESSION['mensagem']); ?></p>
                        <?php endif; ?>
                        <form method="POST" action="/BarberBooker/perfil/atualizar">
                            <div class="form-group">
                                <label for="nome">Nome:</label>
                                <input type="text" id="nome" name="nome" value="<?= htmlspecialchars($usuario['nome']); ?>" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" id="email" name="email" value="<?= htmlspecialchars($usuario['email']); ?>" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="telefone">Telefone:</label>
                                <input type="text" id="telefone" name="telefone" value="<?= htmlspecialchars($usuario['telefone']); ?>" class="form-control" required>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Atualizar Perfil</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
