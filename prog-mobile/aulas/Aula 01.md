# Aula 25/02

## Android Studio

O [Android Studio](https://developer.android.com/studio?hl=pt-br) é o Ambiente de Desenvolvimento Integrado (IDE) oficial para a criação de aplicativos Android. Baseado no IntelliJ IDEA, oferece ferramentas para o processo de escrita de código, teste e depuração.

## Configuração do Projeto

* **Criação de Novo Projeto**: No Android Studio, deve-se selecionar a opção "Start a new Android Studio project" e escolher o template *Empty Views Activity*.
* **Definições do Projeto**: É necessário definir o nome do projeto, o local de salvamento e a linguagem de programação (Java). A versão mínima do SDK deve ser selecionada conforme a compatibilidade desejada (recomenda-se o SDK 24 ou 25 para maior alcance de dispositivos).
* **Estrutura de Diretórios**: A organização do projeto concentra o código-fonte Java em `app/src/main/java` e os recursos (layouts, imagens e strings) em `app/src/main/res`.

## Layout XML

O layout XML define a interface do usuário e reside no diretório `res/layout`. O arquivo `activity_main.xml` atua como o layout principal.

```xml
<?xml version="1.0" encoding="utf-8"?>
<RelativeLayout xmlns:android="http://schemas.android.com/apk/res/android"
    android:layout_width="match_parent"
    android:layout_height="match_parent">

    <TextView
        android:id="@+id/textView"
        android:layout_width="wrap_content"
        android:layout_height="wrap_content"
        android:text="@string/hello_world"
        android:textSize="24sp"
        android:layout_centerInParent="true" />
</RelativeLayout>

```

Neste exemplo, utiliza-se um `RelativeLayout` para centralizar um `TextView` que exibe uma mensagem na tela.

## MainActivity.java

A classe `MainActivity.java` contém a lógica de funcionamento da tela principal, localizada em `app/src/main/java/com.example.meuapp`.

```java
package com.example.meuapp;
import android.os.Bundle;
import androidx.appcompat.app.AppCompatActivity;

public class MainActivity extends AppCompatActivity {
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
    }
}

```

A classe estende `AppCompatActivity`. O método `onCreate` é executado na criação da atividade, onde o método `setContentView` vincula o arquivo XML à interface da classe.

## Strings.xml

O arquivo `strings.xml`, localizado em `res/values`, é utilizado para o armazenamento centralizado de textos. Esta prática facilita a manutenção e a tradução do aplicativo.

```xml
<resources>
    <string name="app_name">Meu App</string>
    <string name="hello_world">Hello World!</string>
</resources>

```

A referência no layout XML deve ser feita via `@string/nome_da_string`, evitando o uso de texto estático (*hardcoded*).

## Emulação e Execução

O teste do aplicativo ocorre por meio de um emulador interno ou em um dispositivo físico conectado. A execução é iniciada pelo ícone "Run" (triângulo verde) na barra de ferramentas. O emulador simula o comportamento de um dispositivo real, sendo fundamental para a fase de depuração.
