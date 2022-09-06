<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variavel de Variaveis</title>
    <link rel="stylesheet" href="../../../CSS/estilo.css">
</head>
<body><div>
    <h1>Variaveis de variaveis</h1>
    <?php
    $prof = "Luiz";
    $$prof = "informatica";
    echo "<h2>$prof $Luiz</h2>";?> </div>
</body>
</html>