<?php
include("session.php");
$validalogin = $_SESSION['logado'] ?? NULL;
if($validalogin == 1) {
  header('location:NOVOINICIO.php');
  exit();
}
?>
<!doctype html>
<html lang="pt-br">


<head>
    <meta charset="UTF-8">
    <meta name="VIEWPORT" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>LOGIN</title>
    <link rel= "stylesheet" href="script.js">
    <link rel="stylesheet" href="LOGIN.css">
    <script src="https://kit.fontawesome.com/f23b73b7f5.js" crossorigin="anonymous"></script>
</head>
<body class background="mondrone.jpg">
    <form method="post" action="realizalogin.php">
    <div class="container" >
        <div class="content first-content" >
            <div class="first-column">
                <img src="logo2.png">
                <h2 class="title title-primary">Bem vindo ao</h2>
                <h2 class="title title-primary">Portal Mondrone</h2>
            </div>
            <div class="second-column">
                <he class="title">Entrar</he>
                <div class="social-media">
                </div>
                <form class="form">
                    <label class="label-input" for="">
                        <i class="far fa-user icon-modify"></i>
                        <input class="form-input" type="text" placeholder="Login" name="login" data-mim-length="2">
                    </label> 
                    <label class="label-input" for="">
                        <i class="fa-solid fa-lock icon-modify"></i>
                        <input class="form-input" type="password" placeholder="Senha" name="senha"> 
                    </label>
                    
                        <input type="submit" target="_blank" value="enviar" class="btn btn-second" name="enviar">
                        
                </div>
         </div>
        </div>
    </form>
</body>
</html>
