# 🐳 Template Docker

## 📑 Navegação

* [Dockerfile](#-dockerfile)
* [.dockerignore](#-dockerignore)
* [docker-compose.yml](#-docker-composeyml)
* [Estrutura do Projeto](#-estrutura-do-projeto)
* [Fluxo Completo](#-fluxo-completo)

---

# 📁 Estrutura do Projeto

```
/meu-projeto
 ├── Dockerfile
 ├── docker-compose.yml
 ├── .dockerignore
 ├── package.json
 ├── package-lock.json
 └── src/
```

---

# 🧾 Dockerfile

## 📌 Template Completo

```dockerfile
# Imagem base (ambiente inicial)
FROM node:18-alpine

# Define diretório dentro do container
WORKDIR /app

# Copia apenas arquivos de dependência primeiro (cache otimizado)
COPY package*.json ./

# Instala dependências
RUN npm install

# Copia o restante do projeto
COPY . .

# Expõe a porta usada pela aplicação
EXPOSE 3000

# Comando que inicia a aplicação
CMD ["npm", "start"]
```

---

## 🧠 Explicação linha por linha

### `FROM node:18-alpine`

* Define a imagem base
* `alpine` = versão leve do Linux

---

### `WORKDIR /app`

* Cria e define o diretório padrão dentro do container
* Tudo acontece dentro de `/app`

---

### `COPY package*.json ./`

* Copia apenas arquivos de dependência
* Isso melhora o cache (não reinstala tudo sempre)

---

### `RUN npm install`

* Executa comando dentro do container
* Instala dependências

---

### `COPY . .`

* Copia todo o projeto para dentro do container

---

### `EXPOSE 3000`

* Documenta a porta usada
* Não abre a porta automaticamente (só informativo)

---

### `CMD ["npm", "start"]`

* Comando executado ao iniciar o container
* Só pode ter um `CMD`

---

# 🚫 .dockerignore

## 📌 Template

```
node_modules
npm-debug.log
Dockerfile
.dockerignore
.git
.gitignore
.env
```

---

## 🧠 Explicação

### Por que usar?

* Evita copiar arquivos desnecessários
* Deixa build mais rápido
* Evita problemas de segurança

---

### Exemplos importantes

| Arquivo      | Motivo                          |
| ------------ | ------------------------------- |
| node_modules | Reinstalado dentro do container |
| .env         | Segurança                       |
| .git         | Não necessário                  |

---

# 🧩 docker-compose.yml

## 📌 Template Completo

```yaml
version: '3.9'

services:
  app:
    build: .
    container_name: meu-app

    ports:
      - "3000:3000"

    volumes:
      - .:/app

    environment:
      - NODE_ENV=development

    depends_on:
      - db

  db:
    image: mongo:6
    container_name: meu-mongo

    ports:
      - "27017:27017"

    volumes:
      - mongo-data:/data/db

volumes:
  mongo-data:
```

---

## 🧠 Explicação linha por linha

---

### `version: '3.9'`

* Versão do Docker Compose

---

## 🔹 services

Define os containers

---

### `app:`

Nome do serviço (container da aplicação)

---

### `build: .`

* Usa o Dockerfile da pasta atual

---

### `container_name: meu-app`

* Nome fixo do container

---

### `ports:`

```yaml
- "3000:3000"
```

* Porta do PC → porta do container

---

### `volumes:`

```yaml
- .:/app
```

* Sincroniza arquivos locais com container
* Muito usado em desenvolvimento

---

### `environment:`

```yaml
- NODE_ENV=development
```

* Variáveis de ambiente

---

### `depends_on:`

```yaml
- db
```

* Garante que o banco inicie antes

---

## 🔹 db (MongoDB)

### `image: mongo:6`

* Usa imagem oficial

---

### `volumes:`

```yaml
- mongo-data:/data/db
```

* Persistência de dados

---

## 🔹 volumes

```yaml
volumes:
  mongo-data:
```

* Cria volume nomeado
* Mantém dados mesmo se container morrer

---

# 🔁 Fluxo Completo

## 🏗️ Build da aplicação

```bash
docker build -t meu-app .
```

---

## ▶️ Rodar container

```bash
docker run -p 3000:3000 meu-app
```

---

## 🚀 Rodar com compose

```bash
docker-compose up
```

---

## 🛑 Parar tudo

```bash
docker-compose down
```

---

# 🧠 Dicas Profissionais

## 🔹 Cache inteligente

Sempre copie `package.json` antes do resto

---

## 🔹 Multi-stage build (avançado)

```dockerfile
FROM node:18 AS build
WORKDIR /app
COPY . .
RUN npm install

FROM node:18-alpine
COPY --from=build /app /app
```

👉 Reduz tamanho da imagem

---

## 🔹 Segurança

* Nunca exponha `.env`
* Use usuário não-root
* Atualize imagens

---

## 🔹 Produção vs Dev

### Dev

```yaml
volumes:
  - .:/app
```

### Prod

* Sem volume
* Build fechado

---

# 🎯 Resumo

| Arquivo            | Função               |
| ------------------ | -------------------- |
| Dockerfile         | Define a imagem      |
| .dockerignore      | Ignora arquivos      |
| docker-compose.yml | Orquestra containers |
