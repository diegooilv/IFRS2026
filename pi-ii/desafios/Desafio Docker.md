# Desafio Docker — Etapas

## Etapa inicial obrigatória — Criação do repositório

Antes de iniciar os exercícios:

1. Crie um repositório Git público.
2. Dê ao repositório um nome adequado, por exemplo: docker-compose-git.
3. Crie um arquivo README.md na raiz do projeto com:

- seu nome;
- turma;
- objetivo do repositório;
- descrição breve da atividade.

1. Crie a estrutura inicial de pastas:

- exercicio1
- exercicio2
- exercicio3
- exercicio4
- exercicio5
- exercicio6
- exercicio7
- exercicio8
- exercicio9
- exercicio10
- exercicio11
- exercicio12

1. Faça o primeiro commit e envie para o repositório remoto.

## Exercício 1 — Primeiros comandos no Docker

Na pasta exercicio1, crie um arquivo respostas.md.

Execute os comandos abaixo:

```bash
docker run hello-world
docker ps
docker ps -a
docker images
```

Depois, responda no arquivo:

a) O que aconteceu quando você executou docker run hello-world pela primeira vez?
b) Qual a diferença entre docker ps e docker ps -a?
c) O que o comando docker images mostra?
d) Explique com suas palavras a diferença entre imagem e container.

Faça commit ao final do exercício.

## Exercício 2 — Ciclo de vida de containers

Na pasta exercicio2, crie um arquivo respostas.md.

Teste os seguintes casos com imagens como alpine ou ubuntu:

- executar um container que termina sozinho;
- executar um container em segundo plano com -d;
- parar um container com docker stop;
- remover um container com docker rm;
- executar um container com --rm.

Depois, responda:

a) O comando docker run cria sempre um novo container? Explique.
b) Qual a utilidade da opção --rm?
c) Qual a utilidade da opção -d?
d) O que acontece com o terminal quando o container fica rodando continuamente?

Faça commit ao final do exercício.

## Exercício 3 — Acesso interativo ao container

Na pasta exercicio3, crie um arquivo respostas.md.

Abra um container em modo interativo usando uma imagem Linux.

Dentro do container, execute pelo menos 5 comandos simples, como:

```bash
pwd
ls
cat
echo
whoami
```

Depois, responda:

a) O que significa executar um container em modo interativo?
b) Por que esse modo pode ser útil para depuração?
c) Qual comando ou procedimento você usou para sair do container?

Faça commit ao final do exercício.

## Exercício 4 — Tags e versões de imagens

Na pasta exercicio4, crie um arquivo respostas.md.

Escolha duas imagens oficiais do Docker Hub, como:

- nginx
- mysql
- postgres
- python
- php

Para cada uma:

a) identifique pelo menos duas tags diferentes;
b) explique o que a tag representa;
c) execute ao menos uma imagem usando tag explícita;
d) compare o que muda quando você usa uma tag específica e quando não informa nenhuma tag.

Ao final, escreva um pequeno texto explicando por que usar latest nem sempre é a melhor escolha.

Faça commit ao final do exercício.

## Exercício 5 — Criando sua primeira imagem com Dockerfile

Na pasta exercicio5, crie:

- um Dockerfile
- um arquivo respostas.md

Seu Dockerfile deve:

- usar uma imagem base Linux;
- criar um arquivo de texto dentro da imagem;
- executar um comando que mostre uma mensagem personalizada quando o container iniciar.

Depois:

a) faça o build da imagem;
b) execute a imagem criada;
c) mostre que o container foi criado a partir da sua própria imagem;
d) explique o que significa "fazer o build" de uma imagem.

Faça commit ao final do exercício.

## Exercício 6 — Aplicação web simples em container

Na pasta exercicio6, crie:

- um arquivo index.html
- os arquivos necessários para sua solução
- um arquivo respostas.md

Sua aplicação deve conter:

- um título;
- seu nome;
- uma breve frase sobre a atividade.

Depois, crie uma imagem Docker para servir essa página usando um servidor web, como nginx.

Seu objetivo é conseguir abrir a página no navegador.

Ao final, responda:

- a) Qual porta do container foi usada?
- b) Qual porta da sua máquina foi usada?
- c) O que significa mapear portas entre host e container?
- d) O que acontece se você esquecer de mapear a porta corretamente?

Faça commit ao final do exercício.

## Exercício 7 — Uso de volume

Na pasta exercicio7, monte uma versão da aplicação anterior usando volume.

Você deve demonstrar que:

- o container está rodando;
- o HTML está em uma pasta do seu computador;
- ao alterar o arquivo localmente, a mudança aparece no navegador sem recriar a imagem.

Crie um arquivo respostas.md e explique:

- a) O que é um volume no Docker?
- b) Qual a vantagem de usar volume durante o desenvolvimento?
- c) Em que situação seria melhor copiar arquivos para a imagem em vez de usar volume?

Faça commit ao final do exercício.

## Exercício 8 — Docker Compose com um serviço

Na pasta exercicio8, crie:

- docker-compose.yml
- arquivos da aplicação
- respostas.md

Seu Compose deve subir a aplicação web com:

- 1 serviço;
- mapeamento de porta;
- volume para os arquivos HTML;
- nome de container definido por você.

Depois:

- a) suba o ambiente com Docker Compose;
- b) derrube o ambiente;
- c) explique a diferença entre usar vários comandos docker run e usar Docker Compose;
- d) explique por que o Compose é mais adequado quando o projeto começa a crescer.

Faça commit ao final do exercício.

## Exercício 9 — Docker Compose com dois serviços

Na pasta exercicio9, crie um ambiente com dois containers usando Docker Compose:

- um servidor web ou PHP;
- um banco de dados MySQL ou Postgres.

Não é necessário criar uma aplicação completa de cadastro. O foco é a orquestração.

Requisitos mínimos:

- os dois serviços devem estar no docker-compose.yml;
- o banco deve ter usuário, senha e nome configurados;
- o servidor web deve estar acessível no navegador;
- deve existir pelo menos uma porta mapeada;
- o banco deve usar volume para persistir dados.

Depois, responda em respostas.md:

- a) Por que esse cenário seria ruim de administrar só com docker run?
- b) Qual a função das variáveis de ambiente nesse caso?
- c) Qual a função do volume no banco?
- d) O que seria perdido sem persistência?

Faça commit ao final do exercício.

## Exercício 10 — Comunicação entre serviços

Na pasta exercicio10, reaproveite a ideia do exercício anterior e explique como os serviços se comunicam dentro do Compose.

Crie um arquivo respostas.md respondendo:

- a) Qual nome de serviço pode ser usado para comunicação interna?
- b) Por que, em muitos casos, a aplicação não deve tentar acessar o banco por localhost?
- c) Como a rede criada pelo Compose facilita a integração entre serviços?
- d) Por que separar serviços em containers diferentes é útil para manutenção e organização?

Faça commit ao final do exercício.

## Exercício 11 — Registro de erros e soluções

Na pasta exercicio11, crie um arquivo ERROS_E_SOLUCOES.md.

Registre pelo menos 4 problemas reais que aconteceram durante a atividade, por exemplo:

- porta já em uso;
- nome incorreto de imagem;
- serviço não iniciando;
- volume configurado incorretamente;
- erro de sintaxe no docker-compose.yml;
- container encerrando logo após iniciar.

Para cada problema, descreva:

- o que aconteceu;
- como você percebeu;
- como resolveu.

Faça commit ao final do exercício.

## Exercício 12 — Projeto final integrador

Na pasta exercicio12, organize uma versão final e mais limpa do seu ambiente.

Ela deve conter, no mínimo:

- docker-compose.yml
- arquivos da aplicação
- Dockerfile, caso tenha sido usado
- README.md

O README.md desta pasta deve conter:

- objetivo do ambiente;
- tecnologias usadas;
- instruções para executar;
- instruções para parar;
- explicação do papel de cada serviço;
- explicação de onde foram usados ports, volumes e variáveis de ambiente;
- pelo menos 3 aprendizados obtidos durante a atividade.

Faça commit ao final do exercício.

## Exercício 13 — Ambiente web completo com 3 serviços

Crie, com Docker Compose, um ambiente com os seguintes serviços:

- php ou apache+php
- mysql
- phpmyadmin

Requisitos:

- A aplicação PHP deve estar acessível pelo navegador.
- O phpMyAdmin também deve estar acessível pelo navegador.
- O MySQL deve estar configurado com:
  - nome do banco;
  - usuário;
  - senha;
  - senha de root.
- A aplicação PHP e o phpMyAdmin devem se conectar ao mesmo banco.
- O projeto deve usar pelo menos:
  - uma porta mapeada para a aplicação;
  - uma porta mapeada para o phpMyAdmin;
  - um volume para persistência do banco.

No respostas.md, explique:

- a) Qual a função de cada serviço.
- b) Como os containers conseguem conversar entre si.
- c) Por que faz sentido separar aplicação, banco e ferramenta administrativa em containers diferentes.

## Exercício 14 — Uso de .env no Docker Compose

Refatore o exercício anterior para que os dados sensíveis e variáveis de configuração saiam do docker-compose.yml e passem a ser definidos em um arquivo .env.

O projeto deve usar no mínimo estas variáveis:

- nome do banco;
- usuário do banco;
- senha do banco;
- senha do root;
- porta da aplicação;
- porta do phpMyAdmin.

Depois, responda:

- a) Qual a vantagem de usar .env com Docker Compose?
- b) Quais tipos de informação fazem sentido colocar no .env?
- c) Quais cuidados devem ser tomados ao versionar esse tipo de arquivo em um repositório público?

## Exercício 15 — Persistência real dos dados

Crie um teste prático para demonstrar persistência do banco com volume nomeado.

Você deve:

- subir o ambiente;
- criar uma tabela no banco;
- inserir alguns dados;
- derrubar os containers;
- subir novamente;
- demonstrar que os dados continuam lá.

No respostas.md, explique:

- a) O que aconteceria sem o volume.
- b) Qual a diferença entre persistência no container e persistência fora dele.
- c) Por que persistência é importante em aplicações reais.

## Exercício 16 — Script SQL de inicialização automática

Monte um projeto no qual o MySQL já inicie com um banco minimamente preparado.

Requisitos:

- criar um script .sql com:
  - criação de tabela;
  - inserção de pelo menos 5 registros;
- fazer com que o container do MySQL execute esse script automaticamente na primeira inicialização;
- criar uma página PHP simples que consulte os dados e os mostre na tela.

No respostas.md, explique:

- a) Como o script foi disponibilizado para o container.
- b) Em que momento ele é executado.
- c) Por que esse tipo de estratégia é útil em equipes de desenvolvimento.

## Exercício 17 — Healthcheck e dependência entre serviços

Crie um ambiente Compose em que a aplicação PHP dependa do banco de dados, mas com um cuidado adicional: o ambiente deve considerar que o banco precisa estar pronto para uso, e não apenas “iniciado”.

Requisitos:

- usar depends_on;
- adicionar healthcheck ao banco de dados;
- documentar no README.md como essa estratégia melhora a confiabilidade do ambiente.

No respostas.md, explique:

- a) Por que “container iniciado” não significa necessariamente “serviço pronto”.
- b) Qual problema isso pode causar numa aplicação PHP conectando em MySQL.
- c) O que o healthcheck resolve nesse cenário.

## Exercício 18 — Dois sites PHP no mesmo ambiente Compose

Crie um docker-compose.yml com dois sites PHP diferentes e um único banco MySQL compartilhado.

Exemplo de ideia:

- site1: página de catálogo
- site2: página de área administrativa
- mysql: banco único

Requisitos:

- cada site deve ter sua própria pasta e seu próprio volume de código;
- cada site deve ser acessível em uma porta diferente;
- os dois sites devem conseguir acessar o mesmo banco;
- cada site deve exibir uma mensagem diferente e consultar dados diferentes, se possível.

No respostas.md, explique:

- a) Qual a vantagem de orquestrar múltiplos serviços em um único Compose.
- b) Quais cuidados seriam necessários se os dois sites começassem a crescer muito.
- c) Em que situação real esse tipo de arquitetura poderia aparecer.

## Exercício 19 — Serviço de backup do banco

Adicione ao ambiente um novo serviço responsável por gerar backup do banco de dados.

O backup pode ser simples, por exemplo:

- usar mysqldump;
- salvar o arquivo em uma pasta compartilhada por volume.

Requisitos:

- o Compose deve ter um serviço específico para backup;
- o backup deve ser gravado em uma pasta visível no host;
- o README.md deve explicar como executar esse backup.

No respostas.md, explique:

- a) Por que backup não deve depender apenas do volume do banco.
- b) Qual a diferença entre persistência e backup.
- c) Por que separar o backup em outro serviço pode ser uma boa prática.

## Exercício 20 — Projeto integrador com documentação técnica

Monte uma versão final, mais organizada, contendo:

- aplicação PHP;
- MySQL;
- phpMyAdmin;
- arquivo .env;
- volume de persistência;
- script SQL inicial;
- healthcheck;
- serviço de backup.

Esse exercício deve ser tratado como um pequeno projeto completo.

A pasta exercicio20 deve conter, no mínimo:

- docker-compose.yml
- .env ou .env.example
- pasta da aplicação PHP
- script SQL
- instruções de backup
- README.md

O README.md deve obrigatoriamente conter:

- visão geral do ambiente;
- descrição de cada serviço;
- instruções para subir o ambiente;
- instruções para derrubar o ambiente;
- instruções para recriar o ambiente do zero;
- instruções para acessar a aplicação e o phpMyAdmin;
- explicação sobre volumes, portas, variáveis de ambiente e healthcheck;
- explicação de como fazer backup;
- dificuldades encontradas;
- aprendizados obtidos.

## Requisitos mínimos de Git

O repositório deve demonstrar uso real de Git. Portanto:

- deve haver múltiplos commits;
- os commits devem mostrar a evolução do trabalho;
- não é aceitável entregar um repositório com toda a atividade feita de uma só vez;
- a organização por pastas deve estar correta;
- os arquivos devem estar nomeados de forma clara.

## Entrega

A entrega será feita no Moodle por meio de um único link para o repositório Git público.
