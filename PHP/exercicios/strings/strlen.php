<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>strlen</title>
    <link rel="stylesheet" href="../../../CSS/estilo.css">
    <style>
        body{
            font-size:14pt;
            font-family:sans-serif;
            font-weight:bold;
            background-color:brown;
        }
        div{
            border:10px rgba(50, 50, 50,.7) outset;
            background-color:aliceblue;
            margin-top:5%;
            padding-bottom:30px;
            text-align:justify;
            background-color:aliceblue;
            width:500px;
            margin-left:30%;
            text-indent:30px;
            padding:10px;
        }

        span{
            color:crimson;
            text-decoration:underline;
            font-size:16pt;
        }

    </style>
</head>
<body>
    <header>
        <h1>Wordwrap</h1>
    </header>
<div>
<?php
$txt = "João foi a feira comprou um pastel de carne e um suco de maracuja,
        depois foi no açougue comprou patinho e temperos, depois voltou para casa
        para fazer o almoço";
$r = strlen($txt);
echo "$txt <br><br>";
echo "Na frase acima existem o total de <span>$r</span> caracteres contando com os espaços
e virgulas entre as palavras.";
?>
</div>
</body>
</html>