<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relogio</title>
    <link rel="stylesheet" href="../CSS/estilo.css">
    <style>
        body{
            background-color:black;
        }
        div{
            text-align:justify;
            margin-left:30%;
            margin-top:14%;
            font-family:Arial;
        }
        h2#titulo{
            font-size:50pt;
            font-family:Arial;
            letter-spacing:4px;
        }
        h2#dia{
            color:yellow;
        }

        button{

            margin-left:40%;
            margin-top:3%;
            background-color:grey;
        }
    </style>
</head>
<body>
<header>
<h2 id="titulo">Relogio</h2>
</header>
    <div>
<?php

$semana = array(
    'Sun' => 'Domingo', 
    'Mon' => 'Segunda-Feira',
    'Tue' => 'Terca-Feira',
    'Wed' => 'Quarta-Feira',
    'Thu' => 'Quinta-Feira',
    'Fri' => 'Sexta-Feira',
    'Sat' => 'Sábado'
);
date_default_timezone_set ("America/Belem");
$dia = date('D');
$data = date("d/m/Y");
$hora = header("Refresh:0.5");
$hora = date('H:i:s');
echo "<h2 id='dia'>Olá Hoje é $semana[$dia] <br> a data de hoje é $data <br> e são exatamente $hora</h2>";
?>
</div>

<button><a target="blank" href="../HTML/index.html">Voltar a pagina principal</a></button>

</body>
</html>