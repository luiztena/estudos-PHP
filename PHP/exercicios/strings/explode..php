<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Explode</title>
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
        div#um{
            color:blue;
            text-shadow:1px 1px rgba(0,0,0,.7);
        }
        div#dois{
            color: springgreen;
            text-shadow:2px 2px 1px rgba(0,0,0,1);
            border:none;
        }
    </style>
</head>
<body>
    <header>
        <h1>Explode/split</h1>
    </header>
<div id="um">
    
<?php
$txt = "PHP Hypertext Preprocessor</span>";
echo "$txt<br>";
$r = explode(" ", $txt);
print_r($r);
?>

<div id="dois">
<?php
$txt2 = "PHP";
echo "$txt2<br>";
$r2 = explode(" ", $txt2);
$i = str_split($txt2);
print_r($i);
echo "<br>";
print_r($r2);
?>
</div>
</div>
</body>
</html>