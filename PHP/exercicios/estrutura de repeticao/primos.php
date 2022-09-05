<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../CSS/estilo2.css">
    <style>

        body{
            background-color: rgb(27, 44, 44);
        }

        form#primos{
            background-color: aliceblue;
            display: inline-block;
            margin-left: 20%;
            height: 300px;
            border-left: rgb(200,0,50) outset 7px;
            border-bottom: black solid 5px;
            border-top: black solid 5px;
            border-right: black inset 7px;
            text-align: justify;
            width: 800px;
        }

        input#confirmar{
            margin-left: 44%;
            margin-top: 10%;
            font-weight: 700;
        }
        label{
            margin-left: 20px;
            font-size:20pt;
          
        }
        header{
            text-align:center;
        }
        h1{
            font-size:40pt;
            color:rgb(200,0,100);
            font-family:Arial;
            text-shadow:3px 3px black;
        }
        h2{
            font-size:35pt;
            text-shadow:2px 2px black;
        }
        h2#resultado{
            color:white;
            font-family:monospace;
        }
    </style>
</head>
<body>
    <header>
    <h1>Numeros primos</h1>
    <h2 style="color: crimson;">Veja se o numero escolhido é primo ou não</h2>
    </header>
    <form id="primos" action="primos.php" method="get"><br>
    <label for="valor-id">Digite o numero: </label>
    <input required type="number" name="number" id="valor-id"><br><br>
    <br><input id="confirmar" type="submit" value="Calcular">
    </form>
    <div style='text-align:center;>
 <?php
  $n = $_GET['number'];
  $divisores = 0;
  
  for($count=2; $count<$n; $count++)
   if($n % $count == 0){
    echo "Multiplo de $count<br />";
    $divisores++;
   }
  
  if($divisores)  echo "Não é, tem $divisores divisores além de 1 e ele mesmo";
  else    echo "É primo!";
  
 ?>
    </div>
</body>
</html>