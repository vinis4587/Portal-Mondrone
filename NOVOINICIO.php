<?php


include("session.php");
$validalogin = $_SESSION['logado'] ?? NULL;
if($validalogin != 1) {
    header('location:LOGIN.php');
  exit();
}
include('conexao.php');
$sql_query1 = $con->query("SELECT * FROM upload where id=1") or die($con->error);

$sql_query2 = $con->query("SELECT * FROM upload where id=2") or die($con->error);

$sql_query3 = $con->query("SELECT * FROM upload where id=3") or die($con->error);

$sql_query4 = $con->query("SELECT * FROM upload where id=4") or die($con->error);

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Portal Mondrone</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="NOVOINICIO.css">
	<script src="https://kit.fontawesome.com/873886f170.js" crossorigin="anonymous"></script>
    <script src="script.js"></script>
    

</head>
<body>
<section class="back">
	<nav>
		<input type="checkbox" id="check">
		<label for="check" class="checkbtn">
			<i class="fas fa-bars"></i>
		</label>
		<label class="logo">Portal Mondrone</label>
		<ul>
			<li><a class="active" href="#">Início</a></li>
			<li><a href="cardapioturno.php">Cardápio</a></li>
			<li><a href="horariopag.php">Horários</a></li>
            <li><a href="sobretcc.html">Sobre</a></li>
            <a href="?logout=1"><button class="fa-solid fa-arrow-right-from-bracket" style="height: 38px" ></button></a>
		</ul>
	</nav>
	
        <div class="container">
            <div class="slides">
                <input type="radio" name="radio" id="radio-1">
                <input type="radio" name="radio" id="radio-2">
                <input type="radio" name="radio" id="radio-3">
                <input type="radio" name="radio" id="radio-4">
                
                <div class="imagens one">
                    <img  class="d-block w-100"  src="<?php while ($arquivo = $sql_query1->fetch_assoc()){
          echo $arquivo['path']; 
          }
          ?>" alt="imagens">
                </div>
                <div class="imagens">
                <img  class="d-block w-100" width = "1000px" height =  "400px" src="<?php while ($arquivo = $sql_query2->fetch_assoc()){
          echo $arquivo['path']; 
          }
          ?>" alt="imagens">
                </div>
                <div class="imagens">
                <img  class="d-block w-100" width = "1000px" height =  "400px" src="<?php while ($arquivo = $sql_query3->fetch_assoc()){
          echo $arquivo['path']; 
          }
          ?>" alt="imagens">
                </div>
                <div class="imagens">
                <img  class="d-block w-100" height = "500" src="<?php while ($arquivo = $sql_query4->fetch_assoc()){
          echo $arquivo['path']; 
          }
          ?>" alt="imagens">
                </div>
                <div class="navigation">
                    <label for="radio-1" class="nav"></label>
                    <label for="radio-2" class="nav"></label>
                    <label for="radio-3" class="nav"></label>
                    <label for="radio-4" class="nav"></label>
                </div> 
           </div>
        
            
    
        </div>
        <footer class="footer">CRIADO POR GUSTAVO, JOÃO E VINÍCIUS</footer>
	</section>
    
    
       
</body>
</html>