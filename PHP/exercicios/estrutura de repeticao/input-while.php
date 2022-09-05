<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>while</title>
    <link rel="stylesheet" href="../../../CSS/estilo.css">
    <style>
        body{
            background-color:rgb(50,50,50);
        }
        div#circulo{
            background-color:white;
            position:relative;
            margin-top:30px;
        }
        div#div{
            background-color:white;
            position:absolute;
            left:40%;
            margin-top:5%;
            border-radio:100%;
            border:3px solid black;
        }
        span{
           color:black;
           font-size:30px;

        }
        label{
            font-weight:bold;
            font-size:15pt;
        }
    </style>
</head>
<body>
    <div id="div">
    <div id="circulo">
        <h1>contador</h1>
        <p>inicio do programa:</p>
        <span>&darr;</span><br>
        <label for="v1">Valor 1 :</label>
    <input type="number" name="n1" id="v1"><br>
    <span>&darr;</span>
    </div>
    <?php
    $c = 1;
    while($c <= 5){
    echo " <div>
        <label>Valor $c :</label>
    <input><br>
    <span>&darr;</span>
    </div>";
    $c++; }
    echo "Fim do programa";
    ?>
    </div>
    <br>
</body>
</html>