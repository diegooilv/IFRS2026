# 🚀 Implementação de Transição entre Activities


## Activity de Origem (`MainActivity.java`)

Nesta etapa, garantimos que o usuário não envie dados vazios e utilizamos um nome de método que descreve a ação.

```java
// Método vinculado ao clique do botão no XML (android:onClick="irParaSegundaTela")
public void irParaSegundaTela(View view) {
    String nomeInserido = this.nome.getText().toString().trim();

    // Validação de campo vazio ou apenas espaços
    if (nomeInserido.isEmpty()) {
        Toast.makeText(this, "Por favor, digite seu nome!", Toast.LENGTH_SHORT).show();
        return;
    }

    Intent intent = new Intent(MainActivity.this, MainActivity2.class);
    intent.putExtra("USER_NAME", nomeInserido);
    
    startActivity(intent);
    
    // Finaliza a activity atual para que o usuário não volte ao formulário ao clicar em "Voltar"
    finish();
}
```

## Activity de Destino (`MainActivity2.java`)

Aqui, recuperamos o dado com segurança e aplicamos a lógica de exibição.

```java
// Dentro do método onCreate
view = findViewById(R.id.tview);

Intent intent = getIntent();
if (intent.hasExtra("USER_NAME")) {
    String nome = intent.getStringExtra("USER_NAME");
    String mensagem = String.format("Olá, %s!\nPatético!", nome);
    view.setText(mensagem);
}
```

---

## 📦 Download

👉 [Baixar APK](dist/App%20Bem%20Vindo.apk)
