<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/css/bootstrap-extended.min.css">
    <link rel="stylesheet" type="text/css" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/fonts/simple-line-icons/style.min.css">
    <link rel="stylesheet" type="text/css" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/css/colors.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <title>BarberBooker</title>
    <style>
        .conteudo {
            margin: 0 auto;
            padding: 50px 0;
        }
        .card {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="grey-bg container-fluid">
        <section id="home-section">
            <div class="row">
                <div class="col-12 mt-3 mb-1 text-center">
                    <h1 class="text-uppercase">Bem-vindo ao BarberBooker!</h1>
                    <p>Gerencie seus agendamentos de forma fácil e rápida!</p>
                </div>
            </div>
            
            <!-- Alerta de Exemplo -->
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <?php
                    // Verifica se há uma mensagem para exibir
                    if (isset($_SESSION['mensagem'])) {
                        $tipoAlerta = strpos($_SESSION['mensagem'], 'Erro') !== false ? 'danger' : 'success';
                        echo '<div class="alert alert-' . $tipoAlerta . ' alert-dismissible fade show" role="alert">
                                ' . $_SESSION['mensagem'] . '
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                              </div>';
                        unset($_SESSION['mensagem']); // Remove a mensagem da sessão para não exibi-la novamente
                    }
                    ?>
                </div>
            </div>
            
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="media d-flex">
                                    <div class="align-self-center">
                                        <i class="icon-user primary font-large-2 float-left"></i>
                                    </div>
                                    <div class="media-body text-right">
                                        <h3>Perfil do Usuário</h3>
                                        <a href="/BarberBooker/perfil" class="btn btn-primary">Ver Perfil</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="media d-flex">
                                    <div class="align-self-center">
                                        <i class="icon-settings warning font-large-2 float-left"></i>
                                    </div>
                                    <div class="media-body text-right">
                                        <h3>Configurações</h3>
                                        <a href="/BarberBooker/config" class="btn btn-warning">Configurar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="media d-flex">
                                    <div class="align-self-center">
                                        <i class="icon-calendar success font-large-2 float-left"></i>
                                    </div>
                                    <div class="media-body text-right">
                                        <h3>Agendamentos</h3>
                                        <a href="/BarberBooker/agendamento/" class="btn btn-success">Agendar Horário</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>
