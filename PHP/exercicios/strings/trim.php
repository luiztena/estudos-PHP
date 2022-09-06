<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>trim</title>
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
    </style>
</head>
<body>

<div>
<?php
$nome = "    João da silva    ";
$novo = trim($nome);  //ltrim ou rtrim
echo ($novo). " <br>Quantidade de caracteres: ";
echo(strlen($novo));
?>
</div>
</body>
</html>