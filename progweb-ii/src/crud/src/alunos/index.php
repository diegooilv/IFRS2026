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
        body{
            background: linear-gradient(-45deg,#0d6efd,#6610f2,#20c997,#0dcaf0);
            background-size: 400% 400%;
            animation: gradientAnimation 15s ease infinite;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 30px;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        @keyframes gradientAnimation{
            0%{background-position:0% 50%;}
            50%{background-position:100% 50%;}
            100%{background-position:0% 50%;}
        }

        form{width:100%; max-width:750px;}
        fieldset{
            background: rgba(255,255,255,.95);
            backdrop-filter: blur(12px);
            border: none;
            border-radius: 25px;
            padding: 40px;
            box-shadow: 0 20px 60px rgba(0,0,0,.15), 0 0 20px rgba(255,255,255,.2);
            animation: fadeUp .8s ease;
            transition: all .4s ease;
        }
        fieldset:hover{
            transform: translateY(-5px);
            box-shadow: 0 30px 70px rgba(0,0,0,.2), 0 0 30px rgba(13,110,253,.2);
        }
        @keyframes fadeUp{
            from{opacity:0; transform:translateY(40px);}
            to{opacity:1; transform:translateY(0);}
        }

        legend{
            color:#0d6efd;
            font-size:2rem;
            font-weight:700;
            margin-bottom:25px;
            transition:.4s;
        }
        legend:hover{letter-spacing:1px;}

        label{
            font-weight:600;
            color:#495057;
            margin-bottom:8px;
            display:block;
        }

        .form-control,
        .form-select{
            border:2px solid #dee2e6;
            border-radius:12px;
            padding:12px 15px;
            transition: all .3s ease;
            background:#fff;
        }
        .form-control:hover,
        .form-select:hover{border-color:#86b7fe;}
        .form-control:focus,
        .form-select:focus{
            border-color:#0d6efd;
            transform:scale(1.02);
            box-shadow: 0 0 0 .25rem rgba(13,110,253,.2),0 10px 20px rgba(13,110,253,.1);
        }

        input[type="date"]::-webkit-calendar-picker-indicator{
            cursor:pointer;
            transition:.3s;
        }
        input[type="date"]::-webkit-calendar-picker-indicator:hover{
            transform:scale(1.2);
        }

        .section-title{
            font-size:1rem;
            font-weight:700;
            color:#0d6efd;
            margin-top:25px;
            margin-bottom:10px;
            display:inline-block;
            position:relative;
        }
        .section-title::after{
            content:"";
            position:absolute;
            bottom:-5px;
            left:0;
            width:0;
            height:3px;
            background:#0d6efd;
            border-radius:10px;
            transition:.4s;
        }
        .section-title:hover::after{width:100%;}

        .form-check{
            padding:12px;
            border-radius:12px;
            transition:.3s;
        }
        .form-check:hover{
            background:#f8f9fa;
            transform:translateX(8px);
            box-shadow:0 5px 15px rgba(0,0,0,.05);
        }
        .form-check-input{
            cursor:pointer;
            width:1.2em;
            height:1.2em;
            transition:all .3s ease;
        }
        .form-check-input:hover{transform:scale(1.15);}
        .form-check-input:checked{
            transform:scale(1.25);
            box-shadow:0 0 15px rgba(13,110,253,.4);
        }
        .form-check-label{
            cursor:pointer;
            transition:.3s;
        }
        .form-check:hover .form-check-label{
            color:#0d6efd;
            font-weight:600;
        }

        .btn-custom{
            width:100%;
            padding:14px;
            border:none;
            border-radius:15px;
            font-size:1.1rem;
            font-weight:700;
            letter-spacing:.5px;
            position:relative;
            overflow:hidden;
            transition:.4s;
        }
        .btn-custom:hover{
            transform:translateY(-3px);
            box-shadow:0 15px 30px rgba(13,110,253,.4);
        }
        .btn-custom:active{transform:scale(.98);}
        .btn-custom::before{
            content:"";
            position:absolute;
            top:0;
            left:-150%;
            width:100%;
            height:100%;
            background: linear-gradient(120deg, transparent, rgba(255,255,255,.5), transparent);
            transition:.8s;
        }
        .btn-custom:hover::before{left:150%;}

        @media(max-width:768px){
            fieldset{padding:25px;}
            legend{font-size:1.6rem;}
            .btn-custom{font-size:1rem;}
        }
    </style>
</head>
<body>

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
                <option>Técnico em administração</option>
                <option>Técnico em agropecuária</option>
                <option>Técnico em informática</option>
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
            <input class="form-check-input" type="checkbox" name="interesses[]" value="engenharia_de_software" id="eng">
            <label class="form-check-label" for="eng">Engenharia de software</label>
        </div>

        <input type="submit" name="enviar" value="Cadastrar aluno" class="btn btn-primary btn-custom">

    </fieldset>
</form>

</body>
</html>

<?php
if($_SERVER['REQUEST_METHOD'] === "POST"){

   try{
        $conn = mysqli_connect("mysql", "root", "1234");
        mysqli_select_db($conn, "prog_internet");
   }catch(mysql_exception $e){
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

    $sql = "INSERT INTO alunos (nome, nascimento, email, turno, curso, prog, banco, redes, engenharia)
            VALUES ('$nome', '$nascimento', '$email', '$turno', '$curso', $prog, $banco, $redes, $engenharia)";

    if(mysqli_query($conn, $sql)){
        echo "Aluno cadastrado com sucesso!";
    } else {
        echo "Erro: " . mysqli_error($conn);
    }

    mysqli_close($conn);
}