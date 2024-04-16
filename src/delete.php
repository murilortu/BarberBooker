<?php

include __DIR__ . "/conexao.php";

$id = $_GET['id'];
$query = "DELETE FROM Agendamentos WHERE id_agendamento = $id;";

$result = mysqli_query($conexao, $query);

if(!$result)
    echo "Erro ao executar mysqli_query!";
else
    header("Location: ./listar_agendamentos.php");
?>