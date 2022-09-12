<!DOCTYPE html>
<html lang="pt-br" >

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    
  </head>
  <body>

    

    
<head>
  <meta charset="UTF-8">
  <title>CodePen - A Pen by rebeca</title>
  <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/fullcalendar@5.11.2/main.min.css'><link rel="stylesheet" href="./style.css">

</head>


<h2 class="md text-center my-2 versaomobile">AGENDAMENTO DE LICENÇAS</h2>
      <div class="container flex">
        
        
        <form method="POST" action="config.php">
        
        <label class="md2 my-2">Selecione a licença desejada:</label>
                
                 
            
                <select name="Licenca" id="Licenca">
                <option value="Auto">AutoDesk1</option>
                
                </select>
                
                
                <BR>
                <BR>
                <label class="md2  my-2">Para operação qual será utilizada?</label>
                
                
                  <select name="Operacao" id="Operacao">
                  <option value="1">1</option>
                  <option value="100">100</option>
                  <option value="5">5</option>
                  <option value="8">8</option>
                  <option value="7">7</option>
                  
                  </select>
                  <BR>
                  <BR>
                  <label class="md2  my-2">Quem vai utilizar?</label>
                
                
                  <select name="Email" id="Email">
                  <option value="a@s.com">a</option>
                  <option value="b@s.com">b</option>
                  <option value="c@s.com">c</option>
                  
                  </select>
    
                  <BR>
                 <BR>
               
    
    
                 <label class="md2  my-2">Inicio do uso:</label>
                 <input type="datetime-local" name="Inicio" placeholder="Quando começa" required></br></br>
                 <label class="md2  my-2">Fim do uso:</label>
                  <input type="datetime-local" name="Fim"></input></br></br>
                
                  <input class="md2 text-center" type="submit" value="Enviar"> 
   
            
          


            </form>

<body>
<!-- partial:index.partial.html -->
<div id='calendar'></div>
<!-- partial -->
  <script src='https://cdn.jsdelivr.net/npm/fullcalendar@5.11.2/main.min.js'></script><script  src="./script.js"></script>

</body>






</html>
