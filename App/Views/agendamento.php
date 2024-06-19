
<body>
    <header>
        <a href="/BarberBooker/" class="nav-link">Voltar ao início</a>
    </header>

    <main>
        <form class="conteudo-agendamento" method="post" action="/BarberBooker/agendamento/agendar">

            <div class="titulo-agendamento">
                <h1>Agendamento</h1>
            </div>

            <div class="corpo-agendamento">
                <p>Selecione o tipo de serviço <span style="color:red">*</span></p>
                <select required class="form-select border-black" aria-label="Default select example" name="tipo_servico" id="select_tipo_servico">
                    <option selected>Selecione</option>
                    <?php foreach ($tiposServico as $servico): ?>
                        <option value="<?php echo $servico['id_servico']; ?>"><?php echo $servico['id_servico']; ?> - <?php echo $servico['tipo_servico']; ?></option>
                    <?php endforeach; ?>
                </select>
                <p>Selecione uma data <span style="color:red">*</span></p>
                <input required type="date" id="data" name="data" class="form-control form-select border-black">
                <p>Selecione um horário <span style="color:red">*</span></p>
                <input required type="time" id="horario" name="horario" class="form-control border-black">
                <p>Observação (opcional)</p>
                <textarea class="form-control form-text-area border-black" id="exampleTextarea" rows="2" name="observacao"></textarea>
            </div>

            <div class="area-btn-agendar">
                <button type="submit" class="btn btn-dark btn-agendar-horario">Agendar</button>
            </div>

        </form>
    </main>
</body>