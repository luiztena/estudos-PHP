<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variavei Referenciadas</title>
    <link rel="stylesheet" href="../../CSS/estilo.css">
</head>
<body>
<header>
    <h1>Variavel normal</h1>
    </header>
    <div>
    <?php
    $v1 = $_GET["a"];
    $v2 = $_GET["b"];

    $v1 = $v2;
    $v2 += 3;
    echo "<h2>Valor 1: $v1</h2>";
    echo "<h2>Valor 2: $v2</h2>";
    ?>
    <h2 id=linha> </h2>
        <?php
    $v1 = $_GET["a"];
    $v2 = $_GET["b"];

    $v1 = &$v2;
    $v2 += 3 ;

    echo "<h1>Variaveis Referenciadas</h1>";
    echo "<h2>Valor 1: $v1</h2>";
    echo "<h2>Valor 2: $v2</h2>";
    ?> 
    </div>
</body>
</html>