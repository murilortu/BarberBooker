<?php
  $msg = $_REQUEST['msg'];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro de Usuário</title>
  <style>
    body {
      font-family: 'Poppins', sans-serif; /* Alterando a fonte para Poppins */
      background-color: #f2f2f2;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    .container {
      width: 50%;
      background-color: #353634;
      border-radius: 10px;
      padding: 20px;
      color: #fff;
      text-align: center;
    }
    .form-group {
      margin-bottom: 20px;
    }
    .form-group input {
      width: calc(70% - 20px); /* Reduzindo a largura das caixas de entrada e aumentando o espaço nas laterais */
      padding: 10px;
      border-radius: 5px;
      border: none;
      font-family: 'Poppins', sans-serif; /* Alterando a fonte para Poppins */
    }
    .form-group input[type="submit"] {
      background-color: #ddd;
      color: #000;
      cursor: pointer;
      padding: 10px calc(10% + 20px);
      text-decoration: none;
      border-radius: 5px;
      display: inline-block;
      width: auto;
      font-size: 110%;
    }
    .form-group input[type="submit"]:hover {
      background-color: #bbb;
    }
    .login-link {
      text-align: left; /* Alinhando o link "Já tenho cadastro" à esquerda */
      margin-top: 10px; /* Ajustando a margem superior */
      margin-bottom: 10px; /* Adicionando margem inferior para separar do botão de cadastrar */
    }
    .login-link a {
      color: #B5B5B5;
      text-decoration: none;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Cadastro</h2>
    <form action="./processar_cadastro.php" method="post">
      <div class="form-group">
        <input type="text" id="nome" name="nome" placeholder="Nome" required>
      </div>
      <div class="form-group">
        <input type="email" id="email" name="email" placeholder="Email" required> <br>
        <span><?php echo($msg) ?></span>
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
        <a href="#">Já tenho cadastro</a>
      </div>
    </form>
  </div>
</body>
</html>
