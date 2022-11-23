<?php


include("session.php");
$validalogin = $_SESSION['logado'] ?? NULL;
if($validalogin != 1) {
    header('location:LOGIN.php');
  exit();
}
$validaid = $_SESSION['ID_user'];
if($validaid != 1){
    header('location:NOVOINICIO.php');
    exit();
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Cadastro ADM</title>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.2/css/fontawesome.min.css">
      <link rel="stylesheet" href="trocarsenha.css">
      
</head>
<body>
      <div id="login-container">
            <h1>Cardapio novo da semana</h1>
            <form method="post" action="cadastracardapiofuncao.php">
                  <label for="CGM">Segunda-feira</label>
                  <input type="CGM" name="segunda" id="segunda"  placeholder="Opção segunda-feira" autocomplete="off" >
                  <label for="CGM">Terça-feira</label>
                  <input type="CGM" name="terca" id="terca" placeholder="Opção Terça-feira" autocomplete="off" > 
                  <label for="CGM">Quarta-feira</label>
                  <input type="CGM" name="quarta" id="quarta" placeholder="Opção Quarta-feira" autocomplete="off" >
                  <label for="CGM">Quinta-feira</label>
                  <input type="CGM" name="quinta" id="quinta" placeholder="Opção Quinta-feira" autocomplete="off" >
                  <label for="CGM">Sexta-feira</label>
                  <input type="CGM" name="sexta" id="sexta"  placeholder="Opção Sexta-feira" autocomplete="off" >                  
                  <input type="submit" value="Alterar">
                  <select id=turno name="turnos">

<option value="manha" >Manha</option>

<option value="tarde" >Tarde</option>

<option value="noite" >Noite</option>

</select>
                  

            </form>
            <a href="?logout=1"><button>Encerrar sessão</button></a>
                  <a href="inicioadm.php" id="validar">Voltar</a>

      </div>
      
      


</body>
</html>