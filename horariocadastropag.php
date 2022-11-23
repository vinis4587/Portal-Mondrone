<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="horariocadastropag.css">
      <title>Cadastro ADM Horário</title>
</head>
<body>
      



<div id="container">
      <br></br>
                        <h2>alterar horário</h2>

                        <h1>Nome turma</h1>
                        <form method="post" action="horariocadastro.php">
                        <label for="CGM">Nome da turma</label>
                        <input type="CGM" name="turma" id="turma"  placeholder="turma" autocomplete="off" >
                        <h1>segunda-feira</h1>
                        <label for="CGM">Primeira Aula</label>
                        <input type="CGM" name="aula1seg" id="aula1seg"  placeholder="Primeira aula segunda-feira" autocomplete="off" >
                        <label for="CGM">Segunda Aula</label>
                        <input type="CGM" name="aula2seg" id="aula2seg" placeholder="Segunda aula segunda-feira" autocomplete="off" > 
                        <label for="CGM">Terceira Aula</label>
                        <input type="CGM" name="aula3seg" id="aula3seg" placeholder="Terceira aula seguunda-feira" autocomplete="off" >
                        <label for="CGM">Quarta Aula</label>
                        <input type="CGM" name="aula4seg" id="aula4seg" placeholder="Quarta aula segunda-feira" autocomplete="off" >
                        <label for="CGM">Quinta Aula</label>
                        <input type="CGM" name="aula5seg" id="aula5seg" placeholder="Quinta aula segunda-feira" autocomplete="off" >    

                        <h1>terca-feira</h1>
                        <label for="CGM">Primeira Aula</label>
                        <input type="CGM" name="aula1ter" id="aula1ter"  placeholder="Primeira aula segunda-feira" autocomplete="off" >
                        <label for="CGM">Segunda Aula</label>
                        <input type="CGM" name="aula2ter" id="aula2ter" placeholder="Segunda aula segunda-feira" autocomplete="off" > 
                        <label for="CGM">Terceira Aula</label>
                        <input type="CGM" name="aula3ter" id="aula3ter" placeholder="Terceira aula seguunda-feira" autocomplete="off" >
                        <label for="CGM">Quarta Aula</label>
                        <input type="CGM" name="aula4ter" id="aula4ter" placeholder="Quarta aula segunda-feira" autocomplete="off" >
                        <label for="CGM">Quinta Aula</label>
                        <input type="CGM" name="aula5ter" id="aula5ter" placeholder="Quinta aula segunda-feira" autocomplete="off" >  

                        <h1>quarta-feira</h1>
                        <label for="CGM">Primeira Aula</label>
                        <input type="CGM" name="aula1quar" id="aula1quar"  placeholder="Primeira aula segunda-feira" autocomplete="off" >
                        <label for="CGM">Segunda Aula</label>
                        <input type="CGM" name="aula2quar" id="aula2quar" placeholder="Segunda aula segunda-feira" autocomplete="off" > 
                        <label for="CGM">Terceira Aula</label>
                        <input type="CGM" name="aula3quar" id="aula3quar" placeholder="Terceira aula seguunda-feira" autocomplete="off" >
                        <label for="CGM">Quarta Aula</label>
                        <input type="CGM" name="aula4quar" id="aula4quar" placeholder="Quarta aula segunda-feira" autocomplete="off" >
                        <label for="CGM">Quinta Aula</label>
                        <input type="CGM" name="aula5quar" id="aula5quar" placeholder="Quinta aula segunda-feira" autocomplete="off" >  

                        <h1>quinta-feira</h1>
                        <label for="CGM">Primeira Aula</label>
                        <input type="CGM" name="aula1quin" id="aula1quin"  placeholder="Primeira aula segunda-feira" autocomplete="off" >
                        <label for="CGM">Segunda Aula</label>
                        <input type="CGM" name="aula2quin" id="aula2quin" placeholder="Segunda aula segunda-feira" autocomplete="off" > 
                        <label for="CGM">Terceira Aula</label>
                        <input type="CGM" name="aula3quin" id="aula3quin" placeholder="Terceira aula seguunda-feira" autocomplete="off" >
                        <label for="CGM">Quarta Aula</label>
                        <input type="CGM" name="aula4quin" id="aula4quin" placeholder="Quarta aula segunda-feira" autocomplete="off" >
                        <label for="CGM">Quinta Aula</label>
                        <input type="CGM" name="aula5quin" id="aula5quin" placeholder="Quinta aula segunda-feira" autocomplete="off" >    

                        <h1>sexta-feira</h1>
                        <label for="CGM">Primeira Aula</label>
                        <input type="CGM" name="aula1sex" id="aula1sex"  placeholder="Primeira aula segunda-feira" autocomplete="off" >
                        <label for="CGM">Segunda Aula</label>
                        <input type="CGM" name="aula2sex" id="aula2sex" placeholder="Segunda aula segunda-feira" autocomplete="off" > 
                        <label for="CGM">Terceira Aula</label>
                        <input type="CGM" name="aula3sex" id="aula3sex" placeholder="Terceira aula seguunda-feira" autocomplete="off" >
                        <label for="CGM">Quarta Aula</label>
                        <input type="CGM" name="aula4sex" id="aula4sex" placeholder="Quarta aula segunda-feira" autocomplete="off" >
                        <label for="CGM">Quinta Aula</label>
                        <input type="CGM" name="aula5sex" id="aula5sex" placeholder="Quinta aula segunda-feira" autocomplete="off" >    
                  
                        <input type="submit" value="Alterar">
                  
                        <select id=turnos name="turnos">
                              <option value="manha" >Manhâ</option>
                              <option value="tarde" >Tarde</option>
                              <option value="noite" >Noite</option>
                        </select>
                  

                  </form>

            <a href="?logout=1"><button>Encerrar sessão</button></a>
                  <a href="inicioadm.php" id="validar">Voltar</a>

      </div>
      
      


</body>
</html>