<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro de Usuário</title>
  <link rel="stylesheet" type="text/css" href="/BarberBooker/Design/css/cadastro.css">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container">
    <h2>Cadastro</h2>

    <?php if (isset($_SESSION['mensagem'])): ?>
      <div class="alert alert-info">
        <?php
          echo $_SESSION['mensagem'];
          unset($_SESSION['mensagem']);
        ?>
      </div>
    <?php endif; ?>

    <form action="/BarberBooker/cadastro/cadastrar" method="post">
      <div class="form-group">
        <input type="text" id="nome" name="nome" placeholder="Nome" required>
      </div>
      <div class="form-group">
        <input type="email" id="email" name="email" placeholder="Email" required>
      </div>
      <div class="form-group">
        <input type="tel" id="telefone" name="telefone" placeholder="Telefone" required>
      </div>
      <div class="form-group">
        <input type="password" id="senha" name="senha" placeholder="Senha" required>
      </div>
      <div class="form-group">
        <input type="submit" value="Cadastrar">
      </div>
      <div class="login-link">
        <a href="/BarberBooker/login/">Já tenho cadastro</a>
      </div>
    </form>
  </div>
</body>
</html>
