<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>estados</title>
    <link rel="stylesheet" href="../CSS/estilo.css">
    <style>
        span{
            color:springgreen;
        }
    </style>
</head>
<body>
<div>
    <?php
    $estados = $_GET["estados"];

    switch ($estados) {
        case 1:
        case 2: 
        case 3:
        case 14:
        case 22:
        case 23:
        case 27: 
            echo "<h2>Você mora na <span>região norte</span> do Brasil.</h2>";
            break;
        case 4:
        case 5:
        case 6:
        case 10:
        case 15:
        case 17:
        case 18:
        case 20:
        case 26:
            echo "<h2>Você mora na <span> região norteste</span> do Brasil.</h2>";
            break;
        case 9:
        case 11:
        case 12:
        case 7:
            echo "<h2>Você mora na <span> região centro-oeste</span> do Brasil.</h2>";
            break;
        case 8:
        case 19:
        case 25:
        case 13:
            echo "<h2>Você mora na <span> região sudeste</span> do Brasil.</h2>";
            break;
        case 16:
        case 21:
        case 24:
            echo "<h2>Você mora na <span> região sul</span> do Brasil.</h2>";
            break;
    }
    ?>
</div>
<div>
    <button><a  href="../HTML/index.html">Voltar a pagina principal</a></button>
    <button><a  href="../HTML/estado.html">Voltar a pagina anterior</a></button>
</div>
</body>
</html>