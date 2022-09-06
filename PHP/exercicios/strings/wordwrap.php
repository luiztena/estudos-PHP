<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>wordwrap</title>
    <link rel="stylesheet" href="../../../CSS/estilo.css">
    <style>
        body{
            font-size:24pt;
            font-family:sans-serif;
            font-weight:light;
            background-color:rgb(30,30,30);
        }
        div{
            border:10px rgba(50, 50, 50,.7) outset;
            background-color:aliceblue;
            margin-top:5%;
            padding-bottom:30px;
            text-align:justify;
            height:720px;
            background-color:grey;
        }
        p{
            color:blue;
            text-shadow:1px 1px black;
            border:5px black solid;
            padding:20px;
            background-color:lightgrey;
            position: absolute;
            left:3%;
        }
        p#cont{
            color:crimson;
            left:50%;
            bottom:1px;
            text-shadow:2px 1px black;
        }
        p#cont2{
            color:cyan;
            left:50%;
            text-shadow:3px 2px 1px black;
            
        }
        p#cont3{
            left:50%;
            text-shadow:3px 2px 1px black;
            color:yellow;
            bottom:25%;
        }
        header{
            text-transform:uppercase;
        }
        h2{
            font-size:40pt;
            font-family:arial;
            letter-spacing:3px;
        }
        button{
            position:absolute;
            left:50%;
            margin-top:49.1%;
            font-weight:bold;
            border:4px solid black;
        }

    </style>
</head>
<body>
    <header>
        <h2>Wordwrap</h2>
    </header>
<div>
<?php
$txt = "What is Lorem Ipsum?
Lorem Ipsum is simply dummy text of the printing and typesetting industry.
Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
when an unknown printer took a galley of type and scrambled it to make a type specimen book.
It has survived not only five centuries, but also the leap into electronic typesetting, remaining
essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing
Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including
versions of Lorem Ipsum.";

$r = wordwrap($txt,40, "<br>\n", false);
echo "<p>$r</p>";
$cont = str_word_count($txt, 0);
$cont2 = strlen($txt);
$cont3 = substr_count($txt, "Lorem");
echo "<p id='cont'>O texto possui $cont palavras.</p>";
echo "<p id='cont2'>O texto possui $cont2 caracteres.</p>";
echo "<p id='cont3'>A palavra 'Lorem' apareceu $cont3 vezes.</p>";
?>
<button><a href="../../../HTML/index.html">Voltar a pagina Principal</a></button>
</div>
</body>
</html>