<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>wordcont</title>
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
        span#um{
            text-decoration:underline;
        }
        span#dois{
            color:blue;
            text-shadow:1px 1px black;
        }
    </style>
</head>
<body>
    <header>
        <h1>string: str_word_cont</h1>
    </header>
<div>
<?php
$txt = "Luiz Medeiros tem vinte anos";
$cont0 = strlen($txt);
$cont1 = str_word_count($txt,0);
$cont2 = str_word_count($txt,1);
$cont3 = str_word_count($txt,2);
echo "A frase:<span id='um'>$txt</span> possui <span id='dois'>$cont1</span> palavra
e <span id='dois'>$cont0</span> caracteres.<br>";
print_r($cont2); echo"<br>";
print_r($cont3);
?>
</div>
</body>
</html>