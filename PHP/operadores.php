<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/estilo.css">
    <title>Operadores Aritméticos</title>
    <style>
        sup{
            font-size:15pt;
        }
    </style>
</head>
<body>
    <header>
    <h1>Operadores Aritméticos</h1>
    </header><br>
    <div id="variaveis">
    <?php 
    $x = $_GET["numero"]?$_GET["numero"]:0;
    $y = $_GET["numero2"]?$_GET["numero2"]:0;
    $soma = $x + $y;
    $sub = $x - $y;
    $vezes = $x * $y;
    $div = $x / $y;
    $qrt = $x * $x;
    $cubo = $x * $x *$x;
    $raiz = sqrt($x);
    $media = ($x + $y) / 2;
    echo " <h2>Valores Recebidos: $x & $y</h2>";
    echo " <h2>Soma<br> $x + $y = ".number_format($soma,2, ',', '.')."</h2>";
    echo " <h2>Subtração<br> $x - $y = ".number_format($sub,2,',','.'). "</h2>";
    echo " <h2>Multiplicação<br> $x * $y = ".number_format($vezes,2,',','.')."</h2>";
    echo " <h2>Divisão<br> $x / $y = ".number_format($div,2,',','.')."</h2>";
    echo " <h2>Potencia<br> $x<sup>2</sup> = ".number_format($qrt,2,',','.')."</h2>";
    echo " <h2>$x<sup>3</sup> = ".number_format($cubo,2,',','.')."</h2>";
    echo " <h2>Raiz quadrada de $x = ".number_format($raiz,2,',','.')."</h2>";
    echo " <h2>A media dos valores: $x e $y = ".number_format($media,2,',','.'). "</h2>";?>
    <button><a  href="../HTML/index.html">Voltar a pagina principal</a></button>
    <button><a  href="../HTML/operadores.html">Voltar a pagina anterior</a></button>
</body>
</html>