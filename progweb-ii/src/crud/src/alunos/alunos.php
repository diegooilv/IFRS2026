<?php
$conn = mysqli_connect("mysql", "root", "1234", "prog_internet");

if (!$conn) {
    die("Erro de conexão: " . mysqli_connect_error());
}

$sql = "SELECT * FROM alunos";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Alunos</title>

    <style>
        body {
            background: #f4e6c1;
            font-family: "Courier New", monospace;
            color: #4b2e20;
            padding: 30px;
        }

        h1 {
            text-align: center;
            color: #8b4513;
            font-size: 40px;
            letter-spacing: 4px;
        }

        .aluno {
            background: #fff4d6;
            border: 5px double #8b4513;
            border-radius: 15px;
            width: 60%;
            margin: 25px auto;
            padding: 25px;
            box-shadow: 8px 8px 0px #c47a44;
        }

        .info {
            font-size: 18px;
            line-height: 1.6;
        }

        .nome {
            color: #d2691e;
            font-size: 25px;
            font-weight: bold;
        }

        hr {
            border: none;
            border-top: 3px dashed #8b4513;
        }

        .tag {
            background: #e8a15a;
            color: white;
            padding: 5px 10px;
            border-radius: 20px;
        }
    </style>

</head>

<body>

    <h1>★ Cadastro de Alunos ★</h1>

    <?php

    if ($result) {

        while ($row = mysqli_fetch_assoc($result)) {

            echo "<div class='aluno'>";

            echo "<div class='info'>";

            echo "<div class='nome'>" . $row['nome'] . "</div>";

            echo "ID: " . $row['id'] . "<br>";
            echo "Nascimento: " . $row['nascimento'] . "<br>";
            echo "Email: " . $row['email'] . "<br>";

            echo "Curso: ";

            switch ($row['curso']) {
                case 1:
                    echo "<span class='tag'>Administração</span>";
                    break;

                case 2:
                    echo "<span class='tag'>Agropecuária</span>";
                    break;

                default:
                    echo "<span class='tag'>Informática</span>";
                    break;
            }

            echo "<br>";
            echo "Turno: ";
            if ($row['turno'] == "t") {
                echo "Tarde";
            } else if ($row['turno'] == "m") {
                echo "Manhã";
            } else {
                echo "Noite";
            }
            echo "<br><br>";

            echo "<b>Preferências:</b><br>";

            echo ($row['programacao'] > 0) ? "💻 Programação<br>" : "";
            echo ($row['banco_dados'] > 0) ? "🗄 Banco de dados<br>" : "";
            echo ($row['redes'] > 0) ? "🌐 Redes<br>" : "";
            echo ($row['eng_software'] > 0) ? "⚙ Engenharia de software<br>" : "";

            echo "</div>";
            echo "</div>";
        }

    } else {
        echo "Erro: " . mysqli_error($conn);
    }

    mysqli_close($conn);

    ?>

</body>

</html>