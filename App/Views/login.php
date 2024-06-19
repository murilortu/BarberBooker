<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/BarberBooker/Design/css/login.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/BarberBooker/Design/css/background.css">
    <title>Barberbook</title>
</head>
<body>
    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card bg-dark text-white" style="border-radius: 1rem;">
                        <div class="card-body p-5">
                            <div class="mb-md-4 mt-md-4 pb-4">
                                <h2 class="fw-bold mb-2 text-uppercase text-center">Login</h2>
                                <form action="/BarberBooker/login/autenticar" method="POST">
                                    <div class="form-outline form-white mb-4">
                                        <label class="form-label text-start d-block" for="typeEmailX">Email</label>
                                        <input type="email" name="email" id="typeEmailX" class="form-control form-control-lg" placeholder="Digite seu e-mail"/>
                                    </div>
                                    <div class="form-outline form-white mb-4">
                                        <label class="form-label text-start d-block" for="typePasswordX">Senha</label>
                                        <input type="password" name="senha" id="typePasswordX" class="form-control form-control-lg" placeholder="Digite sua senha"/>
                                    </div>
                                    <p><?php echo $mensagem;?></p>
                                    <div class="text-center">
                                        <button class="btn btn-outline-light btn-lg px-5" type="submit">Login</button>
                                    </div>
                                </form>
                            </div>
                            <div class="text-center">
                                <p class="mb-0 mt-4">Não tem login? Cadastre-se aqui <a href="/BarberBooker/cadastro/" class="text-white-50 fw-bold">Cadastrar</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
