<?php
session_start();
include_once("conexao.php");

$turno = $_POST['turnos'];

$turma = $_POST['turma'];

$sql = "SELECT id_turma FROM turma WHERE turma='$turma' AND turno='$turno' "; #cria o select do banco do ID da turma, se, a turma e turno forem iguais os q vc selecionou
$retorno = mysqli_query($con, $sql); #executa o select acima e passa o resultado para $retorno.

if (mysqli_num_rows($retorno) > 0) { #valida se o retorno tem mais linhas do que zero (necessariamente, se tem um resultado ne)
    while ($row = mysqli_fetch_assoc($retorno)) { # se tiver mais que 0, vai pegar o resultado e passar os valores de forma associada para a variavel $row
    $id_turma = $row['id_turma']; #pega o valor de $row e passa para outra variavel, apenas por organização.
    
    }
}
else { #se for menor que 0, la no primeiro if, vem pra ca, e da alerta q turma nao existe.
    print "<script>alert('Essa turma não existe.');</script>";
    print "<script>location.href='index.php';</script>";
      exit();
}
################### abaixo, tem o sql das aulas, de acordo com o ID da turma selecionado no select ali de cima.
$diasemana = $_POST['diasemana'];

if($diasemana == 'segunda'){
    if(!empty($_POST['aula1'])) { 
    $aula1 = $_POST['aula1'];
    $sql = "UPDATE segunda_aula SET segunda_aula_um = '$aula1' WHERE turma_id_turma='$id_turma'";
    $res= mysqli_query($con, $sql);
}
if(!empty($_POST['aula2'])) { 
    $aula2 = $_POST['aula2'];
    $sql = "UPDATE segunda_aula SET segunda_aula_dois = '$aula2' WHERE turma_id_turma='$id_turma'";
    $res= mysqli_query($con, $sql);
}
if(!empty($_POST['aula3'])) { 
    $aula3 = $_POST['aula3'];
    $sql = "UPDATE segunda_aula SET segunda_aula_tres = '$aula3' WHERE turma_id_turma='$id_turma'";
    $res= mysqli_query($con, $sql);
}
if(!empty($_POST['aula4'])) { 
    $aula4 = $_POST['aula4'];
    $sql = "UPDATE segunda_aula SET segunda_aula_quatro = '$aula4' WHERE turma_id_turma='$id_turma'";
    $res= mysqli_query($con, $sql);
}
if(!empty($_POST['aula5'])) { 
    $aula5 = $_POST['aula5'];
    $sql = "UPDATE segunda_aula SET segunda_aula_cinco = '$aula5' WHERE turma_id_turma='$id_turma'";
    $res= mysqli_query($con, $sql);
}
}
if($diasemana == 'terca'){
    if(!empty($_POST['aula1'])) { 
    $aula1 = $_POST['aula1'];
    $sql = "UPDATE terca_aula SET terca_aula_um = '$aula1' WHERE turma_id_turma='$id_turma'";
    $res= mysqli_query($con, $sql);
}
if(!empty($_POST['aula2'])) { 
    $aula2 = $_POST['aula2'];
    $sql = "UPDATE terca_aula SET terca_aula_dois = '$aula2' WHERE turma_id_turma='$id_turma'";
    $res= mysqli_query($con, $sql);
}
if(!empty($_POST['aula3'])) { 
    $aula3 = $_POST['aula3'];
    $sql = "UPDATE terca_aula SET terca_aula_tres = '$aula3' WHERE turma_id_turma='$id_turma'";
    $res= mysqli_query($con, $sql);
}
if(!empty($_POST['aula4'])) { 
    $aula4 = $_POST['aula4'];
    $sql = "UPDATE terca_aula SET terca_aula_quatro = '$aula4' WHERE turma_id_turma='$id_turma'";
    $res= mysqli_query($con, $sql);
}
if(!empty($_POST['aula5'])) { 
    $aula5 = $_POST['aula5'];
    $sql = "UPDATE terca_aula SET terca_aula_cinco = '$aula5' WHERE turma_id_turma='$id_turma'";
    $res= mysqli_query($con, $sql);
}
}
if($diasemana == 'quarta'){
    if(!empty($_POST['aula1'])) { 
    $aula1 = $_POST['aula1'];
    $sql = "UPDATE quarta_aula SET quarta_aula_um = '$aula1' WHERE turma_id_turma='$id_turma'";
    $res= mysqli_query($con, $sql);
}
if(!empty($_POST['aula2'])) { 
    $aula2 = $_POST['aula2'];
    $sql = "UPDATE quarta_aula SET quarta_aula_dois = '$aula2' WHERE turma_id_turma='$id_turma'";
    $res= mysqli_query($con, $sql);
}
if(!empty($_POST['aula3'])) { 
    $aula3 = $_POST['aula3'];
    $sql = "UPDATE quarta_aula SET quarta_aula_tres = '$aula3' WHERE turma_id_turma='$id_turma'";
    $res= mysqli_query($con, $sql);
}
if(!empty($_POST['aula4'])) { 
    $aula4 = $_POST['aula4'];
    $sql = "UPDATE quarta_aula SET quarta_aula_quatro = '$aula4' WHERE turma_id_turma='$id_turma'";
    $res= mysqli_query($con, $sql);
}
if(!empty($_POST['aula5'])) { 
    $aula5 = $_POST['aula5'];
    $sql = "UPDATE quarta_aula SET quarta_aula_cinco = '$aula5' WHERE turma_id_turma='$id_turma'";
    $res= mysqli_query($con, $sql);
}
}
if($diasemana == 'quinta'){
    if(!empty($_POST['aula1'])) { 
    $aula1 = $_POST['aula1'];
    $sql = "UPDATE quinta_aula SET quinta_aula_um = '$aula1' WHERE turma_id_turma='$id_turma'";
    $res= mysqli_query($con, $sql);
}
if(!empty($_POST['aula2'])) { 
    $aula2 = $_POST['aula2'];
    $sql = "UPDATE quinta_aula SET quinta_aula_dois = '$aula2' WHERE turma_id_turma='$id_turma'";
    $res= mysqli_query($con, $sql);
}
if(!empty($_POST['aula3'])) { 
    $aula3 = $_POST['aula3'];
    $sql = "UPDATE quinta_aula SET quinta_aula_tres = '$aula3' WHERE turma_id_turma='$id_turma'";
    $res= mysqli_query($con, $sql);
}
if(!empty($_POST['aula4'])) { 
    $aula4 = $_POST['aula4'];
    $sql = "UPDATE quinta_aula SET quinta_aula_quatro = '$aula4' WHERE turma_id_turma='$id_turma'";
    $res= mysqli_query($con, $sql);
}
if(!empty($_POST['aula5'])) { 
    $aula5 = $_POST['aula5'];
    $sql = "UPDATE quinta_aula SET quinta_aula_cinco = '$aula5' WHERE turma_id_turma='$id_turma'";
    $res= mysqli_query($con, $sql);
}
}
if($diasemana == 'sexta'){
    if(!empty($_POST['aula1'])) { 
    $aula1 = $_POST['aula1'];
    $sql = "UPDATE sexta_aula SET sexta_aula_um = '$aula1' WHERE turma_id_turma='$id_turma'";
    $res= mysqli_query($con, $sql);
}
if(!empty($_POST['aula2'])) { 
    $aula2 = $_POST['aula2'];
    $sql = "UPDATE sexta_aula SET sexta_aula_dois = '$aula2' WHERE turma_id_turma='$id_turma'";
    $res= mysqli_query($con, $sql);
}
if(!empty($_POST['aula3'])) { 
    $aula3 = $_POST['aula3'];
    $sql = "UPDATE sexta_aula SET sexta_aula_tres = '$aula3' WHERE turma_id_turma='$id_turma'";
    $res= mysqli_query($con, $sql);
}
if(!empty($_POST['aula4'])) { 
    $aula4 = $_POST['aula4'];
    $sql = "UPDATE sexta_aula SET sexta_aula_quatro = '$aula4' WHERE turma_id_turma='$id_turma'";
    $res= mysqli_query($con, $sql);
}
if(!empty($_POST['aula5'])) { 
    $aula5 = $_POST['aula5'];
    $sql = "UPDATE sexta_aula SET sexta_aula_cinco = '$aula5' WHERE turma_id_turma='$id_turma'";
    $res= mysqli_query($con, $sql);
}
}
if(mysqli_insert_id($con)){
    
    $_SESSION['msg'] = "<p style='color:green;'>Cardapio cadastrado com sucesso</p>";
    
    header("Location: horarioalterarpag.php");
    
    }else{
    
    $_SESSION['msg'] = "<p style='color:red;'>Cardapio não foi cadastrado com sucesso</p>";
    
    header("Location: horarioalterarpag.php");
    
    }
    ?>
?>
