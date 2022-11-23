<?php
include("session.php");
$validalogin = $_SESSION['logado'] ?? NULL;
if($validalogin != 1) {
    header('location:LOGIN.php');
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
      <link rel="stylesheet" href="INICIO.css">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.2/css/fontawesome.min.css">
      <link rel="stylesheet" href="cardapioadmturno.css">
</head>
<body>
      <div id="login-container">
            <h1>Portal Mondrone</h1>
            <h2>ESCOLHER CARDÁPIO</h2>
            <form action="http://localhost/TCC/cardapiomanha.php">
                <input type="submit" value="Cardápio da Manhã">
            </form>
            <form action="http://localhost/TCC/cardapiotarde.php">
                  <input type="submit" value="Cardápio da Tarde">
            </form>
            <form action="http://localhost/TCC/cardapionoite.php">
                  <input type="submit" value="Cardápio da Noite">
            </form>
            
            <a href="NOVOINICIO.php"><button>Voltar</button></a>

      </div>
      
</body>
</html>