<?php

include __DIR__ . "/conexao.php";
include __DIR__ . "/protect.php";

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Meus Agendamentos</title>
  <!-- Adicione o Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    /* Estilos adicionais para centralizar a tabela */
    .centralizado {
      margin: auto;
    }
  </style>
</head>

<body>
  <a href="./home.php" class="nav-link">&nbsp; &lt;- Home</a>
  <div class="container">
    <h1 class="text-center">Meus Agendamentos</h1>
    <div class="row">
      <div class="col centralizado">
        <table class="table table-striped text-center">
          <thead>
            <tr>
              <th scope="col">Serviço</th>
              <th scope="col">Data</th>
              <th scope="col">Horário</th>
              <th scope="col">Observações</th>
            </tr>
          </thead>
          <tbody>
            <?php
            // Consulta SQL
            $query = "SELECT * FROM Agendamentos";

            // Executa a consulta
            $resultado = mysqli_query($conexao, $query);

            // Verifica se a consulta foi bem-sucedida
            if (!$resultado) {
              echo '<tr><td colspan="4">Consulta inválida: ' . mysqli_error($conexao) . '</td></tr>';
            } else {
              // Itera sobre os resultados e os exibe
              while ($linha = mysqli_fetch_assoc($resultado)) {
                echo '<tr>';
                // Mapeamento dos IDs de serviço para seus nomes correspondentes
                $id_servico = $linha['id_servico'];
                $nome_servico = '';
                $id_agendamento = $linha['id_agendamento'];
                switch ($id_servico) {
                  case 1:
                    $nome_servico = 'Acabamento';
                    break;
                  case 2:
                    $nome_servico = 'Barba';
                    break;
                  case 3:
                    $nome_servico = 'Cabelo';
                    break;
                  case 4:
                    $nome_servico = 'Barba e Cabelo';
                    break;
                  default:
                    $nome_servico = 'Não especificado';
                    break;
                }
                echo '<td>' . htmlspecialchars($nome_servico) . '</td>';
                // Formata a data para o formato brasileiro (dia/mês/ano)
                $data_formatada = date('d/m/Y', strtotime($linha['data_hora']));
                echo '<td>' . htmlspecialchars($data_formatada) . '</td>';
                // Formata o horário para o formato de 24 horas sem segundos
                $horario_formatado = date('H:i', strtotime($linha['data_hora']));
                echo '<td>' . htmlspecialchars($horario_formatado) . '</td>';
                echo '<td>' . htmlspecialchars($linha['observacoes']) . '</td>';
                echo '<td>' . "<a href='./editar.php?id=$id_agendamento'>Editar</a>" . '</td>';
                echo '<td>' . "<a href='./delete.php?id=$id_agendamento'>Deletar</a>" . '</td>';
                echo '</tr>';
              }
              // Libera a memória
              mysqli_free_result($resultado);
            }
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <!-- Adicione o Bootstrap JS (opcional, apenas se precisar de funcionalidades JavaScript do Bootstrap) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

<?php
// Fecha a conexão
mysqli_close($conexao);
?>