<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Lista de Exercícios Práticos</title>
</head>

<body>

    <h1>Lista de Exercícios Práticos</h1>

    <section>
        <h2>Exercício 01: Registro de Acesso</h2>
        <p>
            Faça uma página que armazena a data e horário que o usuário
            acessou a página e em seguida, mostre essa informação em outra
            página.
        </p>
        <h3>Arquivos do Exercício:</h3>
        <ul>
            <li><a href="./01/hora.php">hora.php</a> (Registra o acesso)</li>
            <li><a href="./01/verhora.php">verhora.php</a> (Exibe o acesso)</li>
        </ul>
    </section>

    <hr>

    <section>
        <h2>Exercício 02: Sistema de Login</h2>
        <p>
            Crie uma página de login, contendo dois campos: usuário (email) e
            senha (password). Ao clicar em enviar, deve ser verificado se o
            usuário é “admin” e a senha inserida é “1234”. Caso o login seja
            bem sucedido, deve ser criada uma variável de sessão e deve ser
            feito o redirecionamento para a página dashboard.php, senão,
            deve ser apresentada uma mensagem de login incorreto.
        </p>
        <p>Requisito adicional:</p>
        <ul>
            <li>Na página dashboard.php, crie um link para o botão de sair (logout.php)</li>
        </ul>
        <h3>Arquivos do Exercício:</h3>
        <ul>
            <li><a href="./02/login.php">login.php</a></li>
            <li><a href="./02/dashboard.php">dashboard.php</a></li>
            <li><a href="./02/logout.php">logout.php</a></li>
        </ul>
    </section>

    <hr>

    <section>
        <h2>Exercício 03: Carrinho de Compras</h2>
        <p>
            Crie um sistema simples que deverá permitir adicionar produtos a um carrinho
            e listar os itens adicionados, mantendo os dados armazenados durante a
            navegação do usuário. A página deve possuir um formulário com: nome do
            produto, quantidade e o botão “Adicionar”.
        </p>
        <h3>Arquivos do Exercício:</h3>
        <ul>
            <li><a href="./03/addproduto.php">addproduto.php</a></li>
            <li><a href="./03/verprodutos.php">verprodutos.php</a></li>
            <li><a href="./03/apagarprodutos.php">apagarprodutos.php</a></li>
        </ul>
    </section>

</body>

</html>