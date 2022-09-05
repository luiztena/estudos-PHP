<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>rotinas</title>
    <link rel="stylesheet" href="../../../CSS/estilo.css">
</head>
<body>
    <div>
        <?php
        function soma($a, $b){
            $s = $a + $b;
            echo "<h2>A soma vale $s</h2>";
        }

        soma(3,4);
        soma(10,5);
        $x = 20;
        $y = 13;
        soma($x,$y);
?>
    </div>
</body>
</html>