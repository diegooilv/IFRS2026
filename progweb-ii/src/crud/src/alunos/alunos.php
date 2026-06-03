<?php
$conn = mysqli_connect("mysql", "root", "1234", "prog_internet");

if(!$conn){
    die("Erro de conexão: " . mysqli_connect_error());
}

$sql = "SELECT * FROM alunos";
$result = mysqli_query($conn, $sql);

if($result){

    while($row = mysqli_fetch_assoc($result)){
        echo "ID: " . $row['id'] . "<br>";
        echo "Nome: " . $row['nome'] . "<br>";
        echo "Nascimento: " . $row['nascimento'] . "<br>";
        echo "Email: " . $row['email'] . "<br>";
        echo "Curso: " . $row['curso'] . "<br>";
        echo "Turno: " . $row['turno'] . "<br>";
        echo "Programação: " . $row['prog'] . "<br>";
        echo "Banco de dados: " . $row['banco'] . "<br>";
        echo "Redes: " . $row['redes'] . "<br>";
        echo "Engenharia: " . $row['engenharia'] . "<br>";
        echo "<hr>";
    }

} else {
    echo "Erro: " . mysqli_error($conn);
}

mysqli_close($conn);