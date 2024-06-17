<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/BarberBooker/Design/css/login.css">

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Barberbook</title>
</head>
<body>
    
    
    <div class="container-fluid">
        <div class="row justify-content-center align-items-center vh-100">
            <div class="col-md-3">
                <div class="card bg-dark text-white rounded-lg shorter-card ">
                    <div class="card-body">
                        <h1 class="text-center mb-4">Login</h1>
                        <form action="/BarberBooker/login/autenticar" method="POST">
                            <div class="form-group">
                                <label for="email">E-mail</label>
                                <input type="email" name="email" class="form-control" id="email" placeholder="Digite seu e-mail">
                            </div>
                            <div class="form-group">
                                <label for="password">Senha</label>
                                <input type="password" name="senha" class="form-control" id="password" placeholder="Digite sua senha">
                                <p><?php echo $mensagem;?></p>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <button type="submit" class="btn btn-light btn-block">Entrar</button>
                                </div>
                                <div class="col">
                                    <a href="/BarberBooker/cadastro/" class="btn btn-light btn-block">Cadastrar</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




</body>
</html>