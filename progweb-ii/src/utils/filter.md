# 📘 `filter_var()` — Validação e Sanitização em PHP

## 📌 Definição

A função `filter_var()` é utilizada para validar e sanitizar dados em PHP. Ela permite aplicar filtros padronizados para verificar se um valor atende a determinados critérios ou para remover caracteres indesejados.

É amplamente utilizada para tratar dados de entrada em aplicações web, como formulários.

---

## ⚙️ Sintaxe

```php
filter_var(valor, filtro);
```

* **valor**: dado a ser validado ou sanitizado
* **filtro**: constante que define o tipo de validação ou limpeza

---

## ✔️ Validação de dados

A validação verifica se o valor está em um formato válido.

### Exemplo — validação de e-mail

```php
$email = "teste@email.com";

if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Email válido";
}
```

---

### Exemplo — validação de inteiro

```php
$numero = 10;

if (filter_var($numero, FILTER_VALIDATE_INT)) {
    echo "Número válido";
}
```

---

## 🧹 Sanitização de dados

A sanitização modifica o valor para remover caracteres inválidos ou perigosos.

### Exemplo — sanitizar e-mail

```php
$email = "teste@@email.com";

$emailLimpo = filter_var($email, FILTER_SANITIZE_EMAIL);

echo $emailLimpo;
```

---

## 🔎 Filtros comuns

| Filtro                       | Tipo        | Descrição                             |
| ---------------------------- | ----------- | ------------------------------------- |
| `FILTER_VALIDATE_EMAIL`      | Validação   | Verifica se é um e-mail válido        |
| `FILTER_VALIDATE_INT`        | Validação   | Verifica se é inteiro                 |
| `FILTER_VALIDATE_URL`        | Validação   | Verifica se é uma URL válida          |
| `FILTER_SANITIZE_EMAIL`      | Sanitização | Remove caracteres inválidos de e-mail |
| `FILTER_SANITIZE_NUMBER_INT` | Sanitização | Remove caracteres não numéricos       |
| `FILTER_SANITIZE_STRING`     | Sanitização | Remove caracteres perigosos           |

---

## ⚠️ Diferença entre validar e sanitizar

| Tipo        | Comportamento               |
| ----------- | --------------------------- |
| Validação   | Retorna `false` se inválido |
| Sanitização | Retorna o valor modificado  |

---