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
      <link rel="stylesheet" href="cadastroaluno.css">
</head>
<body>
      <div id="login-container">
            <h1>Excluir Alunos</h1>
            <form method="post" action="deletaruser.php">
                  <label for="CGM">Usuario</label>
                  <input type="CGM" name="user1" id="user1" required name="user1" placeholder="Digite o CGM" autocomplete="off" >
                  <label for="password">Confimar usuario</label>
                  <input type="text" name="user2" required name= "user2" id="user2" placeholder="Confirme o CGM" autocomplete="off">                 
                  <input type="submit" value="Excluir Usuário">
                  <a href="?logout=1" id="validar">Encerrar Sessão</a>
                  <a href="inicioadm.php" id="validar">Voltar</a>
            </form>
      </div>
      
</body>
</html>
