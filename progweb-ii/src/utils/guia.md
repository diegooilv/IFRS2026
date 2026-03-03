# Guia

---

## Menu de Navegação

- [Guia](#guia)
  - [Menu de Navegação](#menu-de-navegação)
  - [Introdução](#introdução)
  - [Sintaxe Básica](#sintaxe-básica)
    - [Comentários](#comentários)
  - [Variáveis e Tipos](#variáveis-e-tipos)
    - [Tipos principais](#tipos-principais)
    - [Exemplos](#exemplos)
  - [Constantes](#constantes)
  - [Operadores](#operadores)
    - [Aritméticos](#aritméticos)
    - [Comparação](#comparação)
    - [Lógicos](#lógicos)
    - [Concatenação](#concatenação)
  - [Estruturas de Controle](#estruturas-de-controle)
    - [If](#if)
    - [Switch](#switch)
    - [Ternário](#ternário)
  - [Loops](#loops)
    - [For](#for)
    - [While](#while)
    - [Foreach](#foreach)
  - [Arrays](#arrays)
    - [Array simples](#array-simples)
    - [Associativo](#associativo)
    - [Funções úteis](#funções-úteis)
  - [Strings](#strings)
  - [Funções](#funções)
    - [Arrow function](#arrow-function)
  - [Superglobais](#superglobais)
    - [Principais](#principais)
  - [Formulários](#formulários)
    - [HTML](#html)
    - [PHP](#php)
  - [Validação e Segurança](#validação-e-segurança)
    - [Evitar XSS](#evitar-xss)
    - [Senha segura](#senha-segura)
    - [Verificação segura](#verificação-segura)
  - [Sessões](#sessões)
  - [Cookies](#cookies)
  - [Manipulação de Arquivos](#manipulação-de-arquivos)
  - [Tratamento de Erros](#tratamento-de-erros)
  - [Programação Orientada a Objetos](#programação-orientada-a-objetos)
  - [Banco de Dados com PDO](#banco-de-dados-com-pdo)
    - [Conexão](#conexão)
    - [Consulta](#consulta)
    - [Inserção segura](#inserção-segura)

---

## Introdução

PHP é uma linguagem de script executada no servidor, usada principalmente para desenvolvimento web.

Arquivos PHP possuem extensão `.php`.

O código é executado no servidor antes de ser enviado ao navegador.

---

## Sintaxe Básica

```php
<?php
echo "Olá mundo";
print "Texto";

$nome = "Diego";
$idade = 18;

?>
```

### Comentários

```php
// Comentário de linha
# Comentário alternativo
/*
Comentário
de múltiplas linhas
*/
```

---

## Variáveis e Tipos

### Tipos principais

- string
- int
- float
- bool
- array
- object
- null

### Exemplos

```php
$texto = "PHP";
$numero = 10;
$decimal = 10.5;
$ativo = true;
$nulo = null;
```

---

## Constantes

```php
define("SITE", "MeuSite");
const VERSAO = "1.0";
```

---

## Operadores

### Aritméticos

```php
+ - * / %
```

### Comparação

```php
==  ===
!=  !==
>   <
>=  <=
```

### Lógicos

```php
&&
||
!
```

### Concatenação

```php
$nome = "Diego";
echo "Olá " . $nome;
```

---

## Estruturas de Controle

### If

```php
if ($idade >= 18) {
    echo "Maior";
} elseif ($idade == 17) {
    echo "Quase";
} else {
    echo "Menor";
}
```

### Switch

```php
switch ($dia) {
    case "segunda":
        echo "Início da semana";
        break;
    default:
        echo "Outro dia";
}
```

### Ternário

```php
echo ($idade >= 18) ? "Adulto" : "Menor";
```

---

## Loops

### For

```php
for ($i = 0; $i < 5; $i++) {
    echo $i;
}
```

### While

```php
while ($condicao) {
}
```

### Foreach

```php
foreach ($array as $valor) {
    echo $valor;
}
```

---

## Arrays

### Array simples

```php
$lista = [1, 2, 3];
```

### Associativo

```php
$usuario = [
    "nome" => "Diego",
    "idade" => 18
];
```

### Funções úteis

```php
count($lista);
in_array(2, $lista);
array_push($lista, 4);
array_pop($lista);
array_merge($a, $b);
```

---

## Strings

```php
strlen($texto);
strtolower($texto);
strtoupper($texto);
trim($texto);
explode(" ", $texto);
implode(",", $array);
```

---

## Funções

```php
function saudacao($nome) {
    return "Olá, " . $nome;
}

echo saudacao("Diego");
```

### Arrow function

```php
$soma = fn($a, $b) => $a + $b;
```

---

## Superglobais

### Principais

```
$_GET
$_POST
$_REQUEST
$_SERVER
$_SESSION
$_COOKIE
$_FILES
```

---

## Formulários

### HTML

```html
<form method="POST">
    <input type="text" name="nome">
    <input type="submit">
</form>
```

### PHP

```php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nome = $_POST["nome"];
}
```

---

## Validação e Segurança

### Evitar XSS

```php
htmlspecialchars($input);
```

### Senha segura

```php
$hash = password_hash("123", PASSWORD_DEFAULT);
password_verify("123", $hash);
```

### Verificação segura

```php
isset($variavel);
empty($variavel);
```

---

## Sessões

```php
session_start();
$_SESSION["usuario"] = "Diego";
echo $_SESSION["usuario"];
session_destroy();
```

---

## Cookies

```php
setcookie("usuario", "Diego", time() + 3600);
echo $_COOKIE["usuario"] ?? "";
```

---

## Manipulação de Arquivos

```php
$file = fopen("arquivo.txt", "w");
fwrite($file, "Texto");
fclose($file);
```

---

## Tratamento de Erros

```php
try {
    throw new Exception("Erro");
} catch (Exception $e) {
    echo $e->getMessage();
}
```

---

## Programação Orientada a Objetos

```php
class Usuario {

    public $nome;
    private $senha;

    public function __construct($nome, $senha) {
        $this->nome = $nome;
        $this->senha = $senha;
    }

    public function getNome() {
        return $this->nome;
    }
}

$user = new Usuario("Diego", "123");
echo $user->getNome();
```

---

## Banco de Dados com PDO

### Conexão

```php
$pdo = new PDO("mysql:host=localhost;dbname=teste", "root", "");
```

### Consulta

```php
$stmt = $pdo->prepare("SELECT * FROM usuarios WHERE id = ?");
$stmt->execute([1]);
$resultado = $stmt->fetch();
```

### Inserção segura

```php
$stmt = $pdo->prepare("INSERT INTO usuarios (nome) VALUES (?)");
$stmt->execute(["Diego"]);
```

---
