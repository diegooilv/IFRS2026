<form method="POST">
    <label for="nome">Digite seu nome:</label>
    <input type="text" name="nome" id="nome">
    <br>
    <input type="checkbox" id="agua" name="habitos[]" value="agua">
    <label for="agua">Beber água</label><br>

    <input type="checkbox" id="exercicios" name="habitos[]" value="exercicios">
    <label for="exercicios">Praticar exercícios físicos</label><br>

    <input type="checkbox" id="sono" name="habitos[]" value="sono">
    <label for="sono">Dormir bem</label><br>

    <input type="checkbox" id="alimentacao" name="habitos[]" value="alimentacao">
    <label for="alimentacao">Alimentar-se de forma saudável</label><br>

    <input type="checkbox" id="celular" name="habitos[]" value="celular">
    <label for="celular">Evitar uso excessivo de celular</label>

    <hr>
    <button type="submit">Enviar</button>
</form>

<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $nome = $_POST['nome'] ?? null;

    if (!$nome) {
        echo "<script>window.alert(\"Insira seu nome!\");</script>";
        exit();
    }

    $habitos = $_POST['habitos'] ?? null;

    if (!$habitos) {
        echo "<script>window.alert(\"Selecione pelo menos um hábito!\");</script>";
        exit();
    }
    if (count($habitos) < 2) {
        echo "Não saudável";
        exit();
    } else if (count($habitos) < 4) {
        echo "Moderado";
        exit();
    } else {
        echo "Saudável";
        exit();
    }
}
