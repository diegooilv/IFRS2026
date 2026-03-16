# Git

> "Git é um sistema de controle de versão distribuído (DVCS) usado para rastrear alterações em arquivos e gerenciar histórico de versões."

Ele permite:

- Salvar versões do projeto (commits)
- Criar ramificações (branches)
- Trabalhar em equipe
- Voltar para versões anteriores

---

## 🔹 Estrutura Interna do Git

O Git trabalha com **3 áreas principais**:

1. **Working Directory** → onde você edita os arquivos
2. **Staging Area (Index)** → onde você prepara os arquivos (`git add`)
3. **Repository (.git)** → onde os commits ficam salvos

> "Um commit é um snapshot (registro) do estado do projeto em determinado momento."

Cada commit possui:

- **Hash** → identificador único SHA (ex: `a1b2c3d`)
- **Autor** → quem fez o commit
- **Data** → quando foi feito
- **Mensagem** → descrição do que foi alterado
- **Ponteiro** → referência para o commit anterior

Exemplo de como visualizar um commit:

```bash
git log --oneline
# Saída:
# a1b2c3d (HEAD -> main) Adiciona página de login
# e4f5g6h Corrige bug no formulário
# i7j8k9l Commit inicial
```

---

## Comandos Básicos

```bash
git status
git add <arquivo> ou .
git commit -m "mensagem"
git push
git pull
git fetch
git log
git diff
```

### Explicações e Exemplos

- `git status` → mostra o estado atual (arquivos modificados, staged, untracked)

```bash
git status
# Saída:
# On branch main
# Changes not staged for commit:
#   modified:   index.html
# Untracked files:
#   style.css
```

- `git add` → envia para staging

```bash
git add index.html      # adiciona um arquivo específico
git add .               # adiciona todos os arquivos modificados
```

- `git commit` → cria snapshot

```bash
git commit -m "Adiciona estilização da navbar"
```

- `git push` → envia para repositório remoto

```bash
git push origin main
```

- `git pull` → baixa e faz merge automático

```bash
git pull origin main
```

- `git fetch` → baixa sem aplicar (útil para verificar antes de fazer merge)

```bash
git fetch origin
git log origin/main     # ver o que mudou no remoto
git merge origin/main   # aplicar manualmente
```

- `git diff` → mostra diferenças

```bash
git diff                # diferença entre working directory e staging
git diff --staged       # diferença entre staging e último commit
git diff main feature   # diferença entre duas branches
```

- `git log` → mostra histórico

```bash
git log                 # histórico completo
git log --oneline       # histórico resumido (uma linha por commit)
git log --graph         # histórico com grafo visual de branches
git log --oneline --graph --all  # visão completa e compacta
```

---

## Criar Repositório

```bash
echo "# teste" >> README.md
git init
git add README.md
git commit -m "first commit"
git branch -M main
git remote add origin https://github.com/usuario/repositorio.git
git push -u origin main
```

`-u` define a branch remota como padrão para futuros `push`/`pull`.

Para Gitlab:

```
https://gitlab.com/usuario/repositorio.git 
```

---

## Conectar Repositório Existente

Se já tem código local:

```bash
git remote add origin https://github.com/usuario/repositorio.git
git branch -M main
git push -u origin main
```

Se quiser baixar um repositório já existente:

```bash
git clone https://github.com/usuario/repositorio.git
```

Clonar em uma pasta específica:

```bash
git clone https://github.com/usuario/repositorio.git minha-pasta
```

---

## Branches

> "Uma branch é um ponteiro móvel para um commit específico."

Branches são ramos do projeto. A principal geralmente é:

- `main`
- `master` (antigo padrão)

### Criar nova branch

```bash
git checkout -b nova-feature
# ou (forma moderna)
git switch -c nova-feature
```

### Listar branches

```bash
git branch          # lista branches locais
git branch -a       # lista branches locais e remotas
```

### Trocar de branch

```bash
git checkout main
# ou
git switch main
```

### Deletar branch

```bash
git branch -d nova-feature          # deleta local (apenas se já foi mergeada)
git branch -D nova-feature          # força a deleção local
git push origin --delete nova-feature  # deleta branch remota
```

### Renomear branch

```bash
git branch -m nome-antigo nome-novo
```

---

## Conflitos

> "Duas branches modificam a mesma parte do código e o Git não consegue decidir automaticamente qual manter."

Conflito acontece quando duas branches alteram as mesmas linhas de um arquivo.

### Exemplo de conflito

```js
<<<<<<< HEAD
console.log("main")
=======
console.log("feature")
>>>>>>> feature
```

- `<<<<<<< HEAD` → código da branch atual
- `=======` → separador
- `>>>>>>> feature` → código da branch que está sendo mergeada

### Como resolver

Editar o arquivo manualmente, escolhendo o código correto:

```js
console.log("main e feature combinados")
```

Adicionar o arquivo resolvido:

```bash
git add arquivo.js
```

Finalizar com commit:

```bash
git commit -m "Resolve conflito no arquivo.js"
```

> **Dica:** Use `git status` durante o conflito para ver quais arquivos precisam ser resolvidos.

---

## Git Stash

> "Git stash salva mudanças não commitadas para serem aplicadas posteriormente."

Serve para guardar alterações temporárias sem fazer commit.

### Comandos principais

```bash
git stash                   # salva as mudanças atuais
git stash list              # lista todos os stashes guardados
git stash pop               # aplica o último stash e o remove da lista
git stash apply             # aplica o último stash mas mantém na lista
git stash drop              # remove o último stash sem aplicar
git stash clear             # limpa todos os stashes
```

### Exemplo de uso

```bash
# Você está trabalhando em algo, mas precisa trocar de branch urgente
git stash                       # guarda as alterações atuais
git switch main                 # troca para a branch main
# ... faz o que precisa ...
git switch nova-feature         # volta para a branch original
git stash pop                   # recupera as alterações guardadas
```

### Stash com mensagem (mais organizado)

```bash
git stash push -m "WIP: formulário de cadastro"
git stash list
# Saída:
# stash@{0}: On nova-feature: WIP: formulário de cadastro
```

**Obs:** Stash **não resolve conflitos**, apenas guarda alterações. É mais funcional quando se trabalha sozinho, mas não exclusivo.

---

## Junções

### Merge

> "Merge combina o histórico de duas branches criando um commit de junção (merge commit)."

Mantém todo o histórico. Ideal para preservar o contexto de quando as branches divergiram.

```bash
# Estando na branch main, fazer merge da feature:
git checkout main
git merge nova-feature
```

---

### Rebase

> "Rebase reaplica os commits de uma branch sobre outra, reescrevendo o histórico."

Cria novos commits equivalentes. Deixa o histórico mais linear e limpo.

```bash
# Estando na branch nova-feature, fazer rebase sobre main:
git checkout nova-feature
git rebase main
```

---

### Cherry-pick

> "Cherry-pick aplica um commit específico de outra branch na branch atual."

Cria um novo commit com as mesmas alterações. Útil quando você precisa de apenas um commit específico de outra branch.

```bash
# Copiar um commit específico para a branch atual:
git cherry-pick a1b2c3d
```

Exemplo prático:

```bash
# Ver o log da outra branch para encontrar o hash do commit desejado:
git log --oneline nova-feature
# Saída:
# c3d4e5f Corrige bug crítico no login
# a1b2c3d Adiciona validação de email
# x9y8z7w Refatora componente

# Aplicar apenas o commit de correção de bug:
git checkout main
git cherry-pick c3d4e5f
```

> **Obs:** Se houver conflito durante o cherry-pick, resolva da mesma forma que um conflito de merge.

Exemplo visual:
![Exemplo Git](./img/Exemplos%20Git.png)
Gerado por IA

---

**Obs: Textos entre aspas foram copiados da internet!**
