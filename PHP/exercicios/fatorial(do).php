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
        echo "<h2>Calculando fatorial de $v</h2>";
        $c = $v;
        $fat = 1;

       do{
            $fat *= $c;
            $c--;
        }while($c >= 1);
        echo "<h2>$v! = $fat</h2>";
        ?>
    </div>
</body>
</html>