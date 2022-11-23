<html>
<head>
  <title>Upload de imagens com PHP</title>
  <meta charset="utf-8"/>
  <?php
   include("conexao.php");
   
   $msg=false;
   
   if(isset($_FILES['arquivo'])){
    
  // $extensao=strtolower(substr($_FILES['arquivo']['name'], -4));
  //so funcionou com o de baixo
   $extensao = explode('.', $_FILES['arquivo']['name']);
   $extensao = strtolower(end($extensao));
   $novo_nome=md5(time()).$extensao;
   $diretorio="imagens/";
   
   move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio.$novo_nome);
   
   $sql_code="INSERT INTO arquivo (codigo, arquivo, data) VALUES (null, '$novo_nome', now())";
   
   if(mysqli_query($con,$sql_code))
    $msg="Arquivo enviado com sucesso!";
   else
    $msg="Falha ao enviar arquivo.";
   
   }
  ?>
</head>
<body>
<?php if($msg!= false) echo"<p> $msg </p>"; ?>
 <form action="upload2.php" method="POST" enctype="multipart/form-data">
  <label for="imagem">Imagem:</label>
  <input type="file" name="arquivo"/>
  <br/>
  <input type="submit" value="Enviar"/>
 </form>
</body>
</html>