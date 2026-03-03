# 📱 Android

## 📑 Menu de Navegação

- [📱 Android](#-android)
  - [📑 Menu de Navegação](#-menu-de-navegação)
  - [📌 Visão Geral do Android](#-visão-geral-do-android)
  - [🛠 Modos de Edição no Android Studio](#-modos-de-edição-no-android-studio)
  - [➕ Adicionar Elementos na Tela](#-adicionar-elementos-na-tela)
    - [Pelo modo Design](#pelo-modo-design)
    - [Pelo XML](#pelo-xml)
  - [🧩 Principais Elementos de Interface](#-principais-elementos-de-interface)
    - [🔹 TextView (mostrar texto)](#-textview-mostrar-texto)
    - [🔹 Button (botão clicável)](#-button-botão-clicável)
    - [🔹 EditText (campo de digitação)](#-edittext-campo-de-digitação)
    - [🔹 ImageView (imagem)](#-imageview-imagem)
  - [⚙ Propriedades Mais Importantes](#-propriedades-mais-importantes)
    - [🆔 android:id](#-androidid)
    - [📏 layout\_width e layout\_height](#-layout_width-e-layout_height)
    - [📝 text e hint](#-text-e-hint)
  - [🎨 Cores e Estilização](#-cores-e-estilização)
    - [Cor do texto](#cor-do-texto)
    - [Cor de fundo](#cor-de-fundo)
  - [🖼 Imagens no App](#-imagens-no-app)
  - [⚡ Criando Ações no Java](#-criando-ações-no-java)
    - [Exemplo](#exemplo)
  - [🧪 Exemplo Completo Integrado](#-exemplo-completo-integrado)
    - [XML](#xml)
    - [Java](#java)

---

## 📌 Visão Geral do Android

Um aplicativo Android tradicional funciona com duas partes principais:

* 📄 XML → define a aparência da tela
* ☕ Java → define o comportamento da tela

📁 Estrutura básica:

```
res/layout/activity_main.xml
java/.../MainActivity.java
```

---

## 🛠 Modos de Edição no Android Studio

Existem três abas no editor de layout:

* **Design** → modo visual (arrastar e clicar)
* **Code** → modo XML puro
* **Split** → visual + código ao mesmo tempo

Recomendação para aprendizado: usar **Split**.

---

## ➕ Adicionar Elementos na Tela

### Pelo modo Design

Abrir a aba **Palette**.
Arrastar o elemento (Button, TextView, EditText).
Soltar na tela ou na Component Tree.

### Pelo XML

```xml
<Button
    android:layout_width="wrap_content"
    android:layout_height="wrap_content" />
```

---

## 🧩 Principais Elementos de Interface

### 🔹 TextView (mostrar texto)

```xml
<TextView
    android:id="@+id/txtTitulo"
    android:layout_width="wrap_content"
    android:layout_height="wrap_content"
    android:text="Olá Mundo" />
```

### 🔹 Button (botão clicável)

```xml
<Button
    android:id="@+id/btnEnviar"
    android:layout_width="wrap_content"
    android:layout_height="wrap_content"
    android:text="Enviar" />
```

### 🔹 EditText (campo de digitação)

```xml
<EditText
    android:id="@+id/editNome"
    android:layout_width="match_parent"
    android:layout_height="wrap_content"
    android:hint="Digite seu nome" />
```

### 🔹 ImageView (imagem)

```xml
<ImageView
    android:layout_width="150dp"
    android:layout_height="150dp"
    android:src="@drawable/imagem" />
```

---

## ⚙ Propriedades Mais Importantes

### 🆔 android:id

Permite que o Java encontre o elemento.

```xml
android:id="@+id/btnEnviar"
```

### 📏 layout_width e layout_height

* `match_parent` → ocupa todo o espaço
* `wrap_content` → ocupa apenas o necessário

```xml
android:layout_width="match_parent"
android:layout_height="wrap_content"
```

### 📝 text e hint

```xml
android:text="Enviar"
android:hint="Digite algo"
```

---

## 🎨 Cores e Estilização

### Cor do texto

```xml
android:textColor="#FF0000"
```

### Cor de fundo

```xml
android:backgroundTint="#0000FF"
```

No modo Design, basta pesquisar por **textColor** ou **backgroundTint** no painel Attributes.

---

## 🖼 Imagens no App

Colocar a imagem em:

```
res/drawable
```

Referenciar no XML:

```xml
android:src="@drawable/nome_da_imagem"
```

---

## ⚡ Criando Ações no Java

Passos obrigatórios:

- Dar ID no XML.
- Usar `findViewById`.
- Criar o evento.

### Exemplo

```java
Button botao = findViewById(R.id.btnEnviar);

botao.setOnClickListener(new View.OnClickListener() {
    @Override
    public void onClick(View v) {
        System.out.println("Botão clicado!");
    }
});
```

---

## 🧪 Exemplo Completo Integrado

### XML

```xml
<LinearLayout
    xmlns:android="http://schemas.android.com/apk/res/android"
    android:layout_width="match_parent"
    android:layout_height="match_parent"
    android:orientation="vertical">

    <EditText
        android:id="@+id/editNome"
        android:layout_width="match_parent"
        android:layout_height="wrap_content"
        android:hint="Digite seu nome" />

    <Button
        android:id="@+id/btnMostrar"
        android:layout_width="wrap_content"
        android:layout_height="wrap_content"
        android:text="Mostrar" />

    <TextView
        android:id="@+id/txtResultado"
        android:layout_width="wrap_content"
        android:layout_height="wrap_content" />

</LinearLayout>
```

### Java

```java
EditText editNome = findViewById(R.id.editNome);
Button btnMostrar = findViewById(R.id.btnMostrar);
TextView txtResultado = findViewById(R.id.txtResultado);

btnMostrar.setOnClickListener(new View.OnClickListener() {
    @Override
    public void onClick(View v) {
        String nome = editNome.getText().toString();
        txtResultado.setText("Olá " + nome);
    }
});
```
