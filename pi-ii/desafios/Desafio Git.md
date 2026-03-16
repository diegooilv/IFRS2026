# Lista de Exercícios — Git

---

## Parte 1 — Preparação do ambiente

1) Crie uma conta no GitHub (caso ainda não tenha).

2) Configure o Git no seu computador:

```bash
git config --global user.name "Seu Nome"
git config --global user.email "seu@email.com"
```

3) Verifique se a configuração foi aplicada:

```bash
git config --list
```

4) Crie um novo repositório no GitHub chamado **git-exercicios** e deixe-o **privado**.

---

## Parte 2 — Clone e primeiro commit

1) Clone o repositório criado:

```bash
git clone URL_DO_REPOSITORIO
```

2) Entre na pasta do repositório:

```bash
cd git-exercicios
```

3) Crie um arquivo chamado **introducao.txt**.

Conteúdo sugerido:

```txt
Meu primeiro repositório Git
Disciplina de Informática
```

4) Verifique o status:

```bash
git status
```

**Pergunta:** o arquivo aparece como *untracked* ou *tracked*?

**Resposta:**

---

5) Adicione o arquivo ao stage:

```bash
git add introducao.txt
```

6) Faça o commit:

```bash
git commit -m "Primeiro commit do repositório"
```

7) Envie para o GitHub:

```bash
git push
```

8) Verifique no GitHub se o arquivo apareceu.

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

3) Faça um commit utilizando a opção `-a`.

```bash
git commit -am "Atualiza introducao.txt"
```

4) Envie as mudanças ao repositório remoto.

```bash
git push
```

5) Verifique o histórico:

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

2) Faça checkout desse commit:

```bash
git checkout ID_DO_COMMIT
```

3) Verifique o conteúdo do arquivo:

```bash
cat introducao.txt
```

**Perguntas:**

- O arquivo tem o mesmo conteúdo da versão atual?
	- **Resposta:**
- O que aconteceu com as linhas adicionadas depois?
	- **Resposta:**

---

4) Volte para a branch principal:

```bash
git checkout main
```

5) Use o comando:

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

2) Mude para essa branch:

```bash
git checkout feature-perfil
```

3) Crie um arquivo chamado **perfil.txt** com o conteúdo:

```txt
Nome:
Curso:
Instituição:
```

4) Faça commit das alterações.

```bash
git add perfil.txt
git commit -m "Adiciona perfil"
```

5) Envie a branch para o GitHub:

```bash
git push -u origin feature-perfil
```

6) Liste as branches existentes:

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

2) Faça o merge da branch criada:

```bash
git merge feature-perfil
```

3) Verifique se o arquivo **perfil.txt** agora existe na branch principal.

4) Faça push para atualizar o repositório remoto:

```bash
git push
```

---

## Parte 7 — Criando múltiplos commits

1) Crie três novos arquivos:

- **index.html**
- **style.css**
- **script.js**

2) Faça um commit separado para cada arquivo.

3) Verifique o histórico:

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

2) Dentro dela, crie o arquivo **login.html** e faça commit.

3) Volte para a branch principal:

```bash
git checkout main
```

4) Crie um arquivo chamado **sobre.html** e faça commit.

5) Faça merge da branch **feature-login**:

```bash
git merge feature-login
```

6) Envie todas as mudanças ao GitHub:

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

3) Faça commit da alteração.

4) Compare dois commits usando:

```bash
git diff ID1 ID2
```

---

## Parte 10 — Exercício de reorganização

1) Crie uma branch chamada **experimentos**:

```bash
git checkout -b experimentos
```

2) Crie dois arquivos:

- **teste1.txt**
- **teste2.txt**

3) Faça commit.

4) Volte para a branch principal:

```bash
git checkout main
```

5) Liste todas as branches:

```bash
git branch
```

6) Faça merge da branch **experimentos**:

```bash
git merge experimentos
```

7) Apague a branch **experimentos**:

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