<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="/BarberBooker/Design/css/reset.css">
    <link rel="stylesheet" type="text/css" href="/BarberBooker/Design/css/template.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
   
    </style>
</head>
<body>
    <div class="wrapper">
        <!-- Sidebar -->
        <div class="sidebar minimized" id="sidebar"> <!-- Inicia minimizado -->
            <div>
                <img src="/BarberBooker/Design/img/logo.svg" alt="logo BarberBooker" class="img-fluid mb-4">
                <nav class="nav flex-column">
                    <br>
                    <a href="/BarberBooker/home" class="nav-link">
                        <i class="fa fa-home"></i>
                        <span class="link-text">Home</span>
                    </a>
                    <a href="#" class="nav-link">
                        <i class="fa fa-user"></i>
                        <span class="link-text">Perfil</span>
                    </a>
                    <a href="#" class="nav-link">
                        <i class="fa fa-cogs"></i>
                        <span class="link-text">Configurações</span>
                    </a>
            
                        <a href="#" class="nav-link">
                            <i class="fa fa-crown"></i>
                            <span class="link-text">Admin</span>
                        </a>
             
                    <a href="/BarberBooker/agendamento/listarAgendamentos" class="nav-link">
                        <i class="fa fa-calendar-alt"></i>
                        <span class="link-text">Visualizar agendamentos</span>
                    </a>
                    <a href="/BarberBooker/login/sair" class="nav-link">
                        <i class="fa fa-sign-out-alt"></i>
                        <span class="link-text">Sair</span>
                    </a>
                </nav>
            </div>
            <button class="toggle-btn" id="toggle-btn">&laquo;</button> <!-- Inicia com &laquo; -->
        </div>

        <!-- Conteúdo principal -->
        <div class="content">
            <!-- Cabeçalho menu -->
            <header class="d-flex justify-content-between align-items-center p-3 mb-4 border-bottom">
                <h1>BarberBooker</h1>
            </header>
            <!-- -------------- -->
            <?php $this->carregarViewNoTemplate($nomeView, $dadosModel); ?>
        </div>
    </div>

    <script>
        document.getElementById('toggle-btn').addEventListener('click', function() {
            var sidebar = document.getElementById('sidebar');
            sidebar.classList.toggle('minimized');
            if (sidebar.classList.contains('minimized')) {
                this.innerHTML = '&laquo;';
            } else {
                this.innerHTML = '&raquo;';
            }
        });
    </script>
</body>
</html>
