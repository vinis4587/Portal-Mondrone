<?php
include ('conexao.php');

$imagem = $_FILES["imagem"];

$nomeimg = $_POST["nomeimagem"];

if($imagem != NULL) {
	$nomeFinal = time().'.jpg';
	if (move_uploaded_file($imagem['tmp_name'], $nomeFinal)) {
		$tamanhoImg = filesize($nomeFinal);

		$mysqlImg = addslashes(fread(fopen($nomeFinal, "r"), $tamanhoImg));

        $sql = " INSERT INTO pessoa VALUES  ('','$nomeimg') " ;
        $res= mysqli_query($con, $sql);
		header("location:inicioadm.php");
	}
}
else {
	echo"Você não realizou o upload de forma satisfatória.";
}

?>