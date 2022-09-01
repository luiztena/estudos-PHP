<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>for</title>
    <link rel="stylesheet" href="../../CSS/estilo.css">
</head>
<body>
    <div>
        <?php
        for($c = 10; $c >= 1; $c--){
            echo "<h2>$c </h2>";
        };
        ?>
    </div>
</body>
</html>