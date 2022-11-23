<?php 
include("session.php");
$validalogin = $_SESSION['logado'] ?? NULL;
if($validalogin != 1) {
  header('location:LOGIN.php');
  exit();
}
$validaid = $_SESSION['ID_user'];
if($validaid != 1){
    header('location:INICIO.php');
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
            <h1>Alterar a senha</h1>
            <form method="post" action="trocasenhaverifica.php">
                  <label for="CGM">CGM</label>
                  <input type="CGM" name="CGM" id="CGM" required name="CGM" placeholder="Digite o CGM" autocomplete="off" >
                  <label for="password">Nova senha</label>
                  <input type="password" name="senha1" id="senha1" required name="senha2" placeholder="Digite a Senha" autocomplete="off"> 
                  <label for="password">Confirme a nova senha</label>
                  <input type="password" name="senha2" required name="senha2"  id="senha2" placeholder="Digite a Senha" autocomplete="off">                  
                  <input type="submit" value="Alterar">
                 
                  

            </form>
            <a href="?logout=1"><button>Encerrar sessão</button></a>
                  <a href="inicioadm.php" id="validar">Voltar</a>

      </div>
      
      


</body>
</html>