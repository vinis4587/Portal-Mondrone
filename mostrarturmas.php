

  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="mostrarinfo.css">

  </head>
  <body>
             <div id="login-container">
                <h1> TURMAS CRIADAS</h1>
    
             <?php
include('conexao.php');

$sql = "SELECT turma FROM turma "; 
$retorno = mysqli_query($con, $sql); #executa o select
if (mysqli_num_rows($retorno) > 0) { #faz a mesma validação de retorno ne, se tem retorno maior q 0
    while($row2 = mysqli_fetch_assoc($retorno)) { #passa os valores associados
    $test=$row2['turma']; #vai salvando um por um nas variaveis.
    echo " $test </br>";   
}

}
  
  
  ?>
            </div>



    
  </body>
  <form>
  <a href="inicioadm.php" id="validar">Voltar</a>
</form>
  </html>