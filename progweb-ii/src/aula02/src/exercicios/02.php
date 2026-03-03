<form method="POST">
    <input type="number" name="num" id="aulas">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $numero = $_POST["num"];
    if ($numero % 2 === 0) {
        echo "É par";
    } else {
        echo "É impar";
    }
}