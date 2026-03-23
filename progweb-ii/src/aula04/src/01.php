<form method="post">
    <input type="number" name="nota" step="0.1" min="0" max="10" required>
    <button type="submit">Enviar</button>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $nota = $_POST['nota'];

    if ($nota >= 9 && $nota <= 10) {
        echo "A";
    } elseif ($nota >= 7) {
        echo "B";
    } elseif ($nota >= 5) {
        echo "C";
    } elseif ($nota >= 3) {
        echo "D";
    } else {
        echo "F";
    }
}
