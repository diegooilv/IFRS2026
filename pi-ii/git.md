# Git

---

## Fluxo mais simples de **envio do repositório local ao remoto**

```
git add .                  # adiciona todos os arquivos modificados
ou
git add nome-arquivo.ext   # adiciona arquivo específico

git commit -m "feat: new feature..."
git push
```

📌 Observação:

* `git add` envia alterações para a **staging area**
* `git commit` cria um snapshot
* `git push` envia para o repositório remoto

---

## Fluxo mais simples de **recebimento de alterações do repositório remoto para o local**

```
git pull
```

📌 O `git pull` é basicamente:

```
git fetch + git merge
```

---

## Em caso de erro (alterações locais impedindo pull)

```
git stash push -m "mensagem"
git pull
git stash pop
```

📌 Fluxo:

* `stash` salva alterações temporariamente
* `pull` atualiza o projeto
* `stash pop` reaplica suas alterações

---

## Conectar o repositório local ao remoto

```
git init
git remote add origin https://github.com/usuario/repositorio.git
```

📌 `origin` é o nome padrão do repositório remoto
- Exemplo comum usando **GitHub**

---

## Para verificar remoto configurado

```
git remote -v
```

Mostra URLs de:

* fetch (baixar)
* push (enviar)

---

## Primeiro commit (primeiro envio)

```
git add .
git commit -m "mensagem"
git push -u origin main
```

📌 `-u` define a branch remota como padrão (tracking)

Depois disso:

```
git push
git pull
```

funcionam normalmente.

---

## Trabalhar com várias branches

Listar todas (locais + remotas)

```
git branch -a
```

---

## Troca de branch

```
git switch nome-da-branch
```

(forma moderna — substitui `checkout`)

---

## Criar branch

```
git branch nova-branch
```

---

## Criar + trocar

```
git switch -c nova-branch
```

---

## Atualizar branch atual

```
git pull     # baixar alterações
git push     # enviar alterações
```

(Executar dentro da branch desejada)

---

## Deletar branch local

```
git branch -d nome-da-branch
```

Se não foi mergeada:

```
git branch -D nome-da-branch
```

---

## Deletar branch remota

```
git push origin --delete nome-da-branch
```

---

# 📘 Dicionário

**Mergeada**: Unida a outra branch

**Branch**: Ramificação paralela do projeto

**Pull**: Baixar e integrar alterações

**Push**: Enviar alterações ao remoto

**Commit**: Registro permanente de alterações

**Stash**: Armazenamento temporário de alterações

**Origin**: Nome padrão do repositório remoto
