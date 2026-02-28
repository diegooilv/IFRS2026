# 🔄 Modelos de Processos de Software

Um **Processo de Software** (também chamado de Ciclo de Vida) é um conjunto de atividades relacionadas que orientam e levam à produção de um sistema computacional. A ideia fundamental por trás do termo "ciclo de vida" é demonstrar que todo software tem uma existência bem definida. Essas atividades podem ser empregadas tanto para desenvolver um sistema totalmente a partir do zero, quanto para estender e modificar um sistema que já existe.

Independentemente da metodologia escolhida, as **atividades fundamentais** de qualquer processo de software incluem:

* **Especificação**
* **Desenvolvimento** (composto por Projeto e Implementação)
* **Validação**
* **Evolução**

Abaixo, detalhamos os principais modelos de processo de desenvolvimento:

---

## 🌊 Modelo Cascata (Waterfall)

Este é o paradigma mais antigo da Engenharia de Software, modelado com base no ciclo tradicional da engenharia convencional. Sua principal característica é a exigência de uma **abordagem sistemática e sequencial**: o resultado entregue no final de uma fase é o que servirá de entrada para a fase seguinte.

**Fases do Processo em Cascata:**

* **Análise e definição de requisitos:** Os serviços, restrições e objetivos gerais do sistema são estabelecidos por meio de consultas detalhadas aos clientes e usuários. O resultado é uma especificação documentada e validada com o cliente.
* **Projeto:** Divide as necessidades em funcionalidades, banco de dados e requisitos de hardware. Aqui se estabelece a arquitetura geral, identificando e descrevendo as abstrações fundamentais e relações, permitindo que a qualidade do projeto seja avaliada antes de iniciar a escrita do código.
* **Implementação e teste unitário:** As representações do projeto são traduzidas para instruções executáveis (código). Cada unidade de código é testada individualmente para confirmar se atende à especificação.
* **Integração e teste:** As unidades individuais são conectadas e testadas como um sistema completo para garantir o atendimento aos requisitos. Após esta fase, o software é finalmente liberado para o cliente.
* **Operação e Manutenção:** Costuma ser a fase mais longa do ciclo, iniciando com o sistema instalado no ambiente real. Modificações acontecem para corrigir erros, adaptar o software a novas mudanças no ambiente externo e adicionar melhorias exigidas pelo cliente.

> ⚠️ **Críticas e Características:** Apesar de trazer disciplina, planejamento e gerenciamento, o Cascata costuma sofrer críticas em relação à sua eficácia atual. É muito difícil conseguir todos os requisitos precisos logo no início, projetos reais quase nunca fluem linearmente, e o cliente só enxerga uma versão executável no final do processo. Além disso, pode causar "estados de bloqueio", onde parte da equipe fica travada esperando outras equipes terminarem suas etapas. É indicado apenas quando os requisitos são profundamente bem entendidos.

---

## 🧱 Modelo Incremental

Nesta abordagem, o software é concebido a partir de uma ideia base e construído "uma parte de cada vez". Ao invés de entregar tudo no final, definem-se pequenos subconjuntos de funcionalidades (incrementos) que são desenvolvidos, entregues e implantados em um ambiente operacional para o uso imediato do cliente.

**Vantagens do Incremental:**

* **Para o cliente:** Ele ganha experiência rápida com o sistema, não precisa aguardar o fim do projeto inteiro para colher valor e pode ver as funcionalidades de maior prioridade sendo desenvolvidas primeiro.
* **Para o desenvolvedor:** Dá excelente suporte tanto para prevenir quanto para tolerar as mudanças no escopo. As mudanças podem ser acomodadas nas etapas seguintes com um custo relativamente baixo e com menos risco de fracasso. As funções mais críticas também recebem mais atenção e testes rigorosos.

**Desvantagens do Incremental:**

* Existe a dificuldade de enxergar e mapear recursos básicos e dependências do sistema logo no começo, já que os requisitos vão sendo levantados um incremento por vez.
* O desenvolvimento conjunto da especificação com a codificação pode entrar em choque com contratos de compras de várias organizações, que exigem a especificação totalmente fechada antes do trabalho iniciar.

---

## 🧩 Rational Unified Process (RUP)

O RUP, criado pela IBM em 2003, é classificado como um **modelo híbrido**, pois une as melhores características da Prototipação, do modelo Incremental, Iterativo e do Desenvolvimento Orientado a Objetos. É altamente atrelado ao uso da notação UML.

Diferente do Cascata, onde as fases são atividades técnicas sequenciais, as fases do RUP estão estritamente relacionadas a questões de **negócio** e inovações do mundo corporativo. O modelo é estruturado sob três perspectivas principais:

### Perspectiva Dinâmica (Fases do Projeto)

* **Concepção:** Define interações e entidades externas. É o momento em que o projeto é justificado pelo ponto de vista comercial do cliente, levantando estimativas de cronograma, custos e mapeando potenciais riscos.
* **Elaboração:** Estabelece um "framework" detalhado da arquitetura e um entendimento profundo do problema dominante. O objetivo principal é gerar um plano de desenvolvimento e um forte modelo de requisitos (seja através de Casos de Uso ou descrições visuais).
* **Construção:** Desenvolvimento puro. Partes do sistema são criadas em paralelo, programadas, integradas e testadas. A fase se encerra quando o software está funcionando e documentado.
* **Transição:** Transferência direta do ambiente de desenvolvimento para a comunidade real de usuários, garantindo que tudo funcione perfeitamente no ambiente operacional oficial.

### Perspectiva Estática (Atividades)

Esta perspectiva elenca as atividades (disciplinas ou workflows) que cruzam as fases no tempo. Exemplos incluem: *Modelagem de Negócios, Levantamento de Requisitos, Análise e Projeto, Implementação (geração de código), Teste iterativo, Implantação e os fluxos de apoio, como Gerenciamento de Configuração/Mudanças e Ambiente*.

### Perspectiva Prática (Princípios e Boas Práticas)

Sugere as seguintes ações cruciais para a boa engenharia de software:

* **Desenvolver iterativamente:** Começar pelo o que possui maior prioridade.
* **Gerenciar requisitos:** Documentar explicitamente o que o cliente quer, rastreando as mudanças e analisando os impactos.
* **Arquitetura:** Construir usando arquiteturas em componentes bem divididas.
* **Modelagem visual:** Utilizar UML para ilustrar visões dinâmicas e estáticas.
* **Garantia da Qualidade:** Seguir rígidos padrões de qualidade organizacional.
* **Controle e versão:** Utilizar ferramentas especializadas para gerenciar as mudanças no código e no escopo.

---

## 📦 Modelo Baseado em Componentes

Essa técnica apoia-se firmemente na orientação a objetos e na **reusabilidade**. Em vez de programar funcionalidades rotineiras repetidas vezes, a aplicação de software é montada como um quebra-cabeças, utilizando componentes padronizados que já foram previamente projetados e preparados.

**O que são esses componentes?**
São entidades de código independentes e executáveis que oferecem seus serviços por meio de uma "interface" pré-estabelecida. As características fundamentais de um componente garantem que ele seja **padronizado, totalmente independente, fácil de ser composto, implantável no ambiente e adequadamente documentado**.

---

## 🌀 Modelo Espiral

Criado para romper com a lógica linear e retilínea, o modelo Espiral representa o ciclo de vida do software como uma curva expansiva. Cada "volta" que o projeto dá na espiral simboliza uma etapa inteira do desenvolvimento (como analisar viabilidade na primeira volta, definir requisitos na segunda, e assim sucessivamente).

Para garantir a coesão, o modelo obriga que os seguintes **setores fundamentais** sejam executados dentro de cada volta na espiral:

* **Definição dos objetivos:** Delimitação de metas, alternativas e restrições daquela volta específica.
* **Avaliação e redução de riscos:** Uma análise criteriosa de problemas prováveis, com atitudes antecipadas para reduzir drasticamente a chance de ocorrência de falhas críticas.
* **Desenvolvimento e validação:** A aplicação técnica das disciplinas de construção.
* **Planejamento:** Revisão profunda de tudo que foi produzido na volta atual e a estruturação lógica do plano para iniciar a próxima volta na espiral.
*

---
Gerado por: NotebookLM
