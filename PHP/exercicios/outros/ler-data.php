<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data</title>
    <link rel="stylesheet" href="../../../CSS/estilo.css">
</head>
<body>
    <header>
    <h1>Exercicio 1</h1>
    <h1>Mostre qual foi o ano anterior ao atual</h1>
</header>
<div>
<?php
$atual = $_GET["a"];
echo  "<h2> O ano atual é $atual<br>";
echo  "O anterior foi " . --$atual, "<br>";
?>
<?php
$atual = $_GET["a"];
echo  "O proximo ano será " . ++$atual, "</h2>";?>
</div>
</body>
</html>