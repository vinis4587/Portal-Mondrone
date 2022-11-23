<?php

include("session.php");
$validalogin = $_SESSION['logado'] ?? NULL;
if($validalogin == 1) {
  header('location:NOVOINICIO.php');
  exit();
}

if(isset($_POST["login"]) && isset($_POST["senha"])){
   
$login_user = $_POST["login"];
$senha_user = $_POST["senha"];
if(!(empty($login_user) or empty($senha_user)))
{
include("conexao.php");
$sql="select * from login where login =
'$login_user' and senha='$senha_user' ";
$res = mysqli_query($con,$sql);
$linha = mysqli_num_rows($res);
if($linha==0)
{
session_destroy();
?>
  <script type="text/javascript">
  alert("Login ou senha incorretos.");
  window.location="login.php";
  </script>
  <?php
exit;
}
else
{
$resultado = mysqli_fetch_assoc($res);

$_SESSION["$login_user"] = $_POST["login"];
$_SESSION["$senha_user"] = $_POST["senha"];
$_SESSION['logado'] = 1;
$_SESSION['ID_user'] = $resultado['ID'];
header("Location: inicioadm.php");
}
}

}
?>