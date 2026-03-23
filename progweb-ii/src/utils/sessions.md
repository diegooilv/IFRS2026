# 📘 PHP Sessions 

## 📌 Definição

Sessions em PHP permitem manter dados de estado do usuário entre múltiplas requisições HTTP. Como o protocolo HTTP é stateless, sessões são utilizadas para associar informações persistentes a um cliente específico durante sua navegação.

Os dados são armazenados no servidor e identificados por um **ID de sessão**, geralmente mantido no cliente via cookie.

---

## ⚙️ Funcionamento

Ao iniciar uma sessão, o PHP:

* Gera ou recupera um identificador único de sessão
* Associa esse identificador a um conjunto de dados no servidor
* Envia o ID ao cliente (normalmente via cookie)
* Utiliza esse ID em requisições subsequentes para recuperar os dados

---

## 🔁 Ciclo de vida da sessão

### Inicialização

```php
session_start();
```

Responsável por criar uma nova sessão ou retomar uma existente. Deve ser executado antes de qualquer saída.

---

### Manipulação de dados

A superglobal `$_SESSION` é utilizada para armazenar e acessar informações:

```php
$_SESSION['usuario'] = 'Diego';
$_SESSION['logado'] = true;
```

```php
echo $_SESSION['usuario'];
```

---

### Verificação de existência

```php
if (isset($_SESSION['usuario'])) {
    // sessão válida
}
```

---

### Remoção de dados

```php
unset($_SESSION['usuario']);
```

---

### Encerramento da sessão

```php
session_destroy();
```

Remove todos os dados associados à sessão no servidor.

---

## 🔐 Exemplo de autenticação

### login.php

```php
session_start();

if ($_POST['usuario'] == 'admin' && $_POST['senha'] == '123') {
    $_SESSION['usuario'] = 'admin';
    header("Location: dashboard.php");
    exit;
}

echo "Login inválido";
```

---

### dashboard.php

```php
session_start();

if (!isset($_SESSION['usuario'])) {
    header("Location: login.html");
    exit;
}

echo "Bem-vindo, " . $_SESSION['usuario'];
```

---

### logout.php

```php
session_start();

session_destroy();

header("Location: login.html");
exit;
```

---

## 🔒 Segurança

Sessões estão sujeitas a ataques como:

* **Session Hijacking**: roubo do ID de sessão
* **Session Fixation**: uso forçado de um ID conhecido

Medidas recomendadas:

```php
session_regenerate_id(true);
```

```php
session_set_cookie_params([
    'httponly' => true,
    'secure' => true
]);
```

Uso de HTTPS é altamente recomendado.

---

## 🍪 Sessions vs Cookies

| Aspecto       | Session    | Cookie       |
| ------------- | ---------- | ------------ |
| Armazenamento | Servidor   | Cliente      |
| Segurança     | Maior      | Menor        |
| Persistência  | Temporária | Configurável |

---

## 📂 Armazenamento

Os dados de sessão são mantidos no servidor, geralmente em arquivos temporários (ex: `/tmp`) ou em mecanismos configurados como memória ou banco de dados.

---

## 🧪 Exemplo de uso

```php
session_start();

$_SESSION['contador'] = ($_SESSION['contador'] ?? 0) + 1;

echo "Visitas: " . $_SESSION['contador'];
```

---
