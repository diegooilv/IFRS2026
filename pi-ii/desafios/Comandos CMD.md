# CMD (Windows)

Guia simples para consulta rápida de comandos básicos do **Prompt de Comando (CMD)**.

---

# Sumário

* [Navegação](#navegação)
* [Listagem](#listagem)
* [Diretórios (Pastas)](#diretórios-pastas)
* [Arquivos](#arquivos)
* [Visualização e Edição](#visualização-e-edição)
* [Cópia e Movimentação](#cópia-e-movimentação)
* [Remoção](#remoção)
* [Utilidades](#utilidades)
* [Exemplo de fluxo de trabalho](#exemplo-de-fluxo-de-trabalho)

---

# Navegação

### Mostrar diretório atual

```cmd
cd
```

### Entrar em uma pasta

```cmd
cd nomeDaPasta
```

### Voltar uma pasta

```cmd
cd ..
```

### Ir para a raiz do disco

```cmd
cd \
```

### Trocar de disco

```cmd
D:
```

---

# Listagem

### Listar arquivos e pastas

```cmd
dir
```

### Listar apenas arquivos

```cmd
dir /a-d
```

### Listar apenas pastas

```cmd
dir /ad
```

---

# Diretórios (Pastas)

### Criar pasta

```cmd
mkdir nomeDaPasta
```

ou

```cmd
md nomeDaPasta
```

### Criar várias pastas

```cmd
mkdir pasta1 pasta2 pasta3
```

### Remover pasta vazia

```cmd
rmdir nomeDaPasta
```

ou

```cmd
rd nomeDaPasta
```

### Remover pasta com conteúdo

```cmd
rmdir /s nomeDaPasta
```

---

# Arquivos

### Criar arquivo vazio

```cmd
type nul > arquivo.txt
```

### Criar arquivo com conteúdo

```cmd
echo texto > arquivo.txt
```

### Adicionar texto ao final do arquivo

```cmd
echo texto >> arquivo.txt
```

### Criar vários arquivos

```cmd
type nul > index.html
type nul > style.css
type nul > script.js
```

ou

```cmd
type nul > index.html & type nul > style.css & type nul > script.js
```

---

# Visualização e Edição

### Ver conteúdo do arquivo

```cmd
type arquivo.txt
```

### Abrir arquivo no editor do Windows

```cmd
notepad arquivo.txt
```

### Abrir pasta atual no explorador

```cmd
start .
```

---

# Cópia e Movimentação

### Copiar arquivo

```cmd
copy origem.txt destino.txt
```

### Copiar para outra pasta

```cmd
copy arquivo.txt pasta\
```

### Mover arquivo

```cmd
move arquivo.txt pasta\
```

### Renomear arquivo

```cmd
rename arquivo.txt novo.txt
```

ou

```cmd
ren arquivo.txt novo.txt
```

---

# Remoção

### Apagar arquivo

```cmd
del arquivo.txt
```

### Apagar vários arquivos

```cmd
del *.txt
```

### Apagar todos os arquivos da pasta

```cmd
del *
```

---

# Utilidades

### Limpar tela

```cmd
cls
```

### Histórico de comandos

```cmd
doskey /history
```

### Executar múltiplos comandos

```cmd
comando1 & comando2
```

### Encadear comandos dependentes

```cmd
comando1 && comando2
```

---

# Exemplo de fluxo de trabalho

Criar uma estrutura básica de site:

```cmd
mkdir site
cd site
type nul > index.html
type nul > style.css
type nul > script.js
```

Estrutura criada:

```
site
 ├─ index.html
 ├─ style.css
 └─ script.js
```

---

# Dica

Use **TAB** para autocompletar nomes de arquivos e pastas.

Exemplo:

```
cd pro[TAB]
```

O CMD completa automaticamente para `cd projeto` se existir.
