<?php

include __DIR__ . "/conexao.php";

$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$password = $_POST['senha'];




try {
    $query = "INSERT INTO Usuarios (nome, email, telefone, senha) VALUES ('$nome', '$email', '$telefone', '$password');";

    $result = mysqli_query($conexao, $query);

    if ($result)
        header("Location: ./home.php");

} catch (mysqli_sql_exception $th) {
    $msg = "O email já esta em uso";
    header("Location: ./cadastro.php?msg=" . $msg);
}
