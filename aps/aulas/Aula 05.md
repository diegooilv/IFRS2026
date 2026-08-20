# 🎯 Engenharia de Requisitos: Conceitos, Classificações e Técnicas de Levantamento

A Engenharia de Requisitos é uma das ações mais importantes dentro do processo de software, iniciando-se durante a atividade de comunicação e continuando na atividade de modelagem. Ela estabelece as bases sobre as quais o sistema será construído, definindo o escopo e garantindo o alinhamento entre as expectativas do negócio, os desejos do cliente e a implementação técnica.

---

## 🔍 O que é um Requisito?
No dicionário, a palavra *requisito* indica uma **condição necessária para obter um objetivo** ou preencher um determinado fim. No contexto de desenvolvimento de software, refere-se às condições e capacidades que o produto final deve possuir para satisfazer as necessidades do cliente.

---

## 🎯 Objetivos da Engenharia de Requisitos
Os principais objetivos de aplicar o conjunto de tarefas da Engenharia de Requisitos são:
*   Compreender qual será o impacto do novo software sobre o negócio do cliente.
*   Entender profundamente o que o cliente deseja e necessita para o seu dia a dia.
*   Definir de que forma os usuários finais interagirão com a nova ferramenta.
*   Descrever com clareza **o que o sistema deve fazer**, quais serviços ele oferecerá e quais são as **restrições** que limitarão o seu funcionamento.

---

## 🌐 Níveis de Descrição de Requisitos
Os requisitos podem ser expressos em diferentes graus de detalhamento e abstração para atender a públicos distintos:
*   **Requisitos de Usuário:** São declarações abstratas de alto nível, escritas em linguagem natural (com ou sem o apoio de diagramas), que descrevem as funcionalidades e serviços que o sistema fornecerá aos seus utilizadores finais.
*   **Requisitos de Sistema:** São descrições muito mais detalhadas e técnicas das funções, serviços e restrições operacionais da aplicação. Eles têm como papel principal definir exatamente tudo o que deverá ser implementado pela equipe técnica de desenvolvimento.

---

## ⚙️ Requisitos Funcionais
Estes requisitos especificam as funções e os serviços diretos que o sistema deve fornecer aos seus usuários. Eles detalham como o sistema deve reagir a determinadas entradas e como deve se comportar diante de situações específicas, podendo também especificar explicitamente **o que o sistema não deve fazer**.

Para que a especificação de requisitos funcionais seja considerada de alta qualidade, ela precisa cumprir duas propriedades fundamentais:
*   **Especificação Completa:** Todos os serviços e funcionalidades demandados pelos usuários e clientes devem estar minuciosamente definidos.
*   **Especificação Consistente:** Não podem existir definições contraditórias ou conflitantes entre os requisitos listados.

---

## 🛡️ Requisitos Não Funcionais
Ao contrário dos funcionais, os requisitos não funcionais não se concentram em serviços específicos oferecidos pelo sistema. Em vez disso, eles descrevem as **restrições sobre as quais o sistema deve operar**, limitando os serviços ou as funções disponibilizadas.

**Propriedades Cruciais dos Requisitos Não Funcionais:**
*   **Impacto Arquitetural:** Eles costumam dizer respeito à arquitetura geral do sistema como um todo, em vez de se limitarem a componentes individuais. Por exemplo, garantir requisitos rígidos de desempenho exige uma organização do sistema focada em minimizar a comunicação interna entre as partes.
*   **Geração de Requisitos Funcionais:** Um único requisito não funcional (como uma restrição de segurança e proteção) pode acabar gerando uma série de novos requisitos funcionais que definem os serviços necessários para atender a essa restrição.
*   **Origem Diversificada:** Eles surgem das necessidades diretas dos usuários, mas também de fatores como restrições orçamentárias, políticas internas organizacionais, necessidades de interoperabilidade com outros sistemas (hardware e software), regulamentos de segurança e legislações de privacidade.
*   **Objetividade e Testabilidade:** Eles não devem expressar meros desejos ou opiniões subjetivas; devem ser totalmente objetivos e mensuráveis através de um processo que permita testá-los de forma concreta.

### Classificação dos Requisitos Não Funcionais
A norma e a literatura dividem os requisitos não funcionais em três grandes ramos:
*   **Requisitos de Produto:** Especificam ou limitam o comportamento do software em termos de usabilidade (facilidade de uso, curva de aprendizagem), desempenho (velocidade de execução, tempo de resposta), espaço de memória, confiabilidade (taxa aceitável de falhas, capacidade de recuperação) e proteção (criptografia, autenticação).
*   **Requisitos Organizacionais:** São derivados das regras, políticas corporativas e procedimentos adotados tanto na empresa do cliente quanto na do desenvolvedor. Eles definem aspectos como a linguagem de programação a ser adotada, o ambiente de desenvolvimento, padrões de relatórios obrigatórios e normas de processo de engenharia de software.
*   **Requisitos Externos:** São restrições impostas por fatores de fora do sistema e que independem do cliente ou da equipe de desenvolvimento. Eles podem abranger requisitos reguladores (para aprovação por órgãos de auditoria), requisitos legais (em conformidade com a legislação nacional) e requisitos éticos (para garantir que o sistema seja socialmente aceitável).

### Métricas Comuns para Testar Requisitos Não Funcionais de Produto
Para que esses requisitos sejam de fato testáveis, utilizamos métricas quantitativas associadas a cada propriedade:
*   **Usabilidade:** Medida através do tempo de treinamento necessário ou do nível de facilidade de uso do sistema.
*   **Desempenho:** Avaliado pela rapidez geral, número de transações processadas por segundo ou tempo de resposta do sistema a comandos.
*   **Espaço e Capacidade:** Medidos pelo volume total de dados armazenados ou pela quantidade de usuários simultâneos suportados.
*   **Confiabilidade:** Medida pela probabilidade de ocorrência de falhas ou pelo tempo que o sistema leva para se recuperar de uma interrupção.
*   **Proteção:** Avaliada através do uso de criptografia robusta ou sistemas de autenticação seguros.

---

## 👥 Quem Participa desse Processo?
O desenvolvimento de requisitos é um esforço altamente colaborativo. Ele é conduzido por engenheiros de software ou analistas de requisitos, mas depende fortemente da participação ativa de diversos stakeholders, tais como:
*   Gerentes de projeto.
*   Clientes e patrocinadores.
*   Usuários finais que operarão o sistema no cotidiano.

---

## 🕵️‍♂️ Levantamento ou Elicitação de Requisitos
Esta etapa consiste em ir a campo para coletar dados, compreender o sistema que já existe na empresa e projetar as necessidades do sistema desejado. Trata-se de uma fase de intensa interação humana voltada a extrair informações valiosas dos usuários. 

Dada a complexidade dessa atividade, diversas técnicas de levantamento de requisitos são empregadas:

### Observações
O analista acompanha o cotidiano dos usuários para decifrar como eles atuam e entender o seu estilo e dinâmica de trabalho.
*   **Aplicação indicada:** É ideal para mapear processos que estão em execução, buscar melhorias operacionais, estudar processos muito repetitivos ou quando os stakeholders têm extrema dificuldade em explicar verbalmente como realizam suas atividades.
*   **Vantagens:** Fornece dados altamente confiáveis e contextualizados no ambiente físico onde as tarefas de fato acontecem, além de ser uma técnica relativamente barata.
*   **Desvantagens:** Requer mais de uma sessão de observação, sendo necessário repetir o processo para garantir a consistência das informações capturadas.

### Entrevistas
Trata-se da técnica mais comum de levantamento de requisitos, podendo ser conduzida de forma formal ou informal através de perguntas estruturadas sobre o sistema atual e o novo sistema.
*   **Vantagens:** As respostas diretas e detalhadas fornecidas pelos participantes dão origem direta aos requisitos do projeto.
*   **Planejamento necessário:** Para ter sucesso, a entrevista precisa ser muito bem planejada, o que exige definir previamente os objetivos, o conteúdo, a agenda de horários e o local ideal, além de garantir o consentimento formal dos envolvidos, estipular os recursos necessários e motivar o participante dentro do contexto do projeto.

### Questionários
São formulários estruturados que podem conter abordagens de dois tipos:
*   **Abordagem Quantitativa:** Utiliza perguntas baseadas em gradações de respostas (como sim/não, avaliações de excelente/bom/ruim ou escalas de notas de um a dez). Tem como vantagens a padronização das perguntas e a facilidade para realizar análises e tratamentos estatísticos rápidos.
*   **Abordagem Qualitativa:** Explora respostas abertas e descritivas para obter visões mais profundas, porém dificulta a análise posterior. Recomenda-se usar perguntas de controle para validar a consistência das respostas.
*   **Desvantagens Gerais:** Oferecem respostas limitadas ao escopo das perguntas criadas e promovem pouca interação ou participação direta dos envolvidos.

### Reuniões e Dinâmicas de Grupo
Consistem em reunir as pessoas certas do projeto em encontros com data, hora e local previamente definidos, garantindo o registro sistemático de todas as discussões. Duas dinâmicas se destacam:

#### Brainstorming (Tempestade de Ideias)
Os participantes são incentivados a apresentar ideias de forma espontânea sobre o tema.
*   **Regras do Brainstorming:** Deve haver um moderador responsável por conduzir o fluxo. Nenhuma discordância ou crítica às propostas é permitida no momento da geração. O foco deve estar no tópico estabelecido, incentivando a combinação de ideias para gerar soluções melhores.
*   **Desvantagens:** Exige um moderador muito experiente com domínio do conhecimento, foca primariamente na quantidade de ideias em vez de na qualidade imediata, e pessoas envergonhadas podem ter grandes dificuldades para participar ativamente.

#### JAD (Joint Application Development)
Reuniões de criação altamente estruturadas e conduzidas em local neutro.
*   **Dinâmica:** Conta com a presença de um líder, analistas e usuários trabalhando juntos sob uma agenda formal para os pontos cruciais e uma agenda informal para o fluxo criativo.
*   **Metas do JAD:** Identificar problemas técnicos e operacionais, propor abordagens de solução, negociar pontos de vista divergentes e consolidar a especificação preliminar de requisitos.
*   **Vantagens:** Permite considerar múltiplas opiniões e fomenta uma rica criação coletiva.
*   **Desvantagens:** Possui um custo financeiro elevado e apresenta riscos de dispersão se não for rigorosamente guiada.

### Análise de Documentos
Consiste no estudo detalhado de relatórios, manuais e documentos impressos da empresa para entender os fluxos de trabalho e racionalizar tarefas.
*   **Aplicação indicada:** Muito útil para mapear processos em setores que ainda não são informatizados.
*   **Vantagens:** Oferece fácil acesso a informações pré-existentes e permite uma filtragem inicial do funcionamento do negócio.

### Engenharia Reversa
É a análise técnica direta do código-fonte ou da estrutura de um sistema legado (antigo) que já está em operação.
*   **Vantagens:** Alta disponibilidade de dados precisos (visto que o código é a própria realidade do sistema) e grande facilidade de reutilização de componentes ou lógicas de negócio existentes.

---

## 🔄 Como Escolher a Melhor Técnica?
Nenhuma técnica de levantamento é autossuficiente. O segredo para um levantamento de requisitos bem-sucedido reside na **integração de técnicas (abordagem mista)**. A escolha do conjunto de técnicas a ser utilizado deve ser avaliada criteriosamente com base em três fatores:
*   O **tipo de informação** que se deseja extrair.
*   O **momento** do ciclo de vida em que o projeto se encontra.
*   A **situação** específica e a disponibilidade dos stakeholders.

