<?php
include('conexao.php');
$sql = "SELECT segunda_cardapio FROM cardapio WHERE id_cardapio =1"; 
$res = mysqli_query($con,$sql);
$segunda_cardapio = mysqli_fetch_assoc($res);



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
            <h1 class="titulo">CARDÁPIO MONDRONE</h1>
            <h1 class="segunda">Segunda: <?php foreach ($segunda_cardapio as $value) {echo "$value<br>"; }    ?> </h1>
            <h1 class="terca">TERÇA-FEIRA: MACARRONADA</h1>
            <h1 class="quarta">QUARTA-FEIRA: BOLO E SUCO</h1>
            <h1 class="quinta">QUINTA-FEIRA: CACHORRO-QUENTE</h1>
            <h1 class="sexta">SEXTA-FEIRA: FEIJOADA</h1>
      </div>
      
</body>
</html>