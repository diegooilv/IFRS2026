<?php
session_start();
?>

<ul>
    <?php foreach ($_SESSION['produtos'] as $nome => $quantidade): ?>
        <li>
            Produto: <?php echo $nome; ?> -
            Quantidade: <?php echo $quantidade; ?>
        </li>
    <?php endforeach; ?>
</ul>

<a href="./apagarprodutos.php">apagarprodutos.php</a>