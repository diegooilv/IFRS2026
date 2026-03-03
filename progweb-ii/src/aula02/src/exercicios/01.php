<form method="POST">
    <input type="number" name="aulas" id="aulas">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if ($_POST["aulas"] > 120 || $_POST["aulas"] < 0) {
        echo "Usa certo macaco";
        return;
    }
    echo "Cálculos:<br>";
    echo ($_POST["aulas"] . " * 120<br>");
    echo ($_POST["aulas"] * 120) . " / 100<br>";
    echo ($_POST["aulas"] * 100 / 120) . "<br>";
    $numero = $_POST["aulas"] * 100 / 120;
    $numero = number_format($numero, 2);
    echo "Aulas: " . $numero . "%<br><br>";
}