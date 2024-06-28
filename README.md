# Gerador de Currículo Online

Este projeto consiste em um trabalho feito para o curso superior de Análise e Desenvolvimento de sistemas da UNIPAR (Universidade Paranaênse)
Aluno que desenvolveu: Anderson Poltronieri da Luz.

## Protótipo

O projeto "Gerador de Currículo Online" é uma aplicação web desenvolvida para simplificar a criação de currículos profissionais. O principal objetivo é fornecer uma interface intuitiva e amigável que permita aos usuários inserir suas informações pessoais e profissionais de maneira organizada, gerando um currículo formatado e pronto para impressão.

## Acesse o protótipo de fidelidade no Figma pelo link: 
- https://www.figma.com/design/pv2AJOdhuFNKvMsTI12Adq/Untitled?node-id=14-531&t=Zxzr349yvC96bhqq-0 

### Componentes Principais

#### Botões

- **Botão "Adicionar Texto"**: Este botão permite ao usuário adicionar texto às áreas específicas do currículo. Ele é projetado para ser visível e acessível, com feedback visual ao ser clicado.
- **Botão "Limpar Texto"**: Facilita a exclusão rápida do texto inserido, ajudando a manter o documento organizado.
- **Botão "Gerar Currículo"**: Inicia o processo de geração do currículo finalizado. Este botão é destacado para chamar a atenção do usuário.
- **Botão "Como Usar"**: Direciona o usuário para um guia de uso detalhado, ajudando a resolver possíveis dúvidas e melhorando a experiência do usuário.
- **Botão "Documentação"**: Fornece acesso à documentação técnica do projeto.

#### Áreas de Texto

- **Seções de Inserção de Texto**: As áreas de texto são onde os usuários inserem suas informações pessoais, como nome, idade, email, apresentação, formação, qualificações e experiências profissionais. Essas áreas são bem definidas e organizadas para facilitar a entrada de dados.

#### Layout Principal

- **Layout Principal**: O layout é projetado para ser limpo e sem distrações, utilizando uma paleta de cores suave e uma tipografia legível. A organização do conteúdo é pensada para guiar o usuário através do processo de criação do currículo de forma lógica e eficiente.

### Protótipos e Componentes Visuais

Abaixo estão alguns exemplos visuais dos componentes e do layout do projeto:

![image](https://github.com/the1ander/resume_generator_php/assets/151629165/16ba8299-babd-44cb-8bab-79074260f271)


Esses componentes foram cuidadosamente projetados para atender aos princípios de design de UX/UI, oferecendo uma experiência agradável e eficiente para o usuário.

#### Exibição do Currículo

- **Áreas de Exibição**: Após a inserção dos dados, as informações são exibidas em áreas específicas que replicam o formato final do currículo. Isso permite ao usuário visualizar o resultado antes de gerar o documento final.

![image](https://github.com/the1ander/resume_generator_php/assets/151629165/a7590ded-a873-4d9e-82cb-d8429b79be21)

# Gerador de Currículos

## Áreas de Exibição pós gerar o currículo e pré-print

Depois de confirmar os dados o usuário ainda tem mais uma pré-visualização que vai coletar estes dados e preparar para impressão, esta, extremamente fiel ao PDF gerado.

| Pré-Visualização | PDF |
|------------------|-----|
| **Pré-view**: | **PDF**: |
| ![image](https://github.com/the1ander/resume_generator_php/assets/151629165/eb11df7d-fc98-4db9-b666-e6f726c4733a) | ![image](https://github.com/the1ander/resume_generator_php/assets/151629165/c55f4ec8-983f-4913-ad90-4fb02913a11a) |





### Objetivo do Gerador de Currículos

O principal objetivo do Gerador de Currículo Online é facilitar a criação de currículos profissionais sem a necessidade de conhecimentos técnicos em design ou formatação de documentos. A ferramenta é especialmente útil para:

- **Estudantes e recém-formados**: Que estão criando seus primeiros currículos.
- **Profissionais em transição de carreira**: Que precisam atualizar ou reformular seus currículos.
- **Qualquer pessoa que queira um currículo bem formatado**: Sem investir muito tempo em softwares de edição de texto.

### UX e UI

A experiência do usuário (UX) e a interface do usuário (UI) são fundamentais no design deste projeto. Alguns dos aspectos que foram considerados incluem:

#### UX (User Experience)

- **Facilidade de Uso**: A aplicação é projetada para ser intuitiva, com instruções claras e botões bem posicionados. As funções são autoexplicativas, minimizando a curva de aprendizado.
- **Feedback do Usuário**: Elementos interativos, como botões e áreas de texto, fornecem feedback imediato (visual e funcional) ao serem usados, como mudanças de cor ao passar o mouse ou ao clicar.
- **Acessibilidade**: O design leva em conta a acessibilidade, garantindo que todas as funções sejam acessíveis via teclado e que o contraste de cores seja adequado para usuários com deficiência visual.

#### UI (User Interface)

- **Design Limpo e Simples**: Utilização de um layout minimalista, com bastante espaço em branco para evitar sobrecarregar o usuário com informações.
- **Consistência Visual**: Uso consistente de cores, tipografia e espaçamentos para criar uma experiência coesa e profissional.

### Dowload do Protótipo de fidelidade em PDF:

- [Resume_genetator.pdf](https://github.com/user-attachments/files/16032229/Resume_genetator.pdf)

- Print do Protótipo de fidelidade no figma:
 ![image](https://github.com/the1ander/resume_generator_php/assets/151629165/ee08866f-749b-41d8-ad80-a74bc8526702)

# Guia do Usuário - Currículo Online

## Introdução

Bem-vindo ao nosso software de criação de currículos online. Este guia foi criado para ajudá-lo a entender como utilizar todas as funcionalidades disponíveis para criar e imprimir seu currículo de maneira rápida e eficiente.

## Passo 1: Acesso à Ferramenta

Para acessar a ferramenta de criação de currículos, basta abrir o arquivo `index.html` em seu navegador. Você verá a tela inicial onde poderá inserir suas informações pessoais e profissionais.

## Passo 2: Inserção de Dados

Preencha os campos disponíveis com suas informações:

- **Nome**: Digite seu nome completo no campo de texto.
- **Idade**: Informe sua idade.
- **E-mail**: Insira seu endereço de e-mail.
- **Apresentação**: Escreva uma breve apresentação sobre você.
- **Formação**: Informe sua formação acadêmica.
- **Qualificações**: Liste suas qualificações e habilidades.
- **Experiências**: Descreva suas experiências profissionais.

## Passo 3: Adicionar Informações

Utilize os botões de ação para adicionar, limpar ou deletar informações conforme necessário:

- **Adicionar**: Clique no botão ![Adicionar](https://via.placeholder.com/80x20.png?text=Adicionar) para inserir as informações no currículo.
- **Deletar**: Clique no botão ![Deletar](https://via.placeholder.com/80x20.png?text=Deletar) para remover informações inseridas.

## Passo 4: Gerar Currículo

Depois de inserir todas as informações, clique no botão ![Gerar Currículo](https://via.placeholder.com/120x30.png?text=Gerar+Curr%C3%ADculo) para enviar os dados e gerar a visualização do currículo.

## Passo 5: Imprimir Currículo

Na página de visualização do currículo, você verá um botão ![Imprimir Currículo](https://via.placeholder.com/150x30.png?text=Imprimir+Curr%C3%ADculo). Clique nele para ocultar o botão e abrir a caixa de diálogo de impressão do seu navegador. Siga as instruções para imprimir seu currículo.

## Conclusão

Esperamos que este guia tenha sido útil. Se você tiver qualquer dúvida ou encontrar algum problema, não hesite em entrar em contato com nosso suporte técnico.

**Suporte**: [andr.poltronieri@gmail.com](mailto:andr.poltronieri@gmail.com)




