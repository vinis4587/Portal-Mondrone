<?php 
include('conexao.php');

$turno = $_POST['turnos']; #recebe o turno q vc colocou no coisinha la
$turma = $_POST['turmas']; #recebe a turma q vc sleecinoou 




$sql = "SELECT id_turma FROM turma WHERE turma='$turma' AND turno='$turno' "; #cria o select do banco do ID da turma, se, a turma e turno forem iguais os q vc selecionou
$retorno = mysqli_query($con, $sql); #executa o select acima e passa o resultado para $retorno.

if (mysqli_num_rows($retorno) > 0) { #valida se o retorno tem mais linhas do que zero (necessariamente, se tem um resultado ne)
    while($row = mysqli_fetch_assoc($retorno)) { # se tiver mais que 0, vai pegar o resultado e passar os valores de forma associada para a variavel $row
    $id_turma = $row['id_turma']; #pega o valor de $row e passa para outra variavel, apenas por organização.
    
    }
}
else { #se for menor que 0, la no primeiro if, vem pra ca, e da alerta q turma nao existe.
    print "<script>alert('Essa turma não existe.');</script>";
    print "<script>location.href='index.php';</script>";
      exit();
}
################### abaixo, tem o sql das aulas, de acordo com o ID da turma selecionado no select ali de cima.
$sql2 = "SELECT segunda_aula_um, segunda_aula_dois, segunda_aula_tres, segunda_aula_quatro, segunda_aula_cinco FROM segunda_aula WHERE turma_id_turma='$id_turma' "; 
$retorno2 = mysqli_query($con, $sql2); #executa o select
if (mysqli_num_rows($retorno2) > 0) { #faz a mesma validação de retorno ne, se tem retorno maior q 0
    while($row2 = mysqli_fetch_assoc($retorno2)) { #passa os valores associados
    $aula1_seg=$row2['segunda_aula_um']; #vai salvando um por um nas variaveis.
    $aula2_seg=$row2['segunda_aula_dois'];
    $aula3_seg=$row2['segunda_aula_tres'];
    $aula4_seg=$row2['segunda_aula_quatro'];
    $aula5_seg=$row2['segunda_aula_cinco'];
    
    }
}else {
    echo "aulas de segunda não encontradas</br>";
}
$sql2 = "SELECT terca_aula_um, terca_aula_dois, terca_aula_tres, terca_aula_quatro, terca_aula_cinco FROM terca_aula WHERE turma_id_turma='$id_turma' "; 
$retorno2 = mysqli_query($con, $sql2); #executa o select
if (mysqli_num_rows($retorno2) > 0) { #faz a mesma validação de retorno ne, se tem retorno maior q 0
    while($row2 = mysqli_fetch_assoc($retorno2)) { #passa os valores associados
    $aula1_terc=$row2['terca_aula_um']; #vai salvando um por um nas variaveis.
    $aula2_terc=$row2['terca_aula_dois'];
    $aula3_terc=$row2['terca_aula_tres'];
    $aula4_terc=$row2['terca_aula_quatro'];
    $aula5_terc=$row2['terca_aula_cinco'];
    
    }
}else {
    echo "aulas de terça não encontradas</br>";
}
$sql2 = "SELECT quarta_aula_um, quarta_aula_dois, quarta_aula_tres, quarta_aula_quatro, quarta_aula_cinco FROM quarta_aula WHERE turma_id_turma='$id_turma' "; 
$retorno2 = mysqli_query($con, $sql2); #executa o select
if (mysqli_num_rows($retorno2) > 0) { #faz a mesma validação de retorno ne, se tem retorno maior q 0
    while($row2 = mysqli_fetch_assoc($retorno2)) { #passa os valores associados
    $aula1_quar=$row2['quarta_aula_um']; #vai salvando um por um nas variaveis.
    $aula2_quar=$row2['quarta_aula_dois'];
    $aula3_quar=$row2['quarta_aula_tres'];
    $aula4_quar=$row2['quarta_aula_quatro'];
    $aula5_quar=$row2['quarta_aula_cinco'];
    
    }
}else {
    echo "aulas de quarta não encontradas</br>";
}
$sql2 = "SELECT quinta_aula_um, quinta_aula_dois, quinta_aula_tres, quinta_aula_quatro, quinta_aula_cinco FROM quinta_aula WHERE turma_id_turma='$id_turma' "; 
$retorno2 = mysqli_query($con, $sql2); #executa o select
if (mysqli_num_rows($retorno2) > 0) { #faz a mesma validação de retorno ne, se tem retorno maior q 0
    while($row2 = mysqli_fetch_assoc($retorno2)) { #passa os valores associados
    $aula1_quint=$row2['quinta_aula_um']; #vai salvando um por um nas variaveis.
    $aula2_quint=$row2['quinta_aula_dois'];
    $aula3_quint=$row2['quinta_aula_tres'];
    $aula4_quint=$row2['quinta_aula_quatro'];
    $aula5_quint=$row2['quinta_aula_cinco'];
    }
}else {
    echo "aulas de quinta não encontradas</br>";
}




$sql2 = "SELECT sexta_aula_um, sexta_aula_dois, sexta_aula_tres, sexta_aula_quatro, sexta_aula_cinco FROM sexta_aula WHERE turma_id_turma='$id_turma' "; 
$retorno2 = mysqli_query($con, $sql2); #executa o select
if (mysqli_num_rows($retorno2) > 0) { #faz a mesma validação de retorno ne, se tem retorno maior q 0
    while($row2 = mysqli_fetch_assoc($retorno2)) { #passa os valores associados
    $aula1_sext=$row2['sexta_aula_um']; #vai salvando um por um nas variaveis.
    $aula2_sext=$row2['sexta_aula_dois'];
    $aula3_sext=$row2['sexta_aula_tres'];
    $aula4_sext=$row2['sexta_aula_quatro'];
    $aula5_sext=$row2['sexta_aula_cinco'];
    
    }
}else {
    echo "aulas de sexta não encontradas</br>";
}
##########################################################################################################

?>
<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Cardápio</title>
      <link rel="stylesheet" href="horariosaula.css">
</head>
<body>

        <div id="container">
            <h1 class="titulo"><?php echo " Turma: $turma</br>";?></h1>

            <div id="linha-vertical"></div>
            <div class="segunda">
                <h1>SEGUNDA</h1>
                <h2><?php echo " $aula1_seg </br>";?></h2>
                <h2><?php echo " $aula2_seg </br>";?></h2>
                <h2><?php echo " $aula3_seg </br>";?></h2>
                <h2><?php echo " $aula4_seg </br>";?></h2>
                <h2><?php echo " $aula5_seg </br>";?></h2>
            </div>
            
            <div id="linha-vertical1"></div>
            <div class="terca">
                <h1>TERÇA</h1>
                <h2><?php echo " $aula1_terc </br>";?></h2>
                <h2><?php echo " $aula2_terc </br>";?></h2>
                <h2><?php echo " $aula3_terc </br>";?></h2>
                <h2><?php echo " $aula4_terc </br>";?></h2>
                <h2><?php echo " $aula5_terc </br>";?></h2>
            </div>
           
            <div id="linha-vertical2"></div>
            <div id="linha-vertical6"></div>
            <div class="quarta">
                <h1>QUARTA</h1>
                <h2><?php echo " $aula1_quar </br>";?></h2>
                <h2><?php echo " $aula2_quar </br>";?></h2>
                <h2><?php echo " $aula3_quar </br>";?></h2>
                <h2><?php echo " $aula4_quar </br>";?></h2>
                <h2><?php echo " $aula5_quar </br>";?></h2>
            </div>
          
            <div id="linha-vertical3"></div>
            <div id="linha-vertical5"></div>
            <div class="quinta">
                <h1>QUINTA</h1>
                <h2><?php echo " $aula1_quint </br>";?></h2>
                <h2><?php echo " $aula2_quint </br>";?></h2>
                <h2><?php echo " $aula3_quint </br>";?></h2>
                <h2><?php echo " $aula4_quint </br>";?></h2>
                <h2><?php echo " $aula5_quint </br>";?></h2>
            </div>
            
            
            <div id="linha-vertical4"></div>
            <div id="linha-vertical7"></div>
            <div class="sexta">
                <h1>SEXTA</h1>
                <h2><?php echo " $aula1_sext </br>";?></h2>
                <h2><?php echo " $aula2_sext </br>";?></h2>
                <h2><?php echo " $aula3_sext </br>";?></h2>
                <h2><?php echo " $aula4_sext </br>";?></h2>
                <h2><?php echo " $aula5_sext </br>";?></h2>
            </div>
            <a href="horariopag.php" id="validar">Voltar</a> 
        </div>
        
</body>
</html>