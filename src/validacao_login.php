<?php 

include __DIR__ . "/conexao.php";

if (isset($_POST['email']) && $_POST['senha']){
    if (strlen($_POST['email']) == 0) {
        echo "<script>alert('Preencha o campo usuario')</script>";
    } else if (strlen($_POST['senha']) == 0) {
        echo "<script>alert('Preencha o campo senha')</script>";
    } else {
        $email = $conexao->real_escape_string($_POST['email']);
        $senha = $conexao->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM Usuarios WHERE email = '$email' AND senha = '$senha'";
        $sql_query = $conexao->query($sql_code) or die("Falha na execução do código SQL: " . $conexao->error);

        $quantidade = $sql_query->num_rows;
        if($quantidade == 1) {
            
            $usuario = $sql_query->fetch_assoc();

            if(!isset($_SESSION)) {
                session_start();
            }

            $_SESSION['id'] = $usuario['id_usuario'];
            $_SESSION['nome'] = $usuario['nome'];

            header("Location: home.php");

        } else {
            echo "<script>alert('Usuário ou senha incorretos')</script>";
        }
    }
}

?>