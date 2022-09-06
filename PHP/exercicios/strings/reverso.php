<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>print_r</title>
    <link rel="stylesheet" href="../../../CSS/estilo.css">
    <style>
        html{
            cursor:url(../../../Imagens/mouse.png), pointer;
        }
        body{
            font-size:22pt;
            font-family:monospace;
            font-weight:light;
            background-color:rgb(237,40,40);
           
        }
        div{
            border:10px rgba(150,150,150.7) outset;
            background-color:black;
            padding:10px;
            margin-top:5%;
            padding-bottom:30px;
            color:white;
        }
        div#botao{
            border:none;
        }

    </style>
</head>
<body>
    <header>
        <h1>Reverso ou invertido</h1>
        <h1>osɹǝʌǝᴚ ou oditrevni</h1>
    </header>
<div>
<?php
$nome = "Luiz Tena Medeiros Nogueira";
$reverso = strrev($nome);
echo "Seu nome é $nome <br> Seu nome ao contrario é $reverso"
?>
<div id="botao">
<button><a href="../../../HTML/index.html">Voltar a pagina Principal</a></button>
</div>
</div>
</body>
</html>