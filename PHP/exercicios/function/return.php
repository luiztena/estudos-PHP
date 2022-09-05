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
        function soma($a,$b){
            return $a+$b;
        }
        $x = 4;
        $y = 4;
        $res = soma($x,$y);
        echo "<h2>A soma entre $x e $y é $res</h2>";
?>
    </div>
</body>
</html>