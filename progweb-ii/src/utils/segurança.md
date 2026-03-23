# 📘 Boas Práticas de Segurança em PHP

## 📌 Visão geral

Segurança em aplicações PHP envolve a proteção contra acessos não autorizados, vazamento de dados e execução de código malicioso. A adoção de boas práticas reduz significativamente vulnerabilidades comuns em aplicações web.

---

## 🔐 Validação e sanitização de dados

Dados de entrada nunca devem ser considerados confiáveis.

### Validação

Garante que o dado está no formato esperado:

```php
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    // válido
}
```

### Sanitização

Remove ou ajusta dados potencialmente perigosos:

```php
$email = filter_var($email, FILTER_SANITIZE_EMAIL);
```

---

## 🛡️ Prevenção de SQL Injection

Nunca concatenar dados diretamente em queries.

### ❌ Vulnerável

```php
$query = "SELECT * FROM users WHERE email = '$email'";
```

### ✔️ Seguro (Prepared Statements)

```php
$stmt = $pdo->prepare("SELECT * FROM users WHERE email = ?");
$stmt->execute([$email]);
```

---

## 🔒 Proteção contra XSS (Cross-Site Scripting)

Evitar a execução de scripts injetados no HTML.

```php
echo htmlspecialchars($input, ENT_QUOTES, 'UTF-8');
```

---

## 🔑 Hash de senhas

Nunca armazenar senhas em texto puro.

```php
$hash = password_hash($senha, PASSWORD_DEFAULT);
```

Verificação:

```php
password_verify($senha, $hash);
```

---

## 🍪 Segurança em Sessions

* Utilizar `session_start()` corretamente
* Regenerar o ID da sessão:

```php
session_regenerate_id(true);
```

* Configurar cookies seguros:

```php
session_set_cookie_params([
    'httponly' => true,
    'secure' => true
]);
```

---

## 🌍 Uso de HTTPS

Todo tráfego deve ser criptografado.

* Evita interceptação de dados
* Protege sessões e credenciais

---

## 🧾 Controle de erros

Erros não devem ser exibidos em produção.

```php
ini_set('display_errors', 0);
ini_set('log_errors', 1);
```

---

## 📂 Upload de arquivos

Validar arquivos enviados:

* Tipo (MIME)
* Extensão
* Tamanho

Exemplo básico:

```php
if ($_FILES['arquivo']['type'] !== 'image/png') {
    die("Arquivo inválido");
}
```

---

## 🚫 Inclusão de arquivos

Evitar inclusão dinâmica sem validação:

```php
include($_GET['page']); // perigoso
```

Validar ou usar whitelist:

```php
$pages = ['home', 'about'];
if (in_array($_GET['page'], $pages)) {
    include($_GET['page'] . '.php');
}
```
