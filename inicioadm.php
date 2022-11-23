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
      <link rel="stylesheet" href="INICIO.css">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.2/css/fontawesome.min.css">
      <link rel="stylesheet" href="inicioadm.css">
</head>
<body>
      <div id="login-container">
            <h1>Portal Mondrone</h1>
            <h2>ADMINISTRAÇÃO</h2>
            <form action="cadastroaluno.php">
                <input type="submit" value="Cadastrar novo Aluno">
            </form>
            <form action="trocarsenha.php">
                  <input type="submit" value="Trocar senha de Aluno">
            </form>
            <form action="deletauserpag.php">
                  <input type="submit" value="Excluir usuário do Aluno">
            </form>
            <form action="cadastracardapio.php">
                  <input type="submit" value="Alterar/adiciona cardapio">
            </form>
            <form action="horarioalterarpag.php">
                  <input type="submit" value="Alterar horarios">
            </form>
            <form action="horariocadastropag.php">
                  <input type="submit" value="Cadastrar horario">
            </form>
            <form action="mostrarnapg.php">
                  <input type="submit" value="Alterar imagens do carrossel">
            </form>
            <form action="mostrarturmas.php">
                  <input type="submit" value="Todas as turmas cadastradas">
            </form>
            <form action="mostraralunos.php">
                  <input type="submit" value="Todos os alunos cadastrados">
            </form>
            <a href="?logout=1"><button>Sair</button></a>

      </div>
      
</body>
</html>