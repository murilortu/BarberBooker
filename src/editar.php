<!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Editar</title>
        <link rel="stylesheet" href="./css/reset.css">
        <link rel="stylesheet" href="./css/style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </head>
    <body>
        <header>
            <a href="./listar_agendamentos.php" class="nav-link">< Voltar para seus agendamentos</a>
        </header>

        <main>
            <form class="conteudo-agendamento" method="post" action="processar_edicao.php">

                <div class="titulo-agendamento">
                    <h1> Editar Agendamento</h1>
                </div>

                <?php
include __DIR__ . "/conexao.php";

// Verifica se o ID do agendamento foi passado pela URL
if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM Agendamentos WHERE id_agendamento = $id;";
    $result = mysqli_query($conexao, $query);
    $query_delete = "DELETE FROM Agendamentos WHERE id_agendamento = $id";
    mysqli_query($conexao, $query_delete);


    // Verifica se a consulta retornou algum resultado
    if(mysqli_num_rows($result) == 1) {
        // Extrai os detalhes do agendamento
        $row = $result->fetch_object();
        // Armazena os detalhes do agendamento em variáveis para pré-preencher o formulário
        $tipo_servico = $row->id_servico;
        $data = $row->data_hora;
        $horario = date('H:i', strtotime($row->data_hora));
        $observacao = $row->observacoes;
    } else {
        echo "Agendamento não encontrado.";
        exit();
    }
} else {
    echo "ID do agendamento não especificado.";
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Agendamento</title>
    <!-- Adicione o Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <main>
        <form action="atualizar.php" method="post">
            <div class="corpo-agendamento">
                <p>Selecione o tipo de serviço <span style="color:red">*</span></p>
                <select required class="form-select border-black" aria-label="Default select example" name="select_tipo_servico" id="select_tipo_servico">
                    <option selected>Selecione</option>
                    <option value="1" <?php if($tipo_servico == 1) echo 'selected'; ?>>Acabamento - R$10,00</option>
                    <option value="2" <?php if($tipo_servico == 2) echo 'selected'; ?>>Barba - R$50,00</option>
                    <option value="3" <?php if($tipo_servico == 3) echo 'selected'; ?>>Cabelo - R$30,00</option>
                    <option value="4" <?php if($tipo_servico == 4) echo 'selected'; ?>>Barba e Cabelo - R$80,00</option>
                </select>
                <p>Selecione uma data <span style="color:red">*</span></p>
                <input required type="date" id="data" name="data" class="form-control form-select border-black" value="<?php echo $data; ?>">
                <p>Selecione um horário <span style="color:red">*</span></p>
                <input required type="time" id="horario" name="horario" class="form-control border-black" value="<?php echo $horario; ?>">
                <p>Observação (opcional)</p>
                <textarea class="form-control form-text-area border-black" id="exampleTextarea" rows="2" name="observacao"><?php echo $observacao; ?></textarea>
            </div>

            <div class="area-btn-agendar">
                <button type="submit" class="btn btn-dark btn-agendar-horario">Editar</button>
            </div>
        </form>
    </main>
</body>

</html>

<?php
// Fecha a conexão
mysqli_close($conexao);
?>
