<?php

if(!isset($_SESSION)){
    session_start();
}

if(!isset($_SESSION['id'])){
 
    die ("Você não pode acessar essa pagina por que não esta logado. <p><a href=\"home.php\">Entrar</a></p>");
}

?>