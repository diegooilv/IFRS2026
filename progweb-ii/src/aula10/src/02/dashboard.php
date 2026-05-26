<?php

session_start();

if (isset($_SESSION['nome'])) {
    echo "Sucesso";
    echo "<br> <a href=\"./logout.php\">Sair</a>";
}