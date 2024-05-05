    <!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Agendamento</title>
        <link rel="stylesheet" href="./css/reset.css">
        <link rel="stylesheet" href="./css/style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </head>
    <body>
        <header>
            <a href="./home.php" class="nav-link">< Voltar ao início</a>
        </header>

        <main>
            <form class="conteudo-agendamento" method="post" action="processar_agendamento.php">

                <div class="titulo-agendamento">
                    <h1>Agendamento</h1>
                </div>

                <div class="corpo-agendamento">
                    <p>Selecione o tipo de serviço <span style="color:red">*</span></p>
                    <select required class="form-select border-black" aria-label="Default select example" name="select_tipo_servico" id="select_tipo_servico">
                        <option selected>Selecione</option>
                        <option value="1">Acabamento - R$10,00</option>
                        <option value="2">Barba - R$50,00</option>
                        <option value="3">Cabelo - R$30,00</option>
                        <option value="4">Barba e Cabelo - R$80,00</option>
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
    </html>