<?php
session_start();
include_once("conexao.php");

$turno = $_POST['turnos'];

$turma = $_POST['turma'];

$teste = "INSERT INTO turma (turma, turno) VALUES ( '{$turma}', '{$turno}')";
$sql = mysqli_query($con, $teste);

$teste1 = "SELECT id_turma FROM turma WHERE turma='$turma' AND turno='$turno' "; #cria o select do banco do ID da turma, se, a turma e turno forem iguais os q vc selecionou
$retorno = mysqli_query($con, $teste1); #executa o select acima e passa o resultado para $retorno.

if (mysqli_num_rows($retorno) > 0) { #valida se o retorno tem mais linhas do que zero (necessariamente, se tem um resultado ne)
    while($row = mysqli_fetch_assoc($retorno)) { # se tiver mais que 0, vai pegar o resultado e passar os valores de forma associada para a variavel $row
    $id_turma = $row['id_turma']; #pega o valor de $row e passa para outra variavel, apenas por organização.
    
    }
}
  

    $aula1 = $_POST['aula1seg'];
    $aula2 = $_POST['aula2seg'];
    $aula3 = $_POST['aula3seg'];
    $aula4 = $_POST['aula4seg'];
    $aula5 = $_POST['aula5seg'];

    $sql = "INSERT INTO segunda_aula (segunda_aula_um, segunda_aula_dois,segunda_aula_tres, segunda_aula_quatro, segunda_aula_cinco, turma_id_turma)  VALUES ('$aula1', '$aula2', '$aula3', '$aula4', '$aula5', '$id_turma')";
    $res= mysqli_query($con, $sql);

    $aula1 = $_POST['aula1ter'];
    $aula2 = $_POST['aula2ter'];
    $aula3 = $_POST['aula3ter'];
    $aula4 = $_POST['aula4ter'];
    $aula5 = $_POST['aula5ter'];
    $sql2 = "INSERT INTO terca_aula  (terca_aula_um, terca_aula_dois,terca_aula_tres, terca_aula_quatro, terca_aula_cinco, turma_id_turma) VALUES ('$aula1', '$aula2', '$aula3', '$aula4', '$aula5','$id_turma') ";
    $res2= mysqli_query($con, $sql2);

    $aula1 = $_POST['aula1quar'];
    $aula2 = $_POST['aula2quar'];
    $aula3 = $_POST['aula3quar'];
    $aula4 = $_POST['aula4quar'];
    $aula5 = $_POST['aula5quar'];
    $sql3 = "INSERT INTO quarta_aula  (quarta_aula_um, quarta_aula_dois,quarta_aula_tres, quarta_aula_quatro, quarta_aula_cinco, turma_id_turma) VALUES ('$aula1', '$aula2', '$aula3', '$aula4', '$aula5', '$id_turma')";
    $res3= mysqli_query($con, $sql3);

    $aula1 = $_POST['aula1quin'];
    $aula2 = $_POST['aula2quin'];
    $aula3 = $_POST['aula3quin'];
    $aula4 = $_POST['aula4quin'];
    $aula5 = $_POST['aula5quin'];
    $sql4 = "INSERT INTO quinta_aula  (quinta_aula_um, quinta_aula_dois,quinta_aula_tres, quinta_aula_quatro, quinta_aula_cinco, turma_id_turma) VALUES ('$aula1', '$aula2', '$aula3', '$aula4', '$aula5', '$id_turma')";
    $res4= mysqli_query($con, $sql4);

    $aula1 = $_POST['aula1sex'];
    $aula2 = $_POST['aula2sex'];
    $aula3 = $_POST['aula3sex'];
    $aula4 = $_POST['aula4sex'];
    $aula5 = $_POST['aula5sex'];
    $sql5 = "INSERT INTO sexta_aula  (sexta_aula_um, sexta_aula_dois,sexta_aula_tres, sexta_aula_quatro, sexta_aula_cinco, turma_id_turma) VALUES ('$aula1', '$aula2', '$aula3', '$aula4', '$aula5', '$id_turma')";
    $res5= mysqli_query($con, $sql5);
    
    header("Location: horariocadastropag.php");
?>
