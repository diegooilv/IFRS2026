# 🐳 Docker

## 📑 Navegação

- [🐳 Docker](#-docker)
  - [📑 Navegação](#-navegação)
- [📦 Introdução](#-introdução)
- [⚙️ Como o Docker Funciona](#️-como-o-docker-funciona)
- [🧠 Arquitetura do Docker](#-arquitetura-do-docker)
- [⚙️ Instalação](#️-instalação)
  - [Windows / Mac](#windows--mac)
  - [Linux (Ubuntu)](#linux-ubuntu)
    - [Ativar Docker](#ativar-docker)
    - [Rodar sem sudo](#rodar-sem-sudo)
- [🚀 Passo a Passo (Primeiro Container)](#-passo-a-passo-primeiro-container)
  - [1. Testar instalação](#1-testar-instalação)
  - [2. Rodar Ubuntu interativo](#2-rodar-ubuntu-interativo)
  - [3. Sair do container](#3-sair-do-container)
  - [4. Listar containers](#4-listar-containers)
  - [5. Remover container](#5-remover-container)
- [💻 Comandos Essenciais](#-comandos-essenciais)
    - [Containers](#containers)
    - [Imagens](#imagens)
- [📦 Trabalhando com Imagens](#-trabalhando-com-imagens)
  - [Baixar imagem](#baixar-imagem)
  - [Rodar servidor web](#rodar-servidor-web)
- [📦 Trabalhando com Containers](#-trabalhando-com-containers)
  - [Rodar com nome](#rodar-com-nome)
  - [Executar comando dentro](#executar-comando-dentro)
- [💾 Volumes (Persistência)](#-volumes-persistência)
  - [Problema](#problema)
  - [Solução](#solução)
    - [Criar volume](#criar-volume)
    - [Usar volume](#usar-volume)
- [🌐 Redes](#-redes)
  - [Criar rede](#criar-rede)
  - [Rodar containers conectados](#rodar-containers-conectados)
- [🧾 Dockerfile (Criação de Imagens)](#-dockerfile-criação-de-imagens)
  - [Estrutura básica](#estrutura-básica)
  - [Build](#build)
  - [Rodar](#rodar)
- [🧪 Projeto Real (Node.js)](#-projeto-real-nodejs)
  - [Estrutura](#estrutura)
  - [index.js](#indexjs)
  - [Rodar projeto](#rodar-projeto)
- [🧩 Docker Compose](#-docker-compose)
  - [Problema](#problema-1)
  - [Solução](#solução-1)
  - [Exemplo](#exemplo)
  - [Comandos](#comandos)
- [🚀 Projeto Completo (API + Banco)](#-projeto-completo-api--banco)
  - [docker-compose.yml](#docker-composeyml)
- [✅ Boas Práticas Profissionais](#-boas-práticas-profissionais)
- [🐞 Debug e Logs](#-debug-e-logs)
  - [Ver logs](#ver-logs)
  - [Acompanhar logs](#acompanhar-logs)
  - [Entrar no container](#entrar-no-container)
- [⚠️ Erros Comuns](#️-erros-comuns)
  - [Porta ocupada](#porta-ocupada)
  - [Container para](#container-para)
  - [Permissão negada](#permissão-negada)

---

# 📦 Introdução

Docker é uma plataforma que permite empacotar aplicações em **containers**, garantindo que rodem igual em qualquer ambiente.

👉 Pense como:

> “Uma caixa com tudo que a aplicação precisa”

---

# ⚙️ Como o Docker Funciona

Docker usa:

- **Kernel do sistema operacional**
- **Namespaces** → isolamento
- **Cgroups** → controle de recursos

👉 Diferente de VM:

- VM → sistema operacional completo
- Docker → compartilha o SO (mais leve)

---

# 🧠 Arquitetura do Docker

| Componente    | Função                 |
| ------------- | ---------------------- |
| Docker Engine | Motor principal        |
| Docker CLI    | Interface de comando   |
| Docker Hub    | Repositório de imagens |

---

# ⚙️ Instalação

## Windows / Mac

- Instale o **Docker Desktop**

## Linux (Ubuntu)

```bash
sudo apt update
sudo apt install docker.io
```

### Ativar Docker

```bash
sudo systemctl start docker
sudo systemctl enable docker
```

### Rodar sem sudo

```bash
sudo usermod -aG docker $USER
```

---

# 🚀 Passo a Passo (Primeiro Container)

## 1. Testar instalação

```bash
docker run hello-world
```

👉 Isso:

- Baixa imagem
- Cria container
- Executa

---

## 2. Rodar Ubuntu interativo

```bash
docker run -it ubuntu bash
```

👉 Agora você está dentro de um container!

---

## 3. Sair do container

```bash
exit
```

---

## 4. Listar containers

```bash
docker ps -a
```

---

## 5. Remover container

```bash
docker rm <id>
```

---

# 💻 Comandos Essenciais

### Containers

```bash
docker ps
docker ps -a
docker stop <id>
docker start <id>
docker rm <id>
```

### Imagens

```bash
docker images
docker pull node
docker rmi node
```

---

# 📦 Trabalhando com Imagens

## Baixar imagem

```bash
docker pull nginx
```

## Rodar servidor web

```bash
docker run -d -p 8080:80 nginx
```

👉 Acesse: [http://localhost:8080](http://localhost:8080)

---

# 📦 Trabalhando com Containers

## Rodar com nome

```bash
docker run -d --name meu-nginx nginx
```

## Executar comando dentro

```bash
docker exec -it meu-nginx bash
```

---

# 💾 Volumes (Persistência)

## Problema

Container perde dados ao parar ❌

## Solução

Volumes ✅

### Criar volume

```bash
docker volume create dados
```

### Usar volume

```bash
docker run -v dados:/app node
```

---

# 🌐 Redes

## Criar rede

```bash
docker network create rede-app
```

## Rodar containers conectados

```bash
docker run -d --network rede-app --name app node
docker run -d --network rede-app --name db mongo
```

👉 Agora eles se comunicam via nome (`db`)

---

# 🧾 Dockerfile (Criação de Imagens)

## Estrutura básica

```dockerfile
FROM node:18

WORKDIR /app

COPY package.json .

RUN npm install

COPY . .

EXPOSE 3000

CMD ["npm", "start"]
```

---

## Build

```bash
docker build -t meu-app .
```

## Rodar

```bash
docker run -p 3000:3000 meu-app
```

---

# 🧪 Projeto Real (Node.js)

## Estrutura

```
/app
 ├── package.json
 ├── index.js
 └── Dockerfile
```

## index.js

```js
const http = require("http");

http.createServer((req, res) => {
  res.end("Rodando no Docker 🚀");
}).listen(3000);
```

---

## Rodar projeto

```bash
docker build -t node-app .
docker run -p 3000:3000 node-app
```

---

# 🧩 Docker Compose

## Problema

Muitos containers difíceis de gerenciar

## Solução

Docker Compose

---

## Exemplo

```yaml
version: '3'

services:
  app:
    build: .
    ports:
      - "3000:3000"

  db:
    image: mongo
    ports:
      - "27017:27017"
```

---

## Comandos

```bash
docker-compose up
docker-compose down
```

---

# 🚀 Projeto Completo (API + Banco)

## docker-compose.yml

```yaml
version: '3'

services:
  api:
    build: .
    ports:
      - "3000:3000"
    depends_on:
      - mongo

  mongo:
    image: mongo
    volumes:
      - mongo-data:/data/db

volumes:
  mongo-data:
```

---

👉 Agora:

```bash
docker-compose up
```

✔️ API + Banco rodando juntos

---

# ✅ Boas Práticas Profissionais

- Use `.dockerignore`
- Evite `latest`
- Use imagens leves (`alpine`)
- Separe dev/prod
- Use variáveis de ambiente
- Não rode como root
- Cache de camadas no Dockerfile

---

# 🐞 Debug e Logs

## Ver logs

```bash
docker logs <id>
```

## Acompanhar logs

```bash
docker logs -f <id>
```

## Entrar no container

```bash
docker exec -it <id> bash
```

---

# ⚠️ Erros Comuns

## Porta ocupada

```bash
port already allocated
```

✔️ Troque a porta

---

## Container para

✔️ Ver logs:

```bash
docker logs <id>
```

---

## Permissão negada

```bash
sudo usermod -aG docker $USER
```
