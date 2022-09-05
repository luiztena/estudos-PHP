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
        function teste(&$x){
         $x += 2;
         echo "<h2>O valor de X é $x</h2>";

        }
        $a = 3;
        teste($a);
        echo "<h2>O valor de A é $a</h2>";
?>
    </div>
</body>
</html>