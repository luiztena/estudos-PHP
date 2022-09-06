<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>print_r</title>
    <link rel="stylesheet" href="../../../CSS/estilo.css">
    <style>
        body{
            font-size:22pt;
            font-family:monospace;
            font-weight:light;
        }
        div{
            border:10px rgba(50, 50, 50,.7) outset;
            background-color:aliceblue;
            padding:10px;
            margin-top:5%;
            padding-bottom:30px;
        }
        div#botao{
            border:none;
        }
    </style>
</head>
<body>
    <header>
        <h1>Vetores de X</h1>
    </header>
<div>
<?php

echo "<b>Vetor 1: </b>";    $x[0] = 3;
    $x[1] = 6;
    $x[2] = 12;
    $x[3] = 33;
    $x[4] = 36;
    $x[5] = 42;
    print_r($x); echo "<br><br>";
    echo "<b>Vetor 2: </b>";  $x2 = array(2,4,8,14,20);
    print_r($x2); echo "<br><br>";
    echo "<b>&darr; Vetor 3: &darr; </b>";  $x3 = array(7,14.7,"batata",49,false);
    var_dump($x3);
    echo "<b>Vetor 4 : </b>";  $x4 = array(8,16,24,64,80);
    var_export($x4); echo "<br>";

?>
<div id="botao">
<button><a href="../../../HTML/index.html">Voltar a pagina Principal</a></button>
</div>
</div>
</body>
</html>