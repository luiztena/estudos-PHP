<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../../CSS/estilo.css">
</head>
<body><header>
    <h1>Operadores relacionais</h1>
    <h2>Digite os valores que serão somados ou multiplicados</h2>
</header>
<div>
    <?php
    $v1 = $_GET["a"];
    $v2 = $_GET["b"];
    $soma = $_GET["c"];
    $r = $soma == "somar"?$v1 + $v2:$v1 * $v2;
    echo "<h2>Os valores digitados foram $v1 e $v2</h2>";
    echo "<h2>O resultado foi $r </h2>";
    ?>
</div>
</body>
</html>