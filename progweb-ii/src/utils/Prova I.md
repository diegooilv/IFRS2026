# Avaliação I — PHP

## Questão 1

Considere que foi executado o seguinte código dentro de um script PHP.

```php
$frutas = array("maça", "pera", "uva");
```

Escreva o código para percorrer o array, mostrando na tela os valores nele armazenado, separados por vírgula (,).

### Resposta

```php
echo implode(",", $frutas);
```

---

## Questão 2

O código é executado no cliente.

* ( ) True
* (X) False

### Resposta correta

**False**

### Explicação

O código PHP é executado no **servidor**, não no cliente.

---

## Questão 3

Qual é uma das principais vantagens de utilizar funções em um programa PHP?

* (X) a. Permitir a reutilização de código e melhor organização do programa.
* ( ) b. Aumentar a velocidade de execução do código.
* ( ) c. Garantir que o código funcione apenas em servidores locais.
* ( ) d. Reduzir a velocidade de execução do código.
* ( ) e. Evitar o uso de variáveis globais.

### Resposta correta

**a. Permitir a reutilização de código e melhor organização do programa.**

---

## Questão 4

A partir do código-fonte abaixo, escrito na linguagem PHP (versão 7.4), o que deverá ser impresso?

* ( ) a. A multiplicação dos números 1 ao 90.
* ( ) b. Os números 1 ao 900.
* (X) c. A tabuada dos números 1 ao 9.
* ( ) d. A tabuada do número 9.
* ( ) e. Os números 1 ao 90.

### Resposta correta

**c. A tabuada dos números 1 ao 9.**

---

## Questão 5

Relação à linguagem PHP, leia a seguinte afirmação e responda:

> Trata-se de uma linguagem que é necessário que se pague pelo seu uso.

* ( ) True
* (X) False

### Resposta correta

**False**

### Explicação

O PHP é uma linguagem **gratuita e open source**.

---

## Questão 6

Analise a seguinte URL:

```txt
http://meusite.com.br/alistamento.php?nome=Lucas&idade=21&sexo=m
```

O parâmetro idade contém um número inteiro e o parâmetro sexo contém uma string (onde a letra `m` indica o sexo masculino).

Escreva o código para dizer se a pessoa deve servir no exército, baseado na condição de que o sexo precisa ser masculino e a idade tem que ser maior ou igual a 18.

### Resposta

```php
<?php
if($_SERVER['REQUEST_METHOD'] === "GET"){
    $genero = $_GET["sexo"];
    (int) $idade = $_GET["idade"];

    if($genero == "m" and $idade >= 18){
        echo "vai servir";
    }else{
        echo "não vai servir";
    }
}
?>
```

---

## Questão 7

PHP é uma linguagem compilada, o que significa que o código PHP não é executado diretamente pelo servidor web, com necessidade de compilação prévia.

* ( ) True
* (X) False

### Resposta correta

**False**

### Explicação

PHP é uma linguagem **interpretada no servidor**.

---

## Questão 8

Qual das seguintes afirmações sobre o escopo de variáveis em funções PHP está correta?

* ( ) a. Variáveis declaradas dentro de uma função PHP têm escopo de classe.
* (X) b. Variáveis declaradas dentro de uma função PHP têm escopo local e só podem ser acessadas dentro da própria função onde foram declaradas.
* ( ) c. Variáveis declaradas dentro de uma função PHP têm escopo global.
* ( ) d. Variáveis declaradas dentro de uma função PHP podem ser acessadas globalmente se forem declaradas com `global`.
* ( ) e. Variáveis declaradas dentro de uma função PHP são acessíveis em qualquer parte do código.

### Resposta correta

**b. Variáveis declaradas dentro de uma função PHP têm escopo local e só podem ser acessadas dentro da própria função onde foram declaradas.**

---

## Questão 9

O PHP é uma linguagem fortemente tipada e requer sempre a necessidade de declaração explícita de tipos de variáveis.

* ( ) True
* (X) False

### Resposta correta

**False**

### Explicação

PHP possui tipagem dinâmica.

---

## Questão 10

Relação à linguagem PHP, leia a seguinte afirmação e responda:

> As variáveis no PHP são representadas por cerquilha (`#`) seguido pelo nome da variável.

* ( ) True
* (X) False

### Resposta correta

**False**

### Explicação

Variáveis em PHP começam com o símbolo `$`.

Exemplo:

```php
$nome = "Diego";
```

---

## Questão 11

Qual das alternativas abaixo descreve corretamente o comportamento do método GET em PHP?

* ( ) a. O método GET é recomendado para enviar dados sensíveis.
* ( ) b. O método GET envia dados de forma criptografada.
* ( ) c. O método GET envia dados de forma ilimitada.
* (X) d. O método GET envia dados através da URL, sendo os dados visíveis e com limite de tamanho.
* ( ) e. O método GET armazena os dados permanentemente.

### Resposta correta

**d. O método GET envia dados através da URL, sendo os dados visíveis e com limite de tamanho.**

---

## Questão 12

O código da linguagem de programação PHP é executado no servidor da aplicação, e apenas os comandos em HTML são enviados para o cliente.

* (X) True
* ( ) False

### Resposta correta

**True**

---

## Questão 13

Relação à linguagem PHP, leia a seguinte afirmação e responda:

> Elimina o uso de códigos HTML e CSS.

* ( ) True
* (X) False

### Resposta correta

**False**

### Explicação

PHP trabalha junto com HTML e CSS.

---

## Questão 14

Um array pode armazenar dados de diferentes tipos, por exemplo, inteiros e números com ponto flutuante.

* (X) True
* ( ) False

### Resposta correta

**True**

---

## Questão 15

Em PHP, a estrutura de controle `while` pode ser utilizada para executar um bloco de código repetidamente, enquanto uma condição específica for verdadeira.

* (X) True
* ( ) False

### Resposta correta

**True**

---

## Questão 16

Observe o código PHP abaixo:

```php
<?php
$nome = "Jhon";
$email = "jo@abc.com";

if (empty($nome) && empty($email) && empty($mensagem))
{
    echo "Por favor, preencha todos os campos.";
} else {
    echo "O formulário foi preenchido corretamente!";
}
?>
```

Apesar da variável `$mensagem` não ter sido declarada, é apresentada a mensagem:

> “O formulário foi preenchido corretamente!”

Qual das linhas abaixo corrigiria o comportamento do programa?

* (X) a. `if (empty($nome) || empty($email) || empty($mensagem))`
* ( ) b. `if (isset($nome) && isset($email) && isset($mensagem))`
* ( ) c. `if (!isset($nome) && !isset($email) && isset($mensagem))`
* ( ) d. `if (!empty($nome) && !empty($email) && !empty($mensagem))`
* ( ) e. `if (!empty($nome) || !empty($email) || empty($mensagem))`

### Resposta correta

```php
if (empty($nome) || empty($email) || empty($mensagem))
```

### Explicação

O operador `||` verifica se **algum** campo está vazio.

---

## Questão 17

Quando o PHP interpreta um arquivo, uma procura pelas tags de abertura e fechamento `<?php` e `?>` é realizada. Estas tags indicam para iniciar ou parar a interpretação do código entre elas.

* (X) True
* ( ) False

### Resposta correta

**True**

---

Obs: Transcrição de PDF -> .MD feito por IA.