<?php
// Gerado por IA: css
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Adicionando novo aluno</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            margin: 0;
            padding: 0px 10px;
            background: #000080;
            background-image:
                repeating-linear-gradient(45deg,
                    #000080,
                    #000080 20px,
                    #0000aa 20px,
                    #0000aa 40px);
            font-family: "Comic Sans MS", Verdana, Arial, sans-serif;
            color: #fff;
            cursor: crosshair;
            margin: 0;
        }

        a {
            color: #00ffff;
            font-weight: bold;
            text-decoration: underline;
        }

        a:visited {
            color: #ff00ff;
        }

        a:hover {
            background: yellow;
            color: black;
        }

        form {
            max-width: 800px;
            margin: auto;
        }

        fieldset {
            background: #c0c0c0;
            border: 4px ridge #fff;
            padding: 25px;
            box-shadow:
                10px 10px 0 #000,
                15px 15px 20px rgba(0, 0, 0, .5);
        }

        legend {
            width: 100%;
            background: linear-gradient(to right, #000080, #1084d0);
            color: white;
            padding: 8px 12px;
            font-size: 24px;
            font-weight: bold;
            border: 2px outset white;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            color: yellow;
            text-shadow:
                2px 2px 0 red,
                4px 4px 0 blue;
        }

        p {
            line-height: 1.5;
        }

        label {
            display: block;
            color: black;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .section-title {
            color: yellow;
            font-size: 18px;
            font-weight: bold;
            margin: 20px 0 10px;
            text-shadow:
                2px 2px 0 red,
                4px 4px 0 blue;
        }

        .form-control,
        .form-select,
        input[type="text"],
        input[type="email"],
        input[type="password"],
        input[type="date"],
        input[type="number"],
        textarea,
        select {
            width: 100%;
            box-sizing: border-box;
            padding: 6px;
            background: white;
            color: black;
            border: 3px inset #c0c0c0;
            border-radius: 0;
            font-family: "Courier New", monospace;
            font-size: 14px;
        }

        .form-control:focus,
        .form-select:focus,
        input:focus,
        textarea:focus,
        select:focus {
            outline: 2px dotted red;
            background: #ffffcc;
        }

        textarea {
            resize: vertical;
        }

        .form-check {
            margin: 8px 0;
        }

        .form-check-label {
            color: black;
            font-weight: bold;
        }

        .form-check-input,
        input[type="checkbox"],
        input[type="radio"] {
            transform: scale(1.2);
            accent-color: #000080;
        }

        button,
        input[type="submit"],
        input[type="reset"],
        input[type="button"],
        .btn-custom {
            width: 100%;
            padding: 12px;
            background: silver;
            color: black;
            font-size: 18px;
            font-weight: bold;
            font-family: "Comic Sans MS", sans-serif;
            border: 4px outset white;
            cursor: pointer;
        }

        button:hover,
        input[type="submit"]:hover,
        input[type="reset"]:hover,
        input[type="button"]:hover,
        .btn-custom:hover {
            background: #e5e5e5;
        }

        button:active,
        input[type="submit"]:active,
        input[type="reset"]:active,
        input[type="button"]:active,
        .btn-custom:active {
            border: 4px inset white;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background: white;
            color: black;
        }

        th {
            background: navy;
            color: white;
            padding: 8px;
            border: 2px groove white;
        }

        td {
            padding: 8px;
            border: 2px inset silver;
        }

        ul {
            list-style: square;
        }

        ol {
            list-style-type: upper-roman;
        }

        hr {
            border: none;
            border-top: 3px groove white;
            margin: 20px 0;
        }

        img {
            border: 4px ridge white;
            padding: 2px;
            background: black;
        }

        marquee {
            background: black;
            color: yellow;
            font-weight: bold;
            padding: 5px;
            border: 2px solid yellow;
        }

        .wordart {
            text-align: center;
            font-size: 42px;
            font-weight: bold;
            color: #ffff00;
            text-transform: uppercase;
            text-shadow:
                2px 2px 0 red,
                4px 4px 0 blue,
                6px 6px 0 lime,
                8px 8px 10px black;
        }

        .blink {
            animation: blink .8s infinite;
        }

        @keyframes blink {
            50% {
                opacity: 0;
            }
        }

        .rainbow {
            animation: rainbow 2s linear infinite;
        }

        @keyframes rainbow {
            0% {
                color: red;
            }

            20% {
                color: yellow;
            }

            40% {
                color: lime;
            }

            60% {
                color: cyan;
            }

            80% {
                color: magenta;
            }

            100% {
                color: red;
            }
        }

        .notice {
            background: black;
            border: 3px dashed yellow;
            padding: 10px;
            margin: 15px 0;
            color: #00ff00;
            font-family: "Courier New", monospace;
        }

        .counter {
            display: inline-block;
            background: black;
            color: lime;
            border: 3px inset silver;
            padding: 4px 8px;
            font-family: "Courier New", monospace;
            letter-spacing: 2px;
        }

        .under-construction {
            background: red;
            color: yellow;
            text-align: center;
            padding: 10px;
            font-size: 20px;
            font-weight: bold;
            animation: blink 1s infinite;
        }

        .guestbook {
            background: #fffacd;
            color: black;
            border: 3px ridge black;
            padding: 15px;
        }

        .footer {
            text-align: center;
            color: yellow;
            font-size: 12px;
            margin-top: 20px;
        }

        .star {
            color: yellow;
            animation: spin 4s linear infinite;
            display: inline-block;
        }

        @keyframes spin {
            from {
                transform: rotate(0deg);
            }

            to {
                transform: rotate(360deg);
            }
        }

        .y2k {
            background: linear-gradient(90deg, #ff00ff, #00ffff, #ffff00, #ff00ff);
            background-size: 400% 400%;
            color: black;
            font-weight: bold;
            padding: 10px;
            animation: y2kmove 4s linear infinite;
        }

        @keyframes y2kmove {
            0% {
                background-position: 0% 50%;
            }

            100% {
                background-position: 100% 50%;
            }
        }

        @media(max-width:768px) {
            body {
                padding: 10px;
            }

            fieldset {
                padding: 15px;
            }

            legend {
                font-size: 18px;
            }

            .wordart {
                font-size: 28px;
            }

            button,
            .btn-custom {
                font-size: 16px;
            }
        }
    </style>
</head>

<body>
    <div class="under-construction">
🚧 EM CONSTRUÇÃO 🚧
</div>

<marquee scrollamount="8">
⭐ Bem-vindo ao meu site pessoal ⭐ Melhor visualizado em 800x600 ⭐
</marquee>

<h1 class="wordart">CADASTRO</h1>

<p class="rainbow">Você está navegando na super internet!</p>

<div class="notice">
Atenção: Netscape Navigator recomendado.
</div>

<p>
Visitante número:
<span class="counter">000123456</span>
</p>

<div class="y2k">
ULTIMAS NOVIDADES DA HOMEPAGE
</div>

<p class="blink">
NOVO!!! CLIQUE AQUI!!!
</p>
    <form method="POST">
        <fieldset>
            <legend>🎓 Adicionando novo estudante</legend>

            <div class="mb-3">
                <label>Nome</label>
                <input type="text" name="nome" class="form-control">
            </div>

            <div class="mb-3">
                <label>Nascimento</label>
                <input type="date" name="nascimento" class="form-control">
            </div>

            <div class="mb-3">
                <label>E-mail</label>
                <input type="email" name="email" class="form-control">
            </div>

            <div class="mb-3">
                <label>Curso</label>
                <select name="curso" class="form-select">
                    <option value="1">Técnico em administração</option>
                    <option value="2">Técnico em agropecuária</option>
                    <option value="3">Técnico em informática</option>
                </select>
            </div>

            <div class="section-title">📅 Turno</div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="turno" value="m" id="manha">
                <label class="form-check-label" for="manha">Manhã</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="turno" value="t" id="tarde">
                <label class="form-check-label" for="tarde">Tarde</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="turno" value="n" id="noite">
                <label class="form-check-label" for="noite">Noite</label>
            </div>

            <div class="section-title">💡 Áreas de interesse</div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="interesses[]" value="programacao" id="prog">
                <label class="form-check-label" for="prog">Programação</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="interesses[]" value="banco_de_dados" id="bd">
                <label class="form-check-label" for="bd">Banco de dados</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="interesses[]" value="redes" id="redes">
                <label class="form-check-label" for="redes">Redes de computadores</label>
            </div>
            <div class="form-check mb-4">
                <input class="form-check-input" type="checkbox" name="interesses[]" value="engenharia_de_software"
                    id="eng">
                <label class="form-check-label" for="eng">Engenharia de software</label>
            </div>

            <input type="submit" name="enviar" value="Cadastrar aluno" class="btn btn-primary btn-custom">

        </fieldset>
    </form>

</body>

</html>

<?php
if ($_SERVER['REQUEST_METHOD'] === "POST") {

    try {
        $conn = mysqli_connect("mysql", "root", "1234");
        mysqli_select_db($conn, "prog_internet");
    } catch (mysql_exception $e) {
        echo "Deu erro";
    }

    $nome = $_POST['nome'];
    $nascimento = $_POST['nascimento'];
    $email = $_POST['email'];
    $curso = $_POST['curso'];
    $turno = $_POST['turno'];

    $prog = in_array('programacao', $_POST['interesses'] ?? []) ? 1 : 0;
    $banco = in_array('banco_de_dados', $_POST['interesses'] ?? []) ? 1 : 0;
    $redes = in_array('redes', $_POST['interesses'] ?? []) ? 1 : 0;
    $engenharia = in_array('engenharia_de_software', $_POST['interesses'] ?? []) ? 1 : 0;

    $sql = "INSERT INTO alunos (nome, nascimento, email, turno, curso, progamacao, banco_dados, redes, eng_software)
            VALUES ('$nome', '$nascimento', '$email', '$turno', '$curso', $prog, $banco, $redes, $engenharia)";

    if (mysqli_query($conn, $sql)) {
        echo "Aluno cadastrado com sucesso!";
    } else {
        echo "Erro: " . mysqli_error($conn);
    }

    mysqli_close($conn);
}