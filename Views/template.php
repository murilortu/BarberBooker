<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Template</title>
    <link rel="stylesheet" type="text/css" href="/BarberBooker/Design/css/reset.css">
    <link rel="stylesheet" type="text/css" href="/BarberBooker/Design/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>

<!-- Cabeçalho menu -->
<header>
        <img src="/BarberBooker/Design/img/logo.svg" alt="logo BarberBooker">
        <div class="navbar-direita">
            <a href="agendamento/listarAgendamentos" class="nav-link">Visualizar agendamentos</a>
            <a href="/BarberBooker/login/sair" class="nav-link">Sair</a>
        </div>
</header>
<!-- -------------- -->
<?php 
$this->carregarViewNoTemplate($nomeView, $dadosModel);
?>
<!-- -------------- -->

<!-- Rodapé -->

</body>
</html>