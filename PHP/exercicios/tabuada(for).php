<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>do while</title>
    <link rel="stylesheet" href="../../CSS/estilo.css">
</head>
<body>
    <div>
        <?php
        $v = $_GET["valor"];
        echo "<h2>Tabuada de $v</h2>";
        $mul = 1;
        for($c = $v; $mul <= 10; $mul++){
        $c *= $mul;
        echo "<h2>$v X $mul = ".$v * $mul."</h2>";}
        ?>
    </div>

    <div>
    <button><a href="../../HTML/index.html">Voltar a pagina principal</a></button>
    <button><a href="../../HTML/tabuada(for).html">Voltar a pagina Anterior</a></button>
</div>

</body>
</html>