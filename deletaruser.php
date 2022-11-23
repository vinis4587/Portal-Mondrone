<?php


include ('conexao.php');


if($_POST['user1'] == $_POST['user2']) {
    $user = $_POST['user1'];

    $sql = "DELETE FROM login WHERE login ='$user'";
    $resultado_usuario = mysqli_query($con, $sql);
}
if(mysqli_insert_id($con)){
    
    $_SESSION['msg'] = "<p style='color:green;'>Usuario excluido com sucesso</p>";
    
    header("Location: deletauserpag.php");
    
    }else{
    
    $_SESSION['msg'] = "<p style='color:red;'>Usuario não encontrado</p>";
    
    header("Location: deletauserpag.php");
    
    }