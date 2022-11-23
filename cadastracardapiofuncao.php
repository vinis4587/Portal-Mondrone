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
session_start();
include_once("conexao.php");

$turno = $_POST['turnos'];

if($turno == 'manha'){

    if(!empty($_POST['segunda'])) {
        $segunda = $_POST['segunda'];
        $sql = "UPDATE cardapio SET segunda_cardapio = '$segunda' WHERE id_cardapio=1";
        $resultado_usuario = mysqli_query($con, $sql);
    }
    if(!empty($_POST['terca'])) { 
        $terca = $_POST['terca'];
        $sql = "UPDATE cardapio SET terca_cardapio = '$terca' WHERE id_cardapio=1";
        $resultado_usuario = mysqli_query($con, $sql);
    }
    if(!empty($_POST['quarta'])) { 
        $quarta = $_POST['quarta'];
        $sql = "UPDATE cardapio SET quarta_cardapio = '$quarta' WHERE id_cardapio=1";
        $resultado_usuario = mysqli_query($con, $sql);
    }
    if(!empty($_POST['quinta'])) { 
        $quinta = $_POST['quinta'];
        $sql = "UPDATE cardapio SET quinta_cardapio = '$quinta' WHERE id_cardapio=1";
        $resultado_usuario = mysqli_query($con, $sql);
    }
    if(!empty($_POST['sexta'])) { 
        $sexta = $_POST['sexta'];
        $sql = "UPDATE cardapio SET sexta_cardapio = '$sexta' WHERE id_cardapio=1";
        $resultado_usuario = mysqli_query($con, $sql);
        
    }
}

elseif($turno  == 'tarde'){
    
    if($turno == 'tarde'){
        if(!empty($_POST['segunda'])) { 
            $segunda = $_POST ['segunda'];
            $sql = "UPDATE cardapio SET segunda_cardapio = '$segunda' WHERE id_cardapio=2";
            $resultado_usuario = mysqli_query($con, $sql);
        }
        if(!empty($_POST['terca'])) { 
            $terca = $_POST ['terca'];
            $sql = "UPDATE cardapio SET terca_cardapio = '$terca' WHERE id_cardapio=2";
            $resultado_usuario = mysqli_query($con, $sql);
        }
        if(!empty($_POST['quarta'])) { 
            $quarta = $_POST ['quarta'];
            $sql = "UPDATE cardapio SET quarta_cardapio = '$quarta' WHERE id_cardapio=2";
            $resultado_usuario = mysqli_query($con, $sql);
        }
        if(!empty($_POST['quinta'])) { 
            $quinta = $_POST ['quinta'];
            $sql = "UPDATE cardapio SET quinta_cardapio = '$quinta' WHERE id_cardapio=2";
            $resultado_usuario = mysqli_query($con, $sql);
        }
        if(!empty($_POST['sexta'])) { 
            $sexta = $_POST ['sexta'];
            $sql = "UPDATE cardapio SET sexta_cardapio = '$sexta' WHERE id_cardapio=2";
            $resultado_usuario = mysqli_query($con, $sql);
        }
    }
}
elseif($turno  == 'noite'){

    if($turno == 'noite'){
        if(!empty($_POST['segunda'])) { 
            $segunda = $_POST ['segunda'];
            $sql = "UPDATE cardapio SET segunda_cardapio = '$segunda' WHERE id_cardapio=3";
            $resultado_usuario = mysqli_query($con, $sql);
        }
        if(!empty($_POST['terca'])) { 
            $terca = $_POST ['terca'];
            $sql = "UPDATE cardapio SET terca_cardapio = '$terca' WHERE id_cardapio=3";
            $resultado_usuario = mysqli_query($con, $sql);
        }
        if(!empty($_POST['quarta'])) { 
            $quarta = $_POST ['quarta'];
            $sql = "UPDATE cardapio SET quarta_cardapio = '$quarta' WHERE id_cardapio=3";
            $resultado_usuario = mysqli_query($con, $sql);
        }
        if(!empty($_POST['quinta'])) { 
            $quinta = $_POST ['quinta'];
            $sql = "UPDATE cardapio SET quinta_cardapio = '$quinta' WHERE id_cardapio=3";
            $resultado_usuario = mysqli_query($con, $sql);
        }
        if(!empty($_POST['sexta'])) { 
            $sexta = $_POST ['sexta'];
            $sql = "UPDATE cardapio SET sexta_cardapio = '$sexta' WHERE id_cardapio=3";
            $resultado_usuario = mysqli_query($con, $sql);
        }
    }
}
if(mysqli_insert_id($con)){
    
    $_SESSION['msg'] = "<p style='color:green;'>Cardapio cadastrado com sucesso</p>";
    
    header("Location: cadastracardapio.php");
    
    }else{
    
    $_SESSION['msg'] = "<p style='color:red;'>Cardapio não foi cadastrado com sucesso</p>";
    
    header("Location: cadastracardapio.php");
    
    }
    ?>