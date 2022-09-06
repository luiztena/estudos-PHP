<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>strpos</title>
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
        div#array{
            font-size:18pt;
            font-weight:bold;
        }
        div#linha{
            position:absolute;
            width:400px;
            border-left:red solid 3px;
            border-left:none;
            border-top:none;
            border-right:none;
            left:35%;
            top:44%;
            background-color:transparent;
        }
    </style>
</head>
<body>
    <header>
        <h1>Localize uma palavra</h1>
    </header>
<div>
<?php
$frase = "Apredendo PHP";
$pos = strpos($frase, "PHP");
$split = str_split($frase);
echo "$frase <br>";
echo "'PHP' começa na posição $pos <br>";
?>
<div id='array'>
<?php
$frase = "Apredendo PHP";
$split = str_split($frase);
print_r($split);
?>
<div id='linha'></div>
</div>
<div id="botao">
<button><a href="../../../HTML/index.html">Voltar a pagina Principal</a></button>
</div>
</div>
</body>
</html>