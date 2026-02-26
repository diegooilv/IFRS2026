# Introdução à Programação para Dispositivos Móveis (Android)

Este documento apresenta os conceitos fundamentais, a estrutura de projetos e as ferramentas necessárias para o desenvolvimento de aplicativos Android.

## Ambiente e Linguagens de Desenvolvimento

O desenvolvimento oficial para Android é realizado utilizando as seguintes ferramentas e linguagens:

* **IDE (Ambiente de Desenvolvimento Integrado):** Android Studio (ferramenta recomendada oficialmente, com suporte para Java, XML e C/C++).
* **Java (JDK):** Linguagem orientada a objetos interpretada e executada sobre uma máquina virtual. A estrutura básica para declaração de classes e métodos segue o formato abaixo:

    ```java
    public class MyClass { 
        public void meuMetodo(int valor){
            // código vai aqui 
        }
    }
    ```

    Nesta estrutura, as classes definem os objetos presentes no sistema, métodos indicam seus comportamentos e atributos guardam as informações. A diretiva `public` define a visibilidade, e o `void` aponta que o método não tem retorno.
* **XML (eXtensible Markup Language):** Linguagem de marcação (com funcionamento semelhante ao HTML) customizável, utilizada fundamentalmente para criar elementos gráficos, empacotar dados e representar layouts externos das telas.

## Arquitetura do Projeto

A organização hierárquica dos diretórios de um projeto Android e os seus componentes vitais estão divididos da seguinte forma:

* **`.idea`**: Guarda os metadados geridos automaticamente pelo Android Studio.
* **`app`**: Contém o núcleo do aplicativo.
  * **`build`**: Armazena as classes compiladas, relatórios e arquivos gerados para a transformação do projeto em aplicativo.
  * **`libs`**: Pasta para armazenamento de bibliotecas externas (como arquivos `.jar`).
  * **`src`**: Armazena o código-fonte (classes, layouts, strings).
* **`manifests/AndroidManifest.xml`**: Arquivo obrigatório. Descreve informações essenciais como o pacote do app, os componentes, requisitos de hardware/software e permissões de segurança do sistema. Ao alterar este arquivo, é recomendável a reinstalação total do app no simulador, já que o SO Android pode tratá-lo como um novo aplicativo.
* **`java`**: Armazena as classes Java da aplicação, como por exemplo a `MainActivity.java` (a classe principal responsável pelo sistema).
* **`res`**: Abriga todos os recursos e elementos visuais do app:
  * **`drawable` / `mipmap`**: Imagens gerais e ícones como o `ic_launcher` (o ícone da aplicação).
  * **`layout`**: Desenho das telas, contendo arquivos como o `activity_main.xml` e componentes segmentados chamados de Fragmentos (`content_main.xml`, `fragment_first.xml`) que permitem criar telas mais elaboradas.
  * **`menu`**: Estrutura descritiva de navegação da aplicação.
  * **`values`**: Textos e dimensões do sistema. Um grande exemplo é o `strings.xml`. Como boa prática, deve-se referenciar mensagens interativas (como botões e toasts) chamando os atributos dessa pasta via recursos da classe `R` (exemplo: `R.string.nome_da_string_criada`) no código Java.

## O Ciclo de Vida de uma *Activity*

Diferente de paradigmas de programação onde o código inicia por um método `main()`, o Android trabalha instanciando **Activities** (Telas Executáveis da Aplicação). O sistema controla essa Activity através de *métodos de callback* divididos em três fases:

1. **Fase de Primeiro Plano (Foreground):** A *Activity* está visível e pronta para receber interações.
    * Abertura: `onCreate()` -> `onStart()` -> `onResume()`.
2. **Fase Visível:** A *Activity* é visível, mas uma sobreposição de tela (como um *Dialog*) desativa temporariamente a interação da Activity principal.
    * Mudança de foco: A Activity aciona `onPause()`.
    * Retorno de foco: A Activity aciona `onResume()`.
3. **Fase de Segundo Plano (Background):** A *Activity* fica oculta, seja porque foi substituída por outra tela, ou porque o app foi minimizado.
    * Saída: A Activity aciona `onPause()` -> `onStop()`.
    * O usuário aperta voltar para esta tela: A Activity aciona `onRestart()` -> `onResume()`.
    * Finalização total: A Activity aciona `onPause()` -> `onStop()` -> `onDestroy()`.

## Sistema de Monitoramento (Logs)

Para entender eventos ocorrendo em tempo de execução e depurar o código, os desenvolvedores utilizam o visualizador Logcat no Android Studio importando a classe `android.util.Log`. Suas principais tags são:

* **`Log.e` (Error):** Erros e situações indesejadas.
* **`Log.w` (Warning):** Suspeitas de falha e eventos inesperados, mas que não paralisam o programa.
* **`Log.i` (Info):** Sucessos na execução (exemplo: "Conectado com êxito").
* **`Log.d` (Debug):** Mensagens pontuais focadas em debugar o fluxo do programa.
* **`Log.v` (Verbose):** Registro microscópico para acompanhar todas as operações simultâneas.
* **`Log.wtf` (What a Terrible Failure):** Erros e exceções estruturais fatais.

## Deploy (Testes no Simulador e Dispositivo Físico)

Para realizar testes, o desenvolvedor pode se valer de dois métodos:

* **AVD Manager (Simulador):** Cria uma máquina virtual definindo hardware (resolução, RAM) e instalando uma imagem de API compatível com o projeto. Requer atenção aos limites de memória da sua máquina de desenvolvimento. Em caso de problemas de virtualização x86, é necessário baixar a extensão "HAXM installer" via SDK Manager.
* **Dispositivo Físico (Android):** Em "Configurações > Sobre o dispositivo", o usuário deve tocar em "Número da compilação" repetidas vezes até ativar as "Opções do Desenvolvedor" e lá assinalar a flag **"Permitir depuração de USB"**, autorizando a exibição dos logs e inserção local de apps.

---
Gerado por: NotebookLM
