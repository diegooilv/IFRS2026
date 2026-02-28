<?php

require_once __DIR__ . "/../connect.php";

$pdo = connectDb();

$sql = file_get_contents(__DIR__ . "/users.sql");

$pdo->exec($sql);

echo "Tabela criada com sucesso!";