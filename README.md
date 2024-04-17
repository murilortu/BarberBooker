# BarberBooker
#### Monitor: João Gabriel Alves de Souza
#### Integrantes: Daniel Reis Aruda Sales, Eliézer Alencar Moreira, João Victor Ribeiro Santos, Matheus Moretti Cabral, Murilo Rodrigues Perira. 

---
## Descrição: 

O projeto "BarberBooker" é uma plataforma online projetada para simplificar o agendamento de horários em barbearias. Com o BarberBooker, os clientes têm a conveniência de agendar seus cortes de cabelo, barbas e outros serviços de barbearia com apenas alguns cliques, eliminando a necessidade de telefonemas ou visitas pessoais à barbearia

---

# Planejamento da Iteração #1

## Período
Data de Início: 03/04/2024

Data de Término: 17/04/2024

## Objetivo
O objetivo da iteração #1 é implementar as funcionalidades básicas do BarberBooker (CRUD) que são. Criar agendamnetos, Editar agendamentos, Listar os agendamentos, Deletar agendamentos

## Responsabilidades

### Desenvolvedores
1. Criar agendameneto
   - Desenvolvedor: [Eliézer Alencar Moreira](https://github.com/Liezy) e [Daniel Reis Aruda Sales](https://github.com/Danielpyreis)
   - Revisor: Daniel Reis Aruda Sales

2. Listar os agendamentos
   - Desenvolvedor: [Matheus Moretti Cabral](https://github.com/MMorettiC)
   - Revisor: João Victor Ribeiro Santos

3. Editar agendamento
   - Desenvolvedor: [Murilo Rodrigues Pereira](https://github.com/murilortu/BarberBooker)
   - Revisor: Eliézer Alencar Moreira

4. Deletar agendamento
   - Desenvolvedor: [João Victor Ribeiro Santos](https://github.com/Carecovisk)
   - Revisor: Murilo Rodrigues Pereira



### Observações
- Cada funcionalidade foi desenvolvida por um desenvolvedor específico e revisada por outro integrante da equipe, conforme indicado.
- O desenvolvimento será foi de forma colaborativa, garantindo a qualidade e consistência do código.

---

### Definindo os requisitos funcionais do projeto:

---

 - RF01 - Cadastar usuário. [João Victor](https://github.com/Carecovisk) Revisado por Murilo Rodrigues 
 - RF02 - Fazer login do usuário. [Murilo Rodrigues](https://github.com/murilortu) Revisado por Eliézer Alencar
 - RF03 - Agendar. [Eliézer Alencar](https://github.com/Liezy) Revisado por Daniel Reis 
 - RF04 - Listar agendamentos do usuário. [Daniel Reis](https://github.com/Danielpyreis) Revisado por Eliézer Alencar
 - RF05 - Listar todos os agendamentos. [Moretti](https://github.com/MMorettiC) Revisado por João Victor

## *RF01 - Efetuar Cadastro*
 #### Autor: @Carecovisk – João Victor Ribeiro Santos.

---

### Revisor: @Murilortu – Murilo Rodrigues.

| Item            | Descrição                                                                                                                                                      |
| --------------- | -------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| Caso de uso     |  RF01 - Cadastro do usuário.                                                                                                                                |
| Resumo          | A primeiro momento, o cliente fará o cadastro, inserindo seus dados, após isso poderá efetuar o login e gerenciar sua conta.   |
| Ator principal  | Ator utilizador da plataforma e novos usuários.                                                                                                                |
| Pré-condição    | Para fazer o cadastro é necessário  ter conexão com a internet e estar na aplicação.                                                                                                |
| Pós-condição    | Para fazer o login o usuário precisa criar uma conta.                                                                                                          |

#### Fluxo principal

| Passos  | Descrição                                                                                                                                              |
| ------- | ------------------------------------------------------------------------------------------------------------------------------------------------------ |
| Passo 1 | O usuário entra no site;                                                                                                          |
| Passo 2 | A primeiro momento ele não tem uma conta então clica em Registre-se;                                                                                   |
| Passo 3 | Com isso é exibido um formulário para preencher seus dados;                                                                                            |
| Passo 4 | Ao preencher os campos necessários o cliente clica em “Criar conta”;                                                                                   |
| Passo 5 | Em seguida é redirecionado a página de login;                                                                                                          |
| Passo 6 | Entra em sua conta e pode começar a gerenciar seus serviços;                                                                                            |

#### Campos do formulário.

| Campo    | Obrigatório? | Editável? | Formato      |
| ------------ | ----------------- | ------------ | --------------- |
| Usuario  | Sim          | Sim       | Texto        |
| Email       | Sim          | Sim       | Texto        |
| Senha     | Sim          | Sim       | Texto        |
| Telefone     | Sim          | Sim       | Número       |


### Opções do usuário
| Opção                 | Descrição                                                      |
|-----------------------|----------------------------------------------------------------|
| Fazer cadastro   | Permite o usuário fazer cadastro no sistema com base nos dados fornecidos.                   |



#### Relatório de usuário
| Campo                    | Descrição                                                             | Formato |
| ------------------------ | --------------------------------------------------------------------- | ------- |
| Conta Criada com sucesso | Isso confirma e garante todo êxito na operação de cadastro do usuário | Texto |

#### Fluxo alternativo

| Passos    | Descrição                                                                                                      |
| --------- | -------------------------------------------------------------------------------------------------------------- |
| Passo 1 | O cliente tenta fazer o cadastro.                                                                                       |
| Passo 2 | Uma mensagem aparece informando que usuário já tem uma conta |
| Passo 3 | O cliente é redirecionado para tela de login|

## *RF02 - Efetuar Login*
 #### Autor: @Murilortu – Murilo Rodrigues.

---

### Revisor: @Carecovisk – João Victor Ribeiro Santos.

| Item            | Descrição                                                                                                                                                      |
| --------------- | -------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| Caso de uso     |  RF02 - Login do usuário.                                                                                                                                |
| Resumo          | Permitir que o usuário faça login no sistema, desde que o mesmo tenha cadastro. Caso o usuário não tenha cadastro, ele será redirecionado para a tela de cadastro.   |
| Ator principal  | Ator utilizador da plataforma e novos usuários.                                                                                                                |
| Pré-condição    | Para fazer o login é necessário ter conexão com a internet e estar na aplicação.                                                                                                |
| Pós-condição    | Acessar o sistema.                                                                                                          |

#### Fluxo principal

| Passos  | Descrição                                                                                                                                              |
| ------- | ------------------------------------------------------------------------------------------------------------------------------------------------------ |
| Passo 1 | O usuário entra no sistema;                                                                                                          |
| Passo 2 | O usuário clica em login apresentado na tela principal;                                                                                   |
| Passo 3 | O usuário preenche os dados e clica em login;                                                                                            |
| Passo 4 | Caso o usuário tenha cadastro prévio, ele é direcionado à tela principal para realizar os agendamentos. Caso ele não tenha cadastro, será direcionado para a tela de cadastro;                                                                                   |
| Passo 6 | Entra em sua conta e pode começar a gerenciar seus serviços;                                                                                            |

#### Campos do formulário.

| Campo    | Obrigatório? | Editável? | Formato      |
| ------------ | ----------------- | ------------ | --------------- |
| Usuario  | Sim          | Sim       | Texto        |
| Senha     | Sim          | Sim       | Texto        |


### Opções do usuário
| Opção                 | Descrição                                                      |
|-----------------------|----------------------------------------------------------------|
| Fazer login   | Permite o usuário fazer login no sistema com base nos dados fornecidos.                   |



#### Relatório de usuário
| Campo                    | Descrição                                                             | Formato |
| ------------------------ | --------------------------------------------------------------------- | ------- |
| Conta logada com sucesso | Isso confirma e garante todo êxito na operação de login do usuário | Texto |

#### Fluxo alternativo

| Passos    | Descrição                                                                                                      |
| --------- | -------------------------------------------------------------------------------------------------------------- |
| Passo 1 | O cliente tenta fazer o login                                                                                       |
| Passo 2 | Uma mensagem aparece informando que o usuário não possui cadastro |
| Passo 3 | O cliente é redirecionado para tela de cadastro|


## *RF03 - Agendar*
#### Autor: @Liezy – Eliézer Alencar.

---

### Revisor: @Danielpyreis – Daniel reis.

| Item            | Descrição                                                                                                                                                      |
| --------------- | -------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| Caso de uso     |  RF03 - Agendar.                                                                                                                              |
| Resumo          | Permite o usuário fazer agendamento de serviços prestados pela barbearia.  |
| Ator principal  | Ator utilizador da plataforma e novos usuários.                                                                                                                |
| Pré-condição    | Estar logado na aplicação.                                                                                                |
| Pós-condição    | Utilizar dos serviços.                                                                                                          |

#### Fluxo principal

| Passos  | Descrição                                                                                                                                              |
| ------- | ------------------------------------------------------------------------------------------------------------------------------------------------------ |
| Passo 1 | O usuário estando logado seleciona o tipo de serviço;                                                                                                          |
| Passo 2 | O usuário seleciona a data;                                                                                   |
| Passo 3 | O usuário seleciona o horário;                                                                                            |
| Passo 4 | O usuário pode informar observações em uma caixa de texto;                                                                                   |
| Passo 6 | O usuário clica em "confirmar agendamento".                                                                                          |

#### Campos do formulário.

| Campo    | Obrigatório? | Editável? | Formato      |
| ------------ | ----------------- | ------------ | --------------- |
| Tipo de serviço  | Sim          | Sim       | Texto        |
| data     | Sim          | Sim       | Texto        |
| Horário     | Sim          | Sim       | Texto        |
| Observação     | Não          | Sim       | Texto        |


### Opções do usuário
| Opção                 | Descrição                                                      |
|-----------------------|----------------------------------------------------------------|
| Confirmar agendamento   | Permite o usuário confirmar o agendamento no sistema com base nos dados fornecidos.                   |
| Cancelar agendamento   | Permite o usuário cancelar o agendamento no sistema.                   |



#### Relatório de usuário
| Campo                    | Descrição                                                             | Formato |
| ------------------------ | --------------------------------------------------------------------- | ------- |
| Agendamento realizado com sucesso | Isso confirma e garante todo êxito na operação de agendamento do usuário | Texto |

#### Fluxo alternativo

| Passos    | Descrição                                                                                                      |
| --------- | -------------------------------------------------------------------------------------------------------------- |
| Passo 1 | O cliente tenta fazer agendamento                                                                                       |
| Passo 2 | Uma mensagem aparece informando que o usuário já possui agendamento naquele horário |
| Passo 3 | O agendamento não é concluído enquanto o cliente não selecionar um horário diferente ou apagar o agendamento que ele possui naquele horário|



## *RF04 - Listar agedamento dos usuários*
#### Autor: @Danielpyreis – Daniel Reis.

---

### Revisor: @Liezy – Eliézer Alencar.

| Item            | Descrição                                                                                                                                                      |
| --------------- | -------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| Caso de uso     |  RF04 - Listar agendamento dos usuários.                                                                                                                              |
| Resumo          | Permite o usuário listar agendamentos feitos pelo mesmo.  |
| Ator principal  |Clientes.                                                                                                                |
| Pré-condição    | Ter feito agendamento.                                                                                                |
| Pós-condição    | Visualizar o lista dos serviços solicitados.     |                                                                                                     

#### Fluxo principal

| Passos  | Descrição                                                                                                                                              |
| ------- | ------------------------------------------------------------------------------------------------------------------------------------------------------ |
| Passo 1 | O usuário estando logado e feito o agendamento, interage com o botão "listar agendamentos".                                                                            |
| Passo 2 | Visualiza a lista de serviços                                                                            |



### Opções do usuário
| Opção                 | Descrição                                                      |
|-----------------------|----------------------------------------------------------------|
| Listar agendamento   | Permite o usuário listar os agendamentos.                   |




#### Relatório de usuário
| Campo                    | Descrição                                                             | Formato |
| ------------------------ | --------------------------------------------------------------------- | ------- |
| Listagem dos serviços | Isso confirma e garante todo êxito na operação da listagem de serviços do usuário | Texto |

## *RF05 - Listar todos os agendamento*
#### Autor: @MMorettiC– Matheus Moretti Cabral.

---

### Revisor: @Carecovisk – João Victor Ribeiro Santos.

| Item            | Descrição                                                                                                                                                      |
| --------------- | -------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| Caso de uso     |  RF05 - Listar todos os agendamentos.                                                                                                                              |
| Resumo          | Permite a listagem de todos os agendamento de todos os usuários.  |
| Ator principal  |Administrador.                                                                                                                |
| Pré-condição    | Ter feito login como administrador.                                                                                                |
| Pós-condição    | Listagem geral.     |                                                                                                     

#### Fluxo principal

| Passos  | Descrição                                                                                                                                              |
| ------- | ------------------------------------------------------------------------------------------------------------------------------------------------------ |
| Passo 1 | O usuário estando logado como administrado, interage com o botão "listar todos os agendamentos".                                                                            |
| Passo 2| Visualiza todos os agendamentos dos clientes                                                                           

### Opções do usuário
| Opção                 | Descrição                                                      |
|-----------------------|----------------------------------------------------------------|
| Listar todos os agendamentos   | Permite o usuário listar todos os agendamentos dos clientes.                   |




#### Relatório de usuário
| Campo                    | Descrição                                                             | Formato |
| ------------------------ | --------------------------------------------------------------------- | ------- |
| Listagem geral de serviços | Isso confirma e garante todo êxito na operação com a visualização da listagem geral de serviços dos clientes| Lista|
