# BarberBooker
#### Monitor: João Gabriel Alves de Souza
#### Integrantes: Daniel Reis Aruda Sales, Eliézer Alencar Moreira, João Victor Ribeiro Santos, Matheus Moretti Cabral, Murilo Rodrigues Perira. 

---
## Descrição: 

O projeto "BarberBooker" é uma plataforma online projetada para simplificar o agendamento de horários em barbearias. Com o BarberBooker, os clientes têm a conveniência de agendar seus cortes de cabelo, barbas e outros serviços de barbearia com apenas alguns cliques, eliminando a necessidade de telefonemas ou visitas pessoais à barbearia

---

### Definindo os requisitos funcionais do projeto:

---

 - RF01 - Cadastar usuário. [João Victor](https://github.com/Carecovisk) Revisado por Murilo Rodrigues 
 - RF02 - Fazer login do usuário. [Murilo Rodrigues](https://github.com/murilortu) Revisado por João Victor
 - RF03 - Agendar. [Eliézer Alencar](https://github.com/Liezy) Revisado por Daniel Reis 
 - RF04 - Listar agendamentos do usuário. [Daniel Reis](https://github.com/Danielpyreis) Revisado por Eliézer Alencar
 - RF05 - Listar todos os agendamentos. [Moretti](https://github.com/MMorettiC) Revisado por Eliézer Alencar

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