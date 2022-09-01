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
        $c = $v;
        $mul = 1;
        do{
            $c *= $mul;
            echo "<h2>$v X $mul = ". $v * $mul. "</h2>";
            $mul++;
        }while($mul <= 10)
        ?>
    </div>
</body>
</html>