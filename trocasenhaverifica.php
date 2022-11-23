<?php 
include("session.php");
$validalogin = $_SESSION['logado'] ?? NULL;
if($validalogin != 1) {
    header('location:LOGIN.php');
  exit();
}

include 'conexao.php'; #inclui conexao com o banco
if(isset($_POST['CGM'])) { #verifica se o campo CGM está vazio, ou não.
    $CGM=$_POST['CGM']; #Se o campo tiver valor, passa o valor do CGM pra variavel.
    
}
    
    $sql = "SELECT * FROM login WHERE login='$CGM' "; #busca o cadastro com esse CGM.
$resultado = mysqli_query($con, $sql); #executa o comando acima.


if (mysqli_num_rows($resultado) == 0 ) { #verifica se o CGM buscado tem alguma linha de retorno. Se não tiver, alerta e volta p inicio.
  ?><script type="text/javascript">
  alert("CGM inexistente ou não informado");
  window.location="trocarsenha.php";
  </script>
   <?php
    
}

if($_POST['senha1'] == $_POST['senha2']) {
    $senha = $_POST['senha1'];
    $sql = "UPDATE login SET senha = '$senha' WHERE login ='$CGM' "; #faz o update do registro que tiver o CGM informado.
    $resultado = mysqli_query($con, $sql) or die (mysqli_error($con)); #executa o update acima.
    ?>
  <script type="text/javascript">
  alert("Senha alterada com sucesso!!");
  window.location="inicioadm.php";
  </script>
  <?php
} else {

  ?><script type="text/javascript">
  alert("As senhas não correspondem");
  window.location="trocarsenha.php";
  </script>
   <?php
  }
