<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raiz parte 2</title>
    <link rel="stylesheet" href="../../CSS/estilo.css">
</head>
<body>
<header>
<h2>Raiz quadrada</h2>
<form id="formulario" action="ex5.php" method="get">
    <label style="color:white; font-size:20pt; font-weight:bold; letter-spacing:2pt;
    text-shadow:2px 2px black;"
     for="numero">Digite um valor </label>
        <input type="number" name="valor" id="numero"></input>
        <input type="submit" value="Calcular">
</form>
</header>
<div>
<?php
    $valor = $_GET["valor"];
    $raiz = sqrt($valor);
    echo "<br><br><h2> o valor digitado foi $valor </h2>";
    echo "<h2>A raiz de $valor é " . number_format($raiz, 2, ',', '.')."</h2>";
?>
</div>
</body>
</html>