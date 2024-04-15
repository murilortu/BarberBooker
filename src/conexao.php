<?php 
$hostname = "roundhouse.proxy.rlwy.net";
$bancodedados = "railway";
$usuario = "root";
$senha = "rNUPSbtWFzPAFVwmsfbmLUamnRQQVZeA";

$conexao = new mysqli($hostname, $usuario, $senha, $bancodedados, 35172);
if($conexao->connect_errno) {
    die("Conexão falhou: " . $conexao->connect_error);
}
?>