<?php
$data_hora = explode(' ', $data_hora);
$data = $data_hora[0];
$horario = $data_hora[1];
?>

<header>
    <a href="/BarberBooker/agendamento/listarAgendamentos" class="nav-link">
        < Voltar para seus agendamentos</a>
</header>

<main>
    <form class="conteudo-agendamento" method="post" action="/BarberBooker/agendamento/processarEdit">

        <div class="titulo-agendamento">
            <h1> Editar Agendamento</h1>
        </div>
        <div class="corpo-agendamento">
            <p>Selecione o tipo de serviço <span style="color:red">*</span></p>
            <select required class="form-select border-black" aria-label="Default select example" name="select_tipo_servico" id="select_tipo_servico">
                <option selected>Selecione</option>
                <option value="1" <?php if ($id_servico == 1) echo 'selected'; ?>>Acabamento - R$10,00</option>
                <option value="2" <?php if ($id_servico == 2) echo 'selected'; ?>>Barba - R$50,00</option>
                <option value="3" <?php if ($id_servico == 3) echo 'selected'; ?>>Cabelo - R$30,00</option>
                <option value="4" <?php if ($id_servico == 4) echo 'selected'; ?>>Barba e Cabelo - R$80,00</option>
            </select>
            <p>Selecione uma data <span style="color:red">*</span></p>
            <input required type="date" id="data" name="data" class="form-control form-select border-black" value="<?php echo $data; ?>">
            <p>Selecione um horário <span style="color:red">*</span></p>
            <input required type="time" id="horario" name="horario" class="form-control border-black" value="<?php echo $horario; ?>">
            <p>Observação (opcional)</p>
            <textarea class="form-control form-text-area border-black" id="exampleTextarea" rows="2" name="observacao"><?php echo $observacoes; ?></textarea>
            <input type="hidden" name="id_agendamento" value="<?php echo $id_agendamento ?>">
        </div>

        <div class="area-btn-agendar">
            <button type="submit" class="btn btn-dark btn-agendar-horario">Editar</button>
        </div>
</main>