<?php

include("conexao.php");

if(isset($_FILES['arquivo'])){
    $arquivo = $_FILES ['arquivo'];
    $img = $_POST ['imagem'];

    if($arquivo['error'])
        die("Falha ao enviar arquivo");

    if($arquivo['size'] > 10485760)
        die ("arquivo muito grande!! no maximo 2 megas");

        $pasta = "imagens/";
        $nomedoarquivo = $arquivo['name'];
        $nomenomedoarquivo = uniqid();
        $extensao = strtolower(pathinfo($nomedoarquivo, PATHINFO_EXTENSION));

        if($extensao != "jpg" && $extensao != 'png')
            die("Tipo de arquivo não aceito");

            $path = $pasta . $nomenomedoarquivo . "." . $extensao;
        $deu_certo = move_uploaded_file($arquivo["tmp_name"], $path);
        
        $sql = "SELECT * FROM upload WHERE id='$img' "; 
        $resultado = mysqli_query($con, $sql); 
        if (mysqli_num_rows($resultado) == 1 ){
            $con->query("UPDATE upload SET path = '$path', nome = '$nomedoarquivo' where id = '$img'") or die ($con->error );

        }
            if(mysqli_num_rows($resultado) == 0 ){
                if($deu_certo){
                $con->query("INSERT INTO upload (nome, path) VALUES('$nomedoarquivo','$path')") or die ($con->error );
            
            echo "<p> Arquivo enviado com sucesso!</p>" ;
            }else
                echo "<p>Falha ao enviar</p>";
                            }
                        }


    $sql_query1 = $con->query("SELECT * FROM upload where id=1") or die($con->error);

    $sql_query2 = $con->query("SELECT * FROM upload where id=2") or die($con->error);

    $sql_query3 = $con->query("SELECT * FROM upload where id=3") or die($con->error);

    $sql_query4 = $con->query("SELECT * FROM upload where id=4") or die($con->error);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="mostrarnapg.css">
    <title>Upload de arquivos</title>
</head>
<body>
                    <div id="login-container">
                            <form method="POST" enctype="multipart/form-data" action=""> <br>
                                <p><label for = ""> Selecione o arquivo</label><br>
                                <Input name="arquivo" type="file"></p><br>
                                <button name="upload" type="submit"> Enviar arquivo</button><br>
                                <select id="imagem" name="imagem"><br>

                        <option value="1" >Imagem 1 do carrossel</option>

                        <option value="2" >Imagem 2 do carrossel</option>

                        <option value="3" >Imagem 3 do carrossel</option>

                        <option value="4" >Imagem 4 do carrossel</option>
                        </select>
                        <a href="inicioadm.php" id="validar">Voltar</a>
                        </form>
                        <table border ="1" cellpadding=100>
                           
                    </div>
             <tbody>
                 <?php
                            while ($arquivo1 = $sql_query1->fetch_assoc()){
                                

                            ?>
                                    <tr>
                                        <td><?php echo $arquivo1 ['nome']; ?></td>
                                        <td><img height = "200" src="<?php echo $arquivo1['path']; ?>"alt=""></td>

                                    </tr>
                <?php
        }
                ?>
            </tbody>
</table>


</body>
</html>