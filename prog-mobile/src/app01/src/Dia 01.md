# Criação do Projeto

![new project](img/new%20project.png)

- Linguagem utilizada: Java
- Versão do android de testes: Android 5.1.

# Estrutura inicial do Projeto

### `manifests/`

- **Para que serve**: Esta pasta contém o arquivo `AndroidManifest.xml`, que é um dos arquivos mais importantes do projeto Android. Ele descreve informações essenciais sobre a aplicação, como:
  - Nome do aplicativo.
  - Pacote do aplicativo.
  - Permissões necessárias (como acesso à internet ou localização).
  - Versões mínimas e alvo do SDK.
  - Atividades, serviços, e outras componentes do aplicativo.

### `java/`

- **Para que serve**: Esta pasta contém todo o código-fonte do aplicativo, organizado em pacotes. Aqui você encontrará:
  - **Classes Java**: Todo o código de lógica de negócios, atividades, fragments, e outras classes Java ficam aqui.
  - **Testes**: Às vezes, essa pasta também pode conter subpastas para testes unitários (`src/test/java`) e testes instrumentados (`src/androidTest/java`).

### `res/`

- **Para que serve**: A pasta `res` (abreviação de "resources") contém os recursos utilizados pelo aplicativo, como layouts de UI, imagens, strings, e mais.

#### `drawable/`

- **Para que serve**: Armazena recursos gráficos, como imagens PNG, JPEG, XML (para gráficos vetoriais ou outros recursos desenháveis) usados na interface do usuário.

#### `layout/`

- **Para que serve**: Contém os arquivos de layout em XML que definem a interface do usuário de atividades e fragments. Cada arquivo de layout descreve a estrutura visual da tela, como botões, textos, e outros elementos de interface.

#### `mipmap/`

- **Para que serve**: Similar à pasta `drawable`, mas especificamente usada para ícones de aplicativos em várias resoluções. É onde você armazena as imagens do ícone do app em diferentes tamanhos, para que sejam usadas em diferentes densidades de tela.

#### `values/`

- **Para que serve**: Contém arquivos XML que armazenam valores comuns, como:
  - **`strings.xml`**: Contém todas as strings de texto usadas no aplicativo, permitindo fácil localização e personalização.
  - **`colors.xml`**: Define cores que podem ser referenciadas no layout e código.
  - **`dimens.xml`**: Define dimensões, como margens, espaçamentos, e tamanhos de fonte.
  - **`styles.xml`**: Contém definições de estilo que podem ser aplicadas a componentes de UI.

#### `xml/`

- **Para que serve**: Armazena arquivos XML para configurações personalizadas, como preferências de usuário, definições de segurança de rede, ou arquivos de configuração que não se encaixam em outras categorias.

### Gradle Scripts

- **Para que serve**: Contém scripts e arquivos de configuração para o sistema de build Gradle. Os mais importantes incluem:
  - **`build.gradle (Project: <project-name>)`**: Configurações de build global do projeto, como reposições de plugins e dependências.
  - **`build.gradle (Module: app)`**: Configurações específicas do módulo, como dependências, versões do SDK, e configurações de compilação.
  - **`settings.gradle`**: Contém informações sobre os módulos incluídos no projeto.
  - **`gradle.properties`**: Usado para definir propriedades globais do projeto.
