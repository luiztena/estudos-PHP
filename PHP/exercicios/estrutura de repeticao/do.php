<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>do while</title>
    <link rel="stylesheet" href="../../../CSS/estilo.css">
</head>
<body>
    <div>
        <?php
        $c = 10;
       do{
            echo "<h2>$c </h2>";
            $c--;
        }while($c >= 1)
        ?>
    </div>
</body>
</html>