<?php
session_start();

if (!isset($_SESSION["user"])) {
    header("Location: login.php");
    exit;
}
?>

<meta charset="UTF-8">
<link rel="stylesheet" href="./profile.style.css">

<?php


$user = $_SESSION["user"];

// htmlspecialchars($user[""], ENT_QUOTES, "UTF-8")
echo "<h1>Seu Perfil " . htmlspecialchars(ucwords($user["nome"]), ENT_QUOTES, "UTF-8") . "</h1>";
echo "<div class=\"perfil\">";
echo "<p class=\"email\">Seu email: " . htmlspecialchars($user["email"], ENT_QUOTES, "UTF-8") . "</p>";
echo "<p>Sua idade: " . htmlspecialchars($user["idade"], ENT_QUOTES, "UTF-8") . "</p>";
echo "<p>Seu gênero: " . htmlspecialchars(ucwords($user["genero"]), ENT_QUOTES, "UTF-8");
if (count($user["interesses"]) > 0) {
    echo "<h2>Seus Interesses:</h2>";
}
foreach ($user["interesses"] as $interesse) {
    echo "<p>" . htmlspecialchars(ucwords($interesse), ENT_QUOTES, "UTF-8");
}

echo "</div>";

?>

<button type="button" onclick="sair()">Sair</button>

<footer>
    <a href="https://github.com/diegooilv/IFRS2025/"><img src="./img/github.svg" alt="github svg"></a>
</footer>

<script>
    function sair() {
        window.location.href = 'logout.php';
    }
</script>