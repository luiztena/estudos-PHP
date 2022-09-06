<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>strsub</title>
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

    </style>
</head>
<body>
    <header>
        <h1>Manipulação de string</h1>
    </header>
<div>
<?php
$nome = "tenã";
$input = strtolower($nome);
$strl = str_pad($input, 15 , ".", STR_PAD_LEFT); 
$strr = str_pad($input, 15 , ".", STR_PAD_RIGHT); 
$strb = str_pad($input, 15 , ".", STR_PAD_BOTH); 
echo "Meu nome é $strl não esqueça disso<br>";
echo "Meu nome é $strr não esqueça disso<br>";
echo "Meu nome é $strb não esqueça disso<br>";
?>
</div>

<button><a href="../../../HTML/index.html">Voltar a pagina Principal</a></button>
</div>
</body>
</html>