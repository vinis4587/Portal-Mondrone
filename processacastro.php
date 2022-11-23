<?php
session_start();
include_once("conexao.php");
$login = $_POST ['login'];
$senha = $_POST ['senha'];
$result_usuario = "INSERT INTO login (login, senha) VALUES ('{$login}', '{$senha}')";
$resultado_usuario = mysqli_query($con, $result_usuario);
if(mysqli_insert_id($con)){
    
    ?>
    <script type="text/javascript">
    alert("Aluno cadastrado");
    window.location="cadastroaluno.php";
    </script>
    <?php

    }else{
    
    
    ?>
    <script type="text/javascript">
    alert("Usuario não cadastrado");
    window.location="cadastroaluno.php";
    </script>
<?php
    }
    ?>