<!DOCTYPE html>
<html lang="pt-br" data-bs-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel do cliente</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/reset.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <header>
        <img src="./img/logo.svg" alt="logo BarberBooker">
        <div class="navbar-direita">
            <a href="./cadastro.php" class="nav-link">Cadastrar</a>
            <a href="./listar_agendamentos.php" class="nav-link">Visualizar agendamentos</a>
            <a href="#" class="nav-link">Sair</a>
        </div>
    </header>

    <main>
        <div class="conteudo">
            <h1>BarberBooker</h1>
            <button type="button" name="redirect" class="btn btn-dark" onclick="redirecionar()">Agendar Horário</button>
        </div>
    </main>

    <script src="./js/scripts.js"></script>
</body>
</html>