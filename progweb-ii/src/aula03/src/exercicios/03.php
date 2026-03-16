<form method="POST">
    <input type="number" name="n1" id="n1" step="0.01" placeholder="N1">
    <input type="submit" value="Enviar">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $n1 = $_POST["n1"];
    echo "<h2>Mulher</h2> <p>" . number_format(($n1*62.1) - 44.7) . " Kg</p>";
    echo "<h2>Homem</h2> <p>" . number_format(($n1 * 72.6) - 58) . " Kg</p>";
}