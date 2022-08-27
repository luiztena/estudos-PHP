<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/estilo.css">
    <title>Variaveis</title>
    <style>
        body{
            background-color:black;
        }
        div#desconto{
            background-color:seagreen;
            border-bottom:8px solid black;
            display:inline-block;
            width:1340px;
        }
        div#acrescimo{
            background-color:#C21807;
            display:inline-block;
            width:1340px;
        }
    </style>
</head>
<body>
    <div id="desconto">
    <header>
    <h1>Desconto e acrecimo</h1>
    </header>

    <?php
    $valor = $_GET["valor"];
    $desc = $_GET["desc"]?$_GET["desc"]:0;
    echo "<h2>Um produto com o valor de R$".number_format($valor,2,',','.'). "
    acaba de receber um desconto de ".$desc."%</h2>";
    echo "<br> <h2>Aplicando o desconto o produto ficará pelo preço de R$";
    $valor -= ($valor * $desc / 100);
    echo number_format($valor,2,',','.');
    ;?> <br><br>
</div>
<div id="acrescimo">
   <?php
    $valor = $_GET["valor"];
    $acr = $_GET["acr"]?$_GET["acr"]:0;
    echo "<h2>Devido a inflação o produto que está custando R$". number_format($valor,2,',','.') .
    " teve um acrecimo de ". $acr."%</h2>";
    echo "<h2> o novo preço do produto é de R$";
    $valor += ($valor * $acr / 100);
    echo number_format($valor,2,',','.');
    ;?><br><br>

    <button><a target="blank" href="../HTML/index.html">Voltar a pagina principal</a></button>
    <button><a target="blank" href="../HTML/porcentagem.html">Voltar a pagina anterior</a></button>
</div>
</body>
</html>