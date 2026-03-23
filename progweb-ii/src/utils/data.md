# 📘 Manipulação de Datas no PHP

## 📌 Função `date()`

A função `date()` retorna uma string formatada representando uma data e/ou hora.

Seu comportamento depende de:

* Uma **string de formato**
* Um **timestamp (opcional)**

Caso nenhum timestamp seja informado, a função utiliza o horário atual do sistema (`time()`).

```php
echo date("d/m/Y");
```

---

## ⚙️ Formatação de datas

A formatação é definida por caracteres específicos:

| Formato | Descrição                                         | Exemplo          |
| ------- | ------------------------------------------------- | ---------------- |
| d / j   | Dia do mês com/sem zero à esquerda                | 01 a 31 / 1 a 31 |
| D       | Dia da semana (abreviado)                         | Mon a Sun        |
| m / n   | Mês com/sem zero à esquerda                       | 01 a 12 / 1 a 12 |
| N       | Dia da semana numérico (1 = segunda, 7 = domingo) | 1                |
| Y / y   | Ano com 4 ou 2 dígitos                            | 2022 / 22        |

Exemplo de saída:

```php
echo date("d/m/Y");
```

```
01/01/2009
```

---

## ⏰ Formatação de horas

A função também permite formatar horários:

| Formato | Descrição                    | Exemplo      |
| ------- | ---------------------------- | ------------ |
| h / H   | Hora (12h / 24h)             | 1–12 / 00–23 |
| i       | Minutos com zero à esquerda  | 00 a 59      |
| s       | Segundos com zero à esquerda | 00 a 59      |

```php
echo date("H:i:s");
```

Saída:

```
08:09:27
```

---

## 🌍 Timezone

O timezone define a região utilizada para interpretar e exibir datas e horários.

A configuração correta é essencial para garantir que os horários exibidos correspondam à localização real do sistema.

---

## ⚙️ Configuração de timezone

Pode ser definido de duas formas:

### Via código

```php
date_default_timezone_set("America/Sao_Paulo");
```

### Via configuração do PHP (`php.ini`)

```ini
date.timezone = America/Sao_Paulo
```

---

## 🕒 Considerações sobre UTC-3

O timezone `"America/Sao_Paulo"` corresponde ao horário UTC-3 (considerando configurações atuais sem horário de verão).

Isso garante que funções como `date()` retornem horários compatíveis com o Brasil.

