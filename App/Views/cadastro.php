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
            <div class="card-body p-5 text-center">
              <div class="mb-md-4 mt-md-4 pb-4">
                <h2 class="fw-bold mb-2 text-uppercase text-center">Cadastro</h2>

                <?php if (isset($_SESSION['mensagem'])) : ?>
                  <div class="alert alert-info">
                    <?php
                    echo $_SESSION['mensagem'];
                    unset($_SESSION['mensagem']);
                    ?>
                  </div>
                <?php endif; ?>

                <form action="/BarberBooker/cadastro/cadastrar" method="post">
                  <div class="form-outline form-white mb-4">
                    <input type="text" id="nome" name="nome" class="form-control form-control-lg" placeholder="Nome" required>
                  </div>
                  <div class="form-outline form-white mb-4">
                    <input type="email" id="email" name="email" class="form-control form-control-lg" placeholder="Email" required>
                  </div>
                  <div class="form-outline form-white mb-4">
                    <input type="tel" id="telefone" name="telefone" class="form-control form-control-lg" placeholder="Telefone" required>
                  </div>
                  <div class="form-outline form-white mb-4">
                    <input type="password" id="senha" name="senha" class="form-control form-control-lg" placeholder="Senha" required>
                  </div>
                  <div class="form-group mb-4">
                    <button type="submit" class="btn btn-outline-light btn-lg px-5">Cadastrar</button>
                  </div>
                  <div class="login-link">
                    <p class="text-white mb-0">Já tem cadastro? <a href="/BarberBooker/login/" class="text-white fw-bold">Faça Login</a></p>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
  </section>
</body>

</html>
