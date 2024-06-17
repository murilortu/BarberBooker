<body>
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
                  <th scope="col" colspan="2">Ações</th> <!-- Adicionando colunas para ações -->
                </tr>
              </thead>
              <tbody>
                <?php foreach ($agendamentos as $agendamento) : ?>
                  <tr>
                    <!-- Exibir os detalhes do agendamento -->
                    <td><?php echo htmlspecialchars($agendamento['tipo_servico']); ?></td>
                    <!-- Formata a data para o formato brasileiro (dia/mês/ano) -->
                    <td><?php echo htmlspecialchars(date('d/m/Y', strtotime($agendamento['data_hora']))); ?></td>
                    <!-- Formata o horário para o formato de 24 horas sem segundos -->
                    <td><?php echo htmlspecialchars(date('H:i', strtotime($agendamento['data_hora']))); ?></td>
                    <td><?php echo htmlspecialchars($agendamento['observacoes']); ?></td>
                    <td><a href="/BarberBooker/agendamento/editar/<?php echo htmlspecialchars($agendamento['id_agendamento']); ?>">Editar</a></td>
                    <td><a href="/BarberBooker/agendamento/deletar/<?php echo htmlspecialchars($agendamento['id_agendamento']); ?>">Deletar</a></td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>

      <!-- Adicione o Bootstrap JS (opcional, apenas se precisar de funcionalidades JavaScript do Bootstrap) -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>