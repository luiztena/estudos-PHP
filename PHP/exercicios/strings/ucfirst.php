<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formatação</title>
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
        <h1>Formatação de Strings</h1>
        <h2>Muito Util para Formularios</h2>
    </header>
<div>
<?php
$nome = "JoAo nASCIMENTO da SiLVa";
$format1 = strtolower(($nome));
$format2 = ucwords($format1);

echo "Processo de formatação de string <br> $nome => $format1 => $format2"; 
?>
<div id="botao">
<button><a href="../../../HTML/index.html">Voltar a pagina Principal</a></button>
</div>
</div>
</body>
</html>