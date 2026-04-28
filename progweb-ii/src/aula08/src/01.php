<?php
if(empty($_GET["numero"])){
    echo "<p>?numero=valor</p>";
    return;
}

if(!is_numeric($_GET["numero"])){
    echo "<p>Use número!</p>";
    return;
}

$numero = (int) $_GET["numero"];
if($numero % 2 == 0){
    echo "<p>É par!</p>";
}else{
    echo "<p>É ímpar!<p>";
}