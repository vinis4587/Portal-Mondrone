<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Cadastro ADM</title>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.2/css/fontawesome.min.css">
      <link rel="stylesheet" href="horariopag.css">
      
</head>
<form method="post" action="horariosfuncao.php">
<body>
      <div id="login-container">
            <h1>HORÁRIOS</h1>
            <label for="turnos">TURNO</label>
<select id=turno name="turnos">
        <option value="manha" >Manhã</option>
        <option value="tarde" >Tarde</option>
        <option value="noite" >Noite</option>
        
    </select></br></br>
            
                  <label for="CGM">Escolher Turma</label>
                  <input type="CGM" name="turmas" id="turmas"  placeholder="EX: 1-A" autocomplete="off" >
           
            
            <form action="https://developer.mozilla.org/pt-BR/docs/Web/HTML/Element/Input/button">
              <input type="submit" value="PESQUISAR">
          </form>
           
                  <a href="novoinicio.php" id="validar">Voltar</a>

      </div>
      
</form>  


</body>
</html>