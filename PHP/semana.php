<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Semana</title>
    <link rel="stylesheet" href="../CSS/estilo.css">
</head>
<body>
    <div>
    <?php
    $dia = $_GET["dia"];
    if($dia == 1){
        echo"<h2>Hoje é domingo</h2>";
    }
    elseif($dia == 2){
        echo"<h2>Hoje é segunda-feira</h2>";
    }
    elseif($dia == 3){
        echo"<h2>Hoje é terça-feira</h2>";
    }
    elseif($dia == 4){
        echo"<h2>Hoje é quarta-feira</h2>";
    }
    elseif($dia == 5){
        echo"<h2>Hoje é quinta-feira</h2>";
    }
    elseif($dia == 6){
        echo"<h2>Hoje é sexta-feira</h2>";
    }
    else{
        echo"<h2>Hoje é sábado</h2>";
    }
    switch($dia){
        case 1:
        case 7:
            echo "<h2>É seu dia de descanso</h2>";
            break;
        case 2:
        case 3:
        case 4:
        case 5:
        case 6:
            echo "<h2>É dia de estudar</h2>";
            break;
    }
    ?>
    </div>
</body>
</html>