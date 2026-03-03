<form method="post">
    <input type="number" name="number" id="number">
    <input type="submit" value="Enviar">
</form>

<?php
function primoVerify($number)
{
    for ($i = 2; $i < $number; $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }
    return true;
}
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $number = (int) $_POST["number"];
    for ($i = 0; $i < 10; $i++) {
        $num = $number + $i;
        if (primoVerify($num)) {
            echo "{$num} é primo<br>";
        }
    }
}