<form method="POST">
    <input type="number" name="num" id="num" min="1" placeholder="Número de primos" max="1000" style="width:150px;">
    <input type="submit" value="Enviar">
</form>

<?php

function verificar_primo($num)
{
    for ($i = 2; $i < $num; $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }
    return true;
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $num = (int) $_POST["num"];
    for ($i = 0; $i < $num; $i++) {
        if(verificar_primo($i)){
            echo $i . "<br>";
        }
    }
}

