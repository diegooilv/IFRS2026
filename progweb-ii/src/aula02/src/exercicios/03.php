<form method="post">
    <input type="number" name="number" id="number">
    <input type="submit" value="Enviar">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $numero = (int) $_POST["number"];
    if ($numero === 0) {
        echo "É zero mano";
        return;
    } elseif ($numero > 0) {
        echo "É postivo";
        return;
    } else {
        echo "É negativo";
        return;
    }

}