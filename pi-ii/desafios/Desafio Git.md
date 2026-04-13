# Lista de Exercícios — Git

---

## Parte 1 — Preparação do ambiente

1) Crie uma conta no GitHub (caso ainda não tenha).

2) Configure o Git no seu computador:

```bash
git config --global user.name "Seu Nome"
git config --global user.email "seu@email.com"
```

1) Verifique se a configuração foi aplicada:

```bash
git config --list
```

1) Crie um novo repositório no GitHub chamado **git-exercicios** e deixe-o **privado**.

---

## Parte 2 — Clone e primeiro commit

1) Clone o repositório criado:

```bash
git clone URL_DO_REPOSITORIO
```

1) Entre na pasta do repositório:

```bash
cd git-exercicios
```

1) Crie um arquivo chamado **introducao.txt**.

Conteúdo sugerido:

```txt
Meu primeiro repositório Git
Disciplina de Informática
```

1) Verifique o status:

```bash
git status
```

**Pergunta:** o arquivo aparece como *untracked* ou *tracked*?

**Resposta:**

---

1) Adicione o arquivo ao stage:

```bash
git add introducao.txt
```

1) Faça o commit:

```bash
git commit -m "Primeiro commit do repositório"
```

1) Envie para o GitHub:

```bash
git push
```

1) Verifique no GitHub se o arquivo apareceu.

---

## Parte 3 — Modificação de arquivos

1) Edite **introducao.txt** e adicione **duas novas linhas**.

2) Verifique o status:

```bash
git status
```

**Pergunta:** qual é o estado do arquivo agora?

**Resposta:**

---

1) Faça um commit utilizando a opção `-a`.

```bash
git commit -am "Atualiza introducao.txt"
```

1) Envie as mudanças ao repositório remoto.

```bash
git push
```

1) Verifique o histórico:

```bash
git log
```

**Perguntas:**

- Quantos commits existem?
  - **Resposta:**
- Qual a mensagem de cada commit?
  - **Resposta:**

---

## Parte 4 — Explorando o histórico

1) Copie o **ID do primeiro commit**.

**Resposta (ID):**

1) Faça checkout desse commit:

```bash
git checkout ID_DO_COMMIT
```

1) Verifique o conteúdo do arquivo:

```bash
cat introducao.txt
```

**Perguntas:**

- O arquivo tem o mesmo conteúdo da versão atual?
  - **Resposta:**
- O que aconteceu com as linhas adicionadas depois?
  - **Resposta:**

---

1) Volte para a branch principal:

```bash
git checkout main
```

1) Use o comando:

```bash
git log --oneline
```

**Pergunta:** o que esse comando mostra?

**Resposta:**

---

## Parte 5 — Criando branches

1) Crie uma nova branch chamada **feature-perfil**:

```bash
git branch feature-perfil
```

1) Mude para essa branch:

```bash
git checkout feature-perfil
```

1) Crie um arquivo chamado **perfil.txt** com o conteúdo:

```txt
Nome:
Curso:
Instituição:
```

1) Faça commit das alterações.

```bash
git add perfil.txt
git commit -m "Adiciona perfil"
```

1) Envie a branch para o GitHub:

```bash
git push -u origin feature-perfil
```

1) Liste as branches existentes:

```bash
git branch
```

**Pergunta:** qual branch está ativa?

**Resposta:**

---

## Parte 6 — Merge de branches

1) Volte para a branch principal:

```bash
git checkout main
```

1) Faça o merge da branch criada:

```bash
git merge feature-perfil
```

1) Verifique se o arquivo **perfil.txt** agora existe na branch principal.

2) Faça push para atualizar o repositório remoto:

```bash
git push
```

---

## Parte 7 — Criando múltiplos commits

1) Crie três novos arquivos:

- **index.html**
- **style.css**
- **script.js**

1) Faça um commit separado para cada arquivo.

2) Verifique o histórico:

```bash
git log --oneline
```

**Pergunta:** quantos commits existem no repositório agora?

**Resposta:**

---

## Parte 8 — Simulação de desenvolvimento em branch

1) Crie uma nova branch chamada **feature-login**:

```bash
git checkout -b feature-login
```

1) Dentro dela, crie o arquivo **login.html** e faça commit.

2) Volte para a branch principal:

```bash
git checkout main
```

1) Crie um arquivo chamado **sobre.html** e faça commit.

2) Faça merge da branch **feature-login**:

```bash
git merge feature-login
```

1) Envie todas as mudanças ao GitHub:

```bash
git push
```

---

## Parte 9 — Explorando diferenças entre versões

1) Edite o arquivo **index.html** adicionando uma linha.

2) Execute:

```bash
git diff
```

**Pergunta:** o que o comando `git diff` mostra?

**Resposta:**

---

1) Faça commit da alteração.

2) Compare dois commits usando:

```bash
git diff ID1 ID2
```

---

## Parte 10 — Exercício de reorganização

1) Crie uma branch chamada **experimentos**:

```bash
git checkout -b experimentos
```

1) Crie dois arquivos:

- **teste1.txt**
- **teste2.txt**

1) Faça commit.

2) Volte para a branch principal:

```bash
git checkout main
```

1) Liste todas as branches:

```bash
git branch
```

1) Faça merge da branch **experimentos**:

```bash
git merge experimentos
```

1) Apague a branch **experimentos**:

```bash
git branch -d experimentos
```

---

## Parte 11 — Investigando o estado do repositório

Execute os comandos abaixo e descreva o que cada um faz:

```bash
git status
git branch
git log
git log --oneline
git diff
```

**Respostas:**

- `git status`:
- `git branch`:
- `git log`:
- `git log --oneline`:
- `git diff`:

---

## Parte 12 — Desafio final

Crie a seguinte estrutura de projeto:

```txt
site/
├─ index.html
├─ css/
│  └─ style.css
└─ js/
  └─ script.js
```

### Tarefas

1) Adicione todos os arquivos ao repositório.

2) Faça um commit inicial.

3) Crie uma branch chamada **feature-layout**.

4) Edite **index.html**.

5) Faça commit.

6) Volte para **main**.

7) Faça merge da branch.

8) Envie tudo para o GitHub.

---

## Perguntas conceituais

- O que é um commit?
  - **Resposta:**
- Qual a diferença entre `git add` e `git commit`?
  - **Resposta:**
- Para que serve o `git push`?
  - **Resposta:**
- Para que serve o `git pull`?
  - **Resposta:**
- O que é uma branch?
  - **Resposta:**
- Por que branches são úteis no desenvolvimento em equipe?
  - **Resposta:**
- O que acontece se duas pessoas modificarem o mesmo arquivo?
  - **Resposta:**

---

## Dica

Durante todos os exercícios, execute frequentemente:

```bash
git status
```

Esse comando mostra o estado atual do repositório e é um dos mais usados no fluxo de trabalho com Git.

---

## Gabarito sugerido (respostas)

### Parte 2

**Pergunta:** o arquivo aparece como *untracked* ou *tracked*?

**Resposta:**
Antes do `git add`, aparece como **untracked**. Depois do `git add`, passa a ficar **tracked** (staged para commit).

### Parte 3

**Pergunta:** qual é o estado do arquivo agora?

**Resposta:**
Após editar o arquivo, ele aparece como **modified** (modificado).

**Perguntas:**

- Quantos commits existem?
  - **Resposta:** nesse ponto, normalmente **2 commits** (o primeiro commit + o commit de atualização).
- Qual a mensagem de cada commit?
  - **Resposta:**
    - `Primeiro commit do repositório`
    - `Atualiza introducao.txt`

### Parte 4

**Resposta (ID):**
Use o hash do primeiro commit exibido em `git log` (ex.: `a1b2c3d...`).

**Perguntas:**

- O arquivo tem o mesmo conteúdo da versão atual?
  - **Resposta:** não.
- O que aconteceu com as linhas adicionadas depois?
  - **Resposta:** elas não aparecem nessa versão antiga, porque ainda não existiam naquele commit.

**Pergunta:** o que esse comando mostra?

**Resposta:**
`git log --oneline` mostra o histórico resumido, com **um commit por linha** (hash curto + mensagem).

### Parte 5

**Pergunta:** qual branch está ativa?

**Resposta:**
A branch com `*` ao lado. Nesse passo, deve ser **feature-perfil**.

### Parte 7

**Pergunta:** quantos commits existem no repositório agora?

**Resposta:**
Depende do seu histórico exato. Seguindo o roteiro básico, você terá pelo menos os commits anteriores + **3 commits novos** (um para `index.html`, um para `style.css` e um para `script.js`).

### Parte 9

**Pergunta:** o que o comando `git diff` mostra?

**Resposta:**
Mostra as diferenças entre o que está no arquivo local e o último commit (o que foi alterado e ainda não foi commitado).

### Parte 11

**Respostas:**

- `git status`: mostra o estado atual do repositório (branch, arquivos modificados, staged e untracked).
- `git branch`: lista as branches locais e indica a branch ativa com `*`.
- `git log`: mostra o histórico detalhado de commits.
- `git log --oneline`: mostra o histórico resumido em uma linha por commit.
- `git diff`: mostra as diferenças ainda não commitadas.

### Perguntas conceituais

- O que é um commit?
  - **Resposta:** é um registro/snapshot das alterações em um ponto no tempo no histórico do Git.
- Qual a diferença entre `git add` e `git commit`?
  - **Resposta:** `git add` prepara alterações para o próximo commit (stage); `git commit` grava essas alterações no histórico.
- Para que serve o `git push`?
  - **Resposta:** envia commits locais para o repositório remoto (ex.: GitHub).
- Para que serve o `git pull`?
  - **Resposta:** baixa e integra alterações do repositório remoto para o local.
- O que é uma branch?
  - **Resposta:** é uma linha de desenvolvimento paralela, usada para trabalhar em mudanças sem afetar a branch principal.
- Por que branches são úteis no desenvolvimento em equipe?
  - **Resposta:** permitem trabalho paralelo, organização por feature/correção e reduzem impacto direto na `main`.
- O que acontece se duas pessoas modificarem o mesmo arquivo?
  - **Resposta:** pode ocorrer conflito de merge, que precisa ser resolvido manualmente antes de concluir a integração.

---

Aviso: Uso de NotebookLM como auxílio.
