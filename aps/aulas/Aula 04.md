# 🎯 Engenharia de Requisitos

**Análise e Projeto de Sistemas | IFRS**

A fase de Requisitos é o ponto de partida de qualquer desenvolvimento de software. A palavra "requisito" remete a uma condição necessária para atingir um objetivo. Na área de software, a Engenharia de Requisitos é um conjunto de tarefas dedicadas a entender o impacto do sistema no negócio, extrair o que o cliente realmente quer e definir como os usuários interagirão com o sistema.

Seu objetivo central é descrever com clareza **o que o sistema deve fazer** (serviços) e as **restrições** ao seu funcionamento.

## 📝 Níveis de Descrição dos Requisitos

Os requisitos podem ser escritos em diferentes níveis de detalhamento, dependendo de quem vai ler a documentação:

* 👤 **Requisitos de Usuário:** São declarações mais abstratas, escritas em linguagem natural (com ou sem diagramas), descrevendo os serviços que o sistema fornecerá. São voltados para o cliente e gestores.
* 💻 **Requisitos de Sistema:** São descrições profundas e detalhadas das funções, serviços e restrições técnicas. Definem exatamente o que será implementado pelos desenvolvedores.

> 💡 **Dica:** Um único requisito abstrato de usuário frequentemente se desdobra em diversos requisitos de sistema muito mais específicos.

---

## ⚖️ Requisitos Funcionais vs. Não Funcionais

Esta é a divisão mais importante da área. Todo sistema é composto por essas duas categorias:

### ⚙️ Requisitos Funcionais (RF)

Descrevem as funcionalidades diretas do sistema. Eles ditam como o software deve reagir a entradas específicas e como deve se comportar em determinadas situações. Às vezes, também especificam o que o sistema *não* deve fazer.

* **Características:** Devem ser **completos** (todos os serviços exigidos devem estar descritos) e **consistentes** (não podem ter definições contraditórias entre si).
* **Exemplos práticos:** "O sistema deve emitir um recibo após a transação"; "O sistema deve permitir o cadastro de usuários com login e senha".

### 🛡️ Requisitos Não Funcionais (RNF)

Eles não descrevem funcionalidades diretas, mas sim as **restrições e propriedades** sob as quais o sistema deve operar (como desempenho, confiabilidade, espaço em disco, etc). Muitas vezes, eles são tão ou mais críticos que os funcionais, pois afetam a arquitetura geral do sistema como um todo, e não apenas um componente isolado.

* **Características:** Devem ser totalmente objetivos e quantitativos, pois precisam ser **testáveis**. Dizer "o sistema deve ser rápido" está errado; o correto é "o sistema deve responder em até 5 segundos".
* **Atenção:** Os requisitos não são independentes! Um único Requisito Não Funcional (ex: segurança) pode obrigar a criação de vários Requisitos Funcionais (ex: telas de login, logs de acesso, bloqueios) para ser atendido.

**Os Requisitos Não Funcionais são divididos em 3 categorias principais:**

* 📦 **Requisitos de Produto:** Restringem o comportamento do software em si. Exemplos: requisitos de eficiência, desempenho (tempo de resposta, velocidade), espaço (memória), usabilidade e confiabilidade (taxa aceitável de falhas).
* 🏢 **Requisitos Organizacionais:** Derivam das políticas internas, procedimentos e padrões da empresa do cliente ou do desenvolvedor. Exemplos: exigência de usar uma linguagem de programação específica ou seguir um formato padronizado de relatórios.
* 🌍 **Requisitos Externos:** Fatores que vêm de fora do sistema e do processo de desenvolvimento. Exemplos: leis de privacidade (legais), normas de auditoria (reguladores) e princípios morais (éticos).

---

## 🕵️‍♂️ Levantamento (Elicitação) de Requisitos

É a etapa prática de ir a campo recolher a informação, entendendo o sistema existente e extraindo o conhecimento da cabeça dos *stakeholders* (clientes, usuários finais, gerentes). Como isso pode ser muito difícil, utilizamos várias técnicas:

### 👁️ Observação

Consiste em acompanhar passivamente o usuário executando suas tarefas.

* **Quando usar:** Ótimo para processos repetitivos, ou quando os usuários não conseguem explicar bem o que fazem verbalmente.
* **Vantagens:** Gera dados altamente confiáveis baseados no ambiente real, e é relativamente barato.
* **Desvantagens:** Requer múltiplas sessões para garantir que nenhuma etapa foi esquecida.

### 🗣️ Entrevistas

Conversas diretas (formais ou informais) com os usuários. **Atenção:** Uma entrevista nunca deve ser improvisada; ela exige planejamento prévio (objetivos, agenda, tempo e consentimento).

* **Vantagens:** Permite um detalhamento riquíssimo de informações, esclarecimento de dúvidas na hora e flexibilidade para alterar perguntas conforme a conversa flui.
* **Desvantagens:** Consome muito tempo e recursos, e o entrevistador corre o risco de desviar o foco ou esquecer perguntas importantes.

### 📝 Questionários

Instrumentos estruturados com perguntas quantitativas (múltipla escolha, notas de 1 a 10) ou qualitativas (respostas abertas).

* **Vantagens:** Padronização perfeita das perguntas, atinge um número altíssimo de pessoas com baixo custo, e permite tratamento estatístico fácil.
* **Desvantagens:** Respostas limitadas, pouquíssima interação e os usuários podem deixar questões em branco.

### 👥 Reuniões e Dinâmicas de Grupo

Consiste em reunir pessoas-chave de diferentes setores. Dá uma visão geral dos problemas e levanta conflitos entre departamentos, mas pode paralisar a rotina da empresa se envolver muitos funcionários simultaneamente. Destacam-se duas dinâmicas:

* **Brainstorming (Tempestade de Ideias):** Uma reunião para gerar o máximo de soluções criativas em pouco tempo. *Regras de ouro:* Nenhuma ideia deve ser criticada ou rejeitada na hora, ideias devem ser combinadas (a melhor ideia costuma ser a união de várias), e tudo deve ser registrado. Seu maior risco é que pessoas tímidas podem se calar e a dinâmica exige um moderador muito experiente.
* **JAD (Joint Application Development):** Reuniões altamente estruturadas e focadas, conduzidas por um líder fora do ambiente comum da empresa (lugar neutro), juntando desenvolvedores e clientes para projetar a solução. Permite criação coletiva rica, mas custa caro e pode sofrer com dispersão.

### 📄 Análise de Documentos

Estudo dos manuais, formulários de papel e regulamentos que a empresa já utiliza.

* **Vantagens:** É fácil de acessar e não exige tempo/paralisação dos funcionários.
* **Desvantagens:** É um trabalho massivo e muito frequentemente os documentos estão desatualizados, imprecisos ou ausentes.

### ⏪ Engenharia Reversa

É o estudo direto do código-fonte ou da estrutura de um software legado (antigo) que a empresa já possui.

* **Vantagens:** Alta disponibilidade de dados exatos e possibilidade de reutilizar componentes.

> 🏆 **Qual técnica é a melhor?** Não existe uma técnica suprema. O sucesso de um bom levantamento de requisitos baseia-se no uso **misto** (integração) de várias técnicas juntas, escolhidas com base na situação, no momento e no tipo de informação desejada.

---
Gerado por: NotebookLM