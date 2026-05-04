<?php
//  hambúrguer (R$ 15,00), batata frita (R$ 10,00), refrigerante (R$ 8,00) e sobremesa (R$ 12,00).
?>

<form method="POST">
    <label for="nome">Digite seu nome:</label>
    <input type="text" name="nome" id="nome">
    <br>
    <label for="h">Hambúrguer</label>
    <input type="checkbox" name="compras[]" id="h" value="h">
    <br>
    <label for="b">Batata Frita</label>
    <input type="checkbox" name="compras[]" id="b" value="b">
    <br>
    <label for="r">Refrigerante</label>
    <input type="checkbox" name="compras[]" id="r" value="r">
    <br>
    <label for="s">Sobremesa</label>
    <input type="checkbox" name="compras[]" id="s" value="s">
    <br>
    <label for="pagamento">Meio de Pagamento:</label>
    <select name="pagamento" id="pagamento">
        <option value="pix">Pix</option>
        <option value="dinheiro" selected>Dinheiro</option>
        <option value="cartao">Cartao de Crédito</option>
    </select>

    <button type="submit">Comprar</button>
</form>


<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'] ?? null;

    if (!$nome) {
        echo "<script>window.alert(\"Insira seu nome!\");</script>";
        exit();
    }

    $compras = $_POST['compras'] ?? [];

    if (count($compras) < 1) {
        echo "<script>window.alert(\"Compre alguma coisa!\");</script>";
        exit();
    }

    $valor = 0;
    foreach ($compras as $compra) {
        switch ($compra) {
            case 'h':
                $valor += 15;
                break;
            case 'b':
                $valor += 10;
                break;
            case 'r':
                $valor += 8;
                break;
            case 's':
                $valor += 12;
                break;
            default:
                break;
        }
    }
    ;

    $pagamento = $_POST['pagamento'] ?? null;
    $desconto = 0;
    if ($pagamento === 'dinheiro') {
        $desconto = $valor * 0.05;
    }

    echo "<br>Valor total: R$ " . sprintf("%.1f", $valor);
    echo "<br>Valor descontado: R$ " . sprintf("%.1f", $desconto);
    echo "<br>Valor Final: R$ " . sprintf("%.1f", ($valor - $desconto));
}
