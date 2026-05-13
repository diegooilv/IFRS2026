# Aula de Cadastros

Projeto simples de cadastro de comidas e bebidas utilizando atividades no Android com Java.
Os dados são enviados entre telas utilizando `Intent` e exibidos na `MainActivity`.

---

# Estrutura do Projeto

* `MainActivity` → Tela principal que recebe e exibe os dados cadastrados.
* `Comida` → Tela de cadastro de comidas.
* `Bebida` → Tela de cadastro de bebidas.

---

# MainActivity

Responsável por:

* Receber os dados enviados pelas outras telas.
* Mostrar as informações cadastradas.
* Navegar entre as telas de cadastro.

```java
public class MainActivity extends AppCompatActivity {

    String infos = "";
    TextView info;

    @Override
    protected void onCreate(Bundle savedInstanceState) {

        infos = getIntent().getStringExtra("infos");
        infos = infos != null ? infos : "";

        // [...]

        info = findViewById(R.id.infos);
        info.setText(this.infos);
    }

    public void telaBebida(View view) {
        Intent intent = new Intent(this, Bebida.class);
        startActivity(intent);
    }

    public void telaComida(View view) {
        Intent intent = new Intent(this, Comida.class);
        startActivity(intent);
    }
}
```

---

# Cadastro de Comida

Tela responsável pelo cadastro de comidas.

## Campos utilizados

* Nome
* Quantidade
* Preço
* Tipo

## Funcionamento

Ao clicar no botão de salvar:

1. Os dados dos `EditText` são capturados.
2. Uma `String` formatada é criada.
3. Os dados são enviados para a `MainActivity` utilizando `Intent`.

```java
public class Comida extends AppCompatActivity {

    EditText nome;
    EditText quantidade;
    EditText preco;
    EditText tipo;

    @Override
    protected void onCreate(Bundle savedInstanceState) {

        // [...]

        this.nome = findViewById(R.id.nome);
        this.quantidade = findViewById(R.id.quantidade);
        this.preco = findViewById(R.id.preco);
        this.tipo = findViewById(R.id.tipo);
    }

    public void salvar(View view) {

        String texto = "COMIDA\n\n" +
                "Nome: " + nome.getText().toString() +
                "\nQuantidade: " + quantidade.getText().toString() + " kg" +
                "\nPreço: R$ " + preco.getText().toString() +
                "\nTipo: " + tipo.getText().toString();

        Intent intent = new Intent(this, MainActivity.class);
        intent.putExtra("infos", texto);

        startActivity(intent);
        finish();
    }
}
```

---

# Cadastro de Bebida

Tela responsável pelo cadastro de bebidas.

## Campos utilizados

* Marca
* Quantidade
* Preço
* Tipo

## Funcionamento

Ao salvar:

1. Os dados são capturados dos campos.
2. Uma `String` é formatada.
3. As informações são enviadas para a tela principal.

```java
public class Bebida extends AppCompatActivity {

    EditText marca;
    EditText quantidade;
    EditText preco;
    EditText tipo;

    @Override
    protected void onCreate(Bundle savedInstanceState) {

        // [...]

        this.marca = findViewById(R.id.marca);
        this.quantidade = findViewById(R.id.quantidade);
        this.preco = findViewById(R.id.preco);
        this.tipo = findViewById(R.id.tipo);
    }

    public void salvar(View view) {

        String texto = "BEBIDA\n\n" +
                "Marca: " + marca.getText().toString() +
                "\nQuantidade: " + quantidade.getText().toString() + " ml" +
                "\nPreço: R$ " + preco.getText().toString() +
                "\nTipo: " + tipo.getText().toString();

        Intent intent = new Intent(this, MainActivity.class);
        intent.putExtra("infos", texto);

        startActivity(intent);
        finish();
    }
}
```

---

# Conceitos Utilizados

## `Intent`

Utilizada para trocar de tela e enviar dados entre atividades.

```java
Intent intent = new Intent(this, MainActivity.class);
```

---

## `putExtra()`

Envia informações para outra atividade.

```java
intent.putExtra("infos", texto);
```

---

## `getStringExtra()`

Recupera os dados enviados pela `Intent`.

```java
getIntent().getStringExtra("infos");
```

---

## `finish()`

Fecha a atividade atual e remove ela da pilha.

```java
finish();
```

---

Baixe: [.zip](./zip/app1305.zip)
