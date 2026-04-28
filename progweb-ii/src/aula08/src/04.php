<form method="POST">
  <h1>Escolha seus esportes favoritos:</h1>
  <label>
    <input type="checkbox" name="esportes[]" value="natacao">
    Natação
  </label><br>

  <label>
    <input type="checkbox" name="esportes[]" value="futebol">
    Futebol
  </label><br>

  <label>
    <input type="checkbox" name="esportes[]" value="volei">
    Vôlei
  </label><br>

  <label>
    <input type="checkbox" name="esportes[]" value="basquete">
    Basquete
  </label><br>
  <label>
    <input type="checkbox" name="esportes[]" value="tenis">
    Tênis
  </label><br><br>
  <button type="submit">Enviar</button>
</form>

<br>

<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    foreach($_POST["esportes"] as $esporte){
        echo ucwords($esporte) . "<br>";
    }
}