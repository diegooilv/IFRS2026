<?php
require_once __DIR__ . "/database/models/User.php";
$title = "Usuários"
    ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <lang="pt-br">
        <title><?= $title ?></title>

        <link rel="stylesheet" href="style/table.css">
</head>

<?php
$user = new User();

$users = $user->getAllUsers();
echo "<table border='1'>
        <tr>
            <th>Nome</th>
            <th>Email</th>
        </tr>";
for ($i = 0; $i < count($users); $i++) {
    echo "<tr><td>" . $users[$i]["userName"] . "</td><td>" . $users[$i]["email"] . "</td></tr>";
}