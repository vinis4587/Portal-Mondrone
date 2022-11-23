<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Cadastro ADM</title>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.2/css/fontawesome.min.css">
      <link rel="stylesheet" href="trocarsenha.css">
      
</head>
<body>
      <div id="login-container">
            <h1>Alterar Horario de Aula</h1>
            <form method="post" action="horarioalterar.php">
            <label for="CGM">turma</label>
                 <input type="CGM" name="turma" id="turma"  placeholder="turma" autocomplete="off" >
            <label for="CGM">Dia semana</label>
                 <input type="CGM" name="diasemana" id="diasemana"  placeholder="Opção segunda-feira" autocomplete="off" >
                  <label for="CGM">aula1</label>
                  <input type="CGM" name="aula1" id="aula1"  placeholder="Opção segunda-feira" autocomplete="off" >
                  <label for="CGM">aula2</label>
                  <input type="CGM" name="aula2" id="aula2" placeholder="Opção Terça-feira" autocomplete="off" > 
                  <label for="CGM">aula3</label>
                  <input type="CGM" name="aula3" id="aula3" placeholder="Opção Quarta-feira" autocomplete="off" >
                  <label for="CGM">aula4</label>
                  <input type="CGM" name="aula4" id="aula4" placeholder="Opção Quinta-feira" autocomplete="off" >
                  <label for="CGM">aula5</label>
                  <input type="CGM" name="aula5" id="aula5"  placeholder="Opção Sexta-feira" autocomplete="off" >                  
                  <input type="submit" value="Alterar">
                  <select id=turno name="turnos">

<option value="manha" >Manha</option>

<option value="tarde" >Tarde</option>

<option value="noite" >Noite</option>

</select>
                  

            </form>
            <a href="?logout=1"><button>Encerrar sessão</button></a>
                  <a href="inicioadm.php" id="validar">Voltar</a>

      </div>
      
      


</body>
</html>