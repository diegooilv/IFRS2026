# 🧠 Guia de Git e GitHub

Um guia definitivo para você sair do zero e dominar versionamento com Git e GitHub 🚀

---

## 📚 Sumário

- [🧠 Guia de Git e GitHub](#-guia-de-git-e-github)
  - [📚 Sumário](#-sumário)
  - [📌 Introdução](#-introdução)
    - [🔹 O que é Git?](#-o-que-é-git)
    - [🔹 O que é GitHub?](#-o-que-é-github)
    - [🔹 Diferença entre Git e GitHub](#-diferença-entre-git-e-github)
    - [🔹 Para que servem?](#-para-que-servem)
  - [⚙️ Instalação](#️-instalação)
    - [🔹 Git](#-git)
    - [🔹 GitHub Desktop](#-github-desktop)
  - [🧠 Conceitos Fundamentais](#-conceitos-fundamentais)
  - [💻 Configuração Inicial do Git](#-configuração-inicial-do-git)
  - [🚀 Primeiros Passos com Git](#-primeiros-passos-com-git)
    - [🔹 Criar repositório](#-criar-repositório)
    - [🔹 Adicionar arquivos](#-adicionar-arquivos)
    - [🔹 Commit](#-commit)
    - [🔹 Status](#-status)
    - [🔹 Histórico](#-histórico)
  - [🔄 Trabalhando com Repositórios Remotos](#-trabalhando-com-repositórios-remotos)
    - [🔹 Conectar repositório](#-conectar-repositório)
    - [🔹 Enviar código](#-enviar-código)
    - [🔹 Atualizar código](#-atualizar-código)
    - [🔹 Clonar repositório](#-clonar-repositório)
  - [🌿 Branches e Merge](#-branches-e-merge)
    - [🔹 Criar branch](#-criar-branch)
    - [🔹 Trocar branch](#-trocar-branch)
    - [🔹 Merge](#-merge)
    - [💡 Boas práticas](#-boas-práticas)
  - [⚠️ Resolução de Conflitos](#️-resolução-de-conflitos)
    - [🔹 O que é?](#-o-que-é)
    - [🔹 Exemplo](#-exemplo)
    - [🔹 Como resolver](#-como-resolver)
  - [🖥️ GitHub (Interface Web)](#️-github-interface-web)
    - [🔹 Funcionalidades](#-funcionalidades)
  - [🧰 GitHub Desktop](#-github-desktop-1)
    - [🔹 O que é?](#-o-que-é-1)
    - [🔹 Como instalar](#-como-instalar)
    - [🔹 Funcionalidades](#-funcionalidades-1)
    - [🔹 Fluxo básico](#-fluxo-básico)
  - [📊 Boas Práticas](#-boas-práticas-1)
    - [💡 Commits](#-commits)
    - [💡 Organização](#-organização)
    - [💡 Padrões comuns](#-padrões-comuns)
  - [🧪 Fluxo de Trabalho (Workflow)](#-fluxo-de-trabalho-workflow)
    - [🔹 Exemplo completo](#-exemplo-completo)
    - [🔹 No GitHub](#-no-github)
  - [🔗 Links Úteis](#-links-úteis)
  - [🧾 Conclusão](#-conclusão)
    - [🧠 Recap](#-recap)

---

## 📌 Introdução

### 🔹 O que é Git?

Git é um **sistema de controle de versão distribuído** que permite rastrear mudanças no código ao longo do tempo.

### 🔹 O que é GitHub?

GitHub é uma **plataforma online** que hospeda repositórios Git e facilita colaboração.

### 🔹 Diferença entre Git e GitHub

| Git | GitHub |
|-----|--------|
| Ferramenta local | Plataforma online |
| Controle de versão | Hospedagem e colaboração |
| Funciona offline | Requer internet |

### 🔹 Para que servem?

- Versionar código
- Trabalhar em equipe
- Manter histórico de alterações

---

## ⚙️ Instalação

### 🔹 Git

- Windows: <https://git-scm.com/download/win>  
- Linux:

```bash
sudo apt install git
````

- Mac:

```bash
brew install git
```

### 🔹 GitHub Desktop

- Download: [https://desktop.github.com/](https://desktop.github.com/)

---

## 🧠 Conceitos Fundamentais

| Conceito          | Explicação                        |
| ----------------- | --------------------------------- |
| Repositório       | Pasta versionada                  |
| Commit            | Registro de mudança               |
| Branch            | Linha paralela de desenvolvimento |
| Merge             | União de branches                 |
| Clone             | Copiar repositório                |
| Push              | Enviar alterações                 |
| Pull              | Atualizar código                  |
| Staging Area      | Área de preparação                |
| Working Directory | Arquivos locais                   |

---

## 💻 Configuração Inicial do Git

```bash
git config --global user.name "Seu Nome"
git config --global user.email "seu@email.com"
```

Verificar:

```bash
git config --list
```

---

## 🚀 Primeiros Passos com Git

### 🔹 Criar repositório

```bash
git init
```

### 🔹 Adicionar arquivos

```bash
git add .
```

### 🔹 Commit

```bash
git commit -m "Primeiro commit"
```

### 🔹 Status

```bash
git status
```

### 🔹 Histórico

```bash
git log
```

---

## 🔄 Trabalhando com Repositórios Remotos

### 🔹 Conectar repositório

```bash
git remote add origin https://github.com/user/repo.git
```

### 🔹 Enviar código

```bash
git push -u origin main
```

### 🔹 Atualizar código

```bash
git pull
```

### 🔹 Clonar repositório

```bash
git clone https://github.com/user/repo.git
```

---

## 🌿 Branches e Merge

### 🔹 Criar branch

```bash
git branch nova-feature
```

### 🔹 Trocar branch

```bash
git checkout nova-feature
```

Ou:

```bash
git switch nova-feature
```

### 🔹 Merge

```bash
git checkout main
git merge nova-feature
```

### 💡 Boas práticas

- Use nomes claros (`feature/login`)
- Nunca trabalhe direto na `main`

---

## ⚠️ Resolução de Conflitos

### 🔹 O que é?

Quando duas alterações entram em conflito no mesmo arquivo.

### 🔹 Exemplo

```bash
<<<<<<< HEAD
Código atual
=======
Código novo
>>>>>>> branch
```

### 🔹 Como resolver

1. Editar manualmente
2. Escolher versão correta
3. Commitar novamente

---

## 🖥️ GitHub (Interface Web)

### 🔹 Funcionalidades

- 📁 Criar repositórios
- 🐛 Issues → tarefas/problemas
- 🔀 Pull Requests → revisão de código
- 📊 Projects → organização (Kanban)
- 📄 README → documentação

---

## 🧰 GitHub Desktop

### 🔹 O que é?

Interface gráfica para usar Git sem terminal.

### 🔹 Como instalar

- [https://desktop.github.com/](https://desktop.github.com/)

### 🔹 Funcionalidades

- Clonar repositório
- Fazer commits
- Push/Pull
- Visualizar alterações

### 🔹 Fluxo básico

1. Clonar repositório
2. Editar arquivos
3. Commit
4. Push

---

## 📊 Boas Práticas

### 💡 Commits

- Use mensagens claras:

```bash
git commit -m "feat: adiciona login"
```

### 💡 Organização

- Separe por branches
- Evite commits gigantes

### 💡 Padrões comuns

| Tipo | Uso                 |
| ---- | ------------------- |
| feat | nova funcionalidade |
| fix  | correção            |
| docs | documentação        |

---

## 🧪 Fluxo de Trabalho (Workflow)

### 🔹 Exemplo completo

```bash
# Clonar
git clone repo.git

# Criar branch
git checkout -b feature/login

# Alterar arquivos
git add .
git commit -m "feat: tela de login"

# Enviar
git push origin feature/login
```

### 🔹 No GitHub

1. Criar Pull Request
2. Revisar
3. Merge

---

## 🔗 Links Úteis

- Git Docs: [https://git-scm.com/docs](https://git-scm.com/docs)
- GitHub Docs: [https://docs.github.com/](https://docs.github.com/)
- Git Download: [https://git-scm.com/](https://git-scm.com/)
- GitHub Desktop: [https://desktop.github.com/](https://desktop.github.com/)

---

## 🧾 Conclusão

Git e GitHub são **essenciais para qualquer desenvolvedor**.

### 🧠 Recap

- Git = controle de versão
- GitHub = colaboração online
- Branches = organização
- Commits = histórico
