<?php
include("session.php");
include('conexao.php');
$validalogin = $_SESSION['logado'] ?? NULL;
if($validalogin != 1) {
    header('location:LOGIN.php');
  exit();
}
$sql = "SELECT segunda_cardapio FROM cardapio WHERE id_cardapio =2"; 
$res = mysqli_query($con,$sql);
$segunda_cardapio = mysqli_fetch_assoc($res);

$sql = "SELECT terca_cardapio FROM cardapio WHERE id_cardapio =2"; 
$res = mysqli_query($con,$sql);
$terca_cardapio = mysqli_fetch_assoc($res);

$sql = "SELECT quarta_cardapio FROM cardapio WHERE id_cardapio =2"; 
$res = mysqli_query($con,$sql);
$quarta_cardapio = mysqli_fetch_assoc($res);

$sql = "SELECT quinta_cardapio FROM cardapio WHERE id_cardapio =2"; 
$res = mysqli_query($con,$sql);
$quinta_cardapio = mysqli_fetch_assoc($res);

$sql = "SELECT sexta_cardapio FROM cardapio WHERE id_cardapio =2"; 
$res = mysqli_query($con,$sql);
$sexta_cardapio = mysqli_fetch_assoc($res);


?>
<!DOCTYPE html>
<html lang="en">

<head>

      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Cardápio</title>
      <link rel="stylesheet" href="testecardapio.css">
</head>
<body>

      <div id="container">
        <div id="linha-vertical"></div>
            <h1 class="titulo">CARDÁPIO DA TARDE MONDRONE</h1>
            <h1 class="segunda">SEGUNDA-FEIRA: <?php foreach ($segunda_cardapio as $value1) {echo "$value1<br>"; }    ?> </h1>
            <h1 class="terca">TERÇA-FEIRA: <?php foreach ($terca_cardapio as $value2) {echo "$value2<br>"; }    ?></h1>
            <h1 class="quarta">QUARTA-FEIRA: <?php foreach ($quarta_cardapio as $value3) {echo "$value3<br>"; }    ?></h1>
            <h1 class="quinta">QUINTA-FEIRA: <?php foreach ($quinta_cardapio as $value4) {echo "$value4<br>"; }    ?></h1>
            <h1 class="sexta">SEXTA-FEIRA: <?php foreach ($sexta_cardapio as $value5) {echo "$value5<br>"; }    ?></h1> <br>
            <a href="cardapioturno.php" id="validar">Voltar</a> 
      </div>
      
</body>
</html>