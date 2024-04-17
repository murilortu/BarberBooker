<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<?php
// Incluir arquivo de conexão
include 'conexao.php';

// Verificar se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obter dados do formulário
    $id_usuario = 1; // Supondo que o ID do usuário seja 1
    $tipo_servico = $_POST["select_tipo_servico"];
    $id_servico = null;

    switch ($tipo_servico) {
        case "1":
            $id_servico = 1;
            break;
        case "2":
            $id_servico = 2;
            break;
        case "3":
            $id_servico = 3;
            break;
        case "4":
            $id_servico = 4;
            break;
        default:
            echo "Tipo de serviço inválido.";
            exit;
    }

    $data_hora = $_POST["data"] . " " . $_POST["horario"];
    $observacoes = $_POST["observacao"];

    // Inserir dados na tabela Agendamentos
    $sql = "INSERT INTO Agendamentos (id_usuario, id_servico, data_hora, observacoes) VALUES (?, ?, ?, ?)";
    $stmt = $conexao->prepare($sql);
    $stmt->bind_param("iiss", $id_usuario, $id_servico, $data_hora, $observacoes);

    if ($stmt->execute() === TRUE) {
        echo '<div class="alert alert-success" role="alert">Agendamento realizado com sucesso!</div>';
        header("refresh:2;url=home.php"); // Redirecionar para index.php após 2 segundos
    } else {
        echo '<div class="alert alert-danger" role="alert">Erro ao realizar agendamento: ' . $stmt->error . '</div>';
        header("refresh:5;url=home.php"); // Redirecionar para index.php após 5 segundos
    }

    // Fechar conexão
    $stmt->close();
    $conexao->close();
}
?>
