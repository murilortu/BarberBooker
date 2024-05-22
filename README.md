<img width=100% src="https://capsule-render.vercel.app/api?type=waving&color=ffffff&height=120&section=header"/>

<p align="center">
<img style="width: 20rem" loading="lazy" src="https://uploaddeimagens.com.br/images/004/781/849/full/BarberBooker__1_-removebg-preview.png?1715347696"/>
</p>

## Índice

1. [Cabeçalho](#barberbooker)
2. [Descrição](#descrição-do-projeto)
3. [Sprints](#sprints)
4. [Requisitos funcionais](#requisitos-funcionais-do-projeto)

# BarberBooker
#### Curso: Bacharelado em Ciência da Computação
#### Disciplina: Engenharia de Software
#### Professor: Edeilson Milhomem da Silva
#### Monitor: João Gabriel Alves de Souza
#### Integrantes: Daniel Reis Aruda Sales, Eliézer Alencar Moreira, João Victor Ribeiro Santos, Matheus Moretti Cabral, Murilo Rodrigues Perira. 

## Descrição do projeto: 

O projeto "BarberBooker" foi criado para a matéria de Engenharia de Software do Curso de Ciência da Computação - UFT. Consiste em uma plataforma online projetada para simplificar o agendamento de horários em barbearias. Com o BarberBooker, os clientes têm a conveniência de agendar seus cortes de cabelo, barbas e outros serviços de barbearia com apenas alguns cliques, eliminando a necessidade de telefonemas ou visitas pessoais à barbearia.

## Sprints

- Sprint 1 - [Relatório da Sprint 1](./docs/sprints/Sprint1_details.md)
- Sprint 2 - [Relatório da Sprint 2](./docs/sprints/Sprint2_details.md)
- Sprint 3 - [Relatório da Sprint 3](./docs/sprints/Sprint3_details.md)


## Caso de uso expandido

- Caso de uso expandido - [Caso de uso](./docs/caso_de_uso_expandido.md)

## Requisitos funcionais do projeto

## *RF01 - Efetuar Cadastro*
Autor: @Carecovisk – João Victor Ribeiro Santos
Revisor: @Murilortu – Murilo Rodrigues

### Descrição
Usuários podem criar uma conta fornecendo informações como nome, e-mail, telefone e senha. Este cadastro possibilita acesso a funcionalidades adicionais como agendamento de horários, visualização de agendamentos e atualização de informações pessoais.

### User Story

### Persona 01 - Usuário Comum

|     Epic     |     User Story     | Critérios de Aceitação |
|--------------| -------------------------- | ----------------------- |
|  Como usuário comum, desejo realizar cadastro no sistema  | Enquanto usuário comum do site, desejo poder criar uma conta através de um formulário de cadastro para utilizar as funcionalidades do sistema.  |  Para concluir o cadastro, o usuário deve fornecer um e-mail válido, uma senha forte e informações pessoais necessárias. O sistema deve validar os dados fornecidos e criar a conta do usuário no banco de dados. |
<br/>

### Protótipo
![Tela de Cadastro](https://uploaddeimagens.com.br/images/004/780/834/full/imagem_2024-05-08_001927258.png?1715138369)


## *RF02 - Efetuar Login*

 Autor: @Murilortu – Murilo Rodrigues
Revisor: @Carecovisk – João Victor Ribeiro Santos
### Descrição
Usuários cadastrados podem fazer login inserindo suas credenciais (e-mail e senha), acessando assim as funcionalidades do sistema.

### User Story

### Persona 01 - Usuário Comum

|     Epico     |     User Story     | Critérios de Aceitação |
|--------------| -------------------------- | ----------------------- |
|  Como usuário comum, desejo realizar autenticação no sistema  | Enquanto usuário comum do site, desejo acessar minha conta através de uma página de login para utilizar as funcionalidades do sistema.  |  Para efetuar login, o usuário deve possuir dados cadastrados no banco de dados e fornecer o e-mail e senha corretos conforme cadastrados. |
<br/>

### Protótipo
![Tela de Login](https://uploaddeimagens.com.br/images/004/780/835/full/imagem_2024-05-08_002147775.png?1715138509)

## *RF03 - Agendar*
Autor: @Liezy – Eliézer Alencar
Revisor: @Danielpyreis – Daniel reis

### Descrição
Usuários logados podem agendar horários disponíveis na barbearia, escolhendo data, hora e serviço desejado.

### User Story

### Persona 01 - Cliente da Barbearia

|     Epic     |     User Story     | Critérios de Aceitação |
|--------------| ------------------ | ----------------------- |
|  Como cliente da barbearia, desejo agendar um horário para um corte de cabelo  | Enquanto cliente da barbearia, desejo poder agendar um horário para um corte de cabelo através do sistema online para garantir que serei atendido na hora desejada.  |  Para agendar um horário, o cliente deve acessar a plataforma online da barbearia, selecionar o serviço desejado, escolher o horário disponível, e fornecer suas informações de contato. O sistema deve confirmar o agendamento e enviar uma notificação de confirmação para o cliente. |
<br/>

### Protótipo
![Tela de agendamento](https://uploaddeimagens.com.br/images/004/780/836/full/imagem_2024-05-08_002452029.png?1715138694)

## *RF04 - Listar agedamento dos usuários*
Autor: @Danielpyreis – Daniel Reis.
Revisor: @Liezy – Eliézer Alencar.

### Descrição
Usuários podem visualizar uma lista dos seus próprios agendamentos previamente marcados na barbearia.

### User Story

### Persona 01 - Usuário Registrado

|     Epic     |     User Story     | Critérios de Aceitação |
|--------------| ------------------ | ----------------------- |
|  Como usuário registrado, desejo visualizar meus agendamentos na barbearia  | Enquanto usuário registrado no sistema da barbearia, desejo poder visualizar uma lista dos meus agendamentos para que eu possa acompanhar minhas próximas visitas.  |  Para visualizar meus agendamentos, devo fazer login na plataforma da barbearia, acessar a seção de "Meus Agendamentos" e ver uma lista ordenada cronologicamente dos meus próximos compromissos, incluindo detalhes como data, horário, serviço agendado e status do agendamento. |
<br/>

## Protótipo
![Listagem de agendamentos](https://uploaddeimagens.com.br/images/004/780/837/full/imagem_2024-05-08_002714385.png?1715138836)

## *RF05 - Listar todos os agendamento*
Autor: @MMorettiC– Matheus Moretti Cabral.
Revisor: @Carecovisk – João Victor Ribeiro Santos.

### Descrição
Os administradores têm acesso à funcionalidade de listar todos os agendamentos de todos os usuários da barbearia. Essa visualização abrangente permite aos administradores acompanhar o fluxo de trabalho geral da barbearia.

### User Story

### Persona 02 - Administrador da Barbearia

|     Epic     |     User Story     | Critérios de Aceitação |
|--------------| ------------------ | ----------------------- |
|  Como administrador da barbearia, desejo visualizar todos os agendamentos realizados  | Enquanto administrador da barbearia, desejo poder acessar uma lista completa de todos os agendamentos realizados através do sistema para gerenciar melhor o fluxo de clientes e os recursos da barbearia.  |  Ao acessar o sistema como administrador, devo encontrar uma seção específica para "Todos os Agendamentos", onde poderei ver uma lista detalhada de todos os agendamentos, incluindo informações como data, horário, cliente, serviço agendado e status do agendamento. O sistema deve permitir ordenação e filtragem dos agendamentos por diferentes critérios, como data ou status. |
<br/>

### Protótipo
![Listagem de agendamentos](https://uploaddeimagens.com.br/images/004/780/838/full/imagem_2024-05-08_002910792.png?1715138953)

<img width=100% src="https://capsule-render.vercel.app/api?type=waving&color=ffffff&height=120&section=footer"/>
