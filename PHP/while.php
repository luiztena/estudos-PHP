<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contador 2.0</title>
    <link rel="stylesheet" href="../CSS/estilo.css">
</head>
<body>
    <div>
        <h2>Inicio:</h2>
        <?php
        $inicio = $_GET["inicio"];
        $final = $_GET["final"];
        $incremento = $_GET["incremento"];
        if($final >= $inicio){
        while($inicio <= $final){
            echo "<h2>$inicio</h2>";
            $inicio += $incremento;
        };
    }
      else{
        while($final <= $inicio){
            echo "<h2>$inicio</h2>";
            $inicio -= $incremento;
        };
      }
        ?>
        <h2>Final </h2>
    </div>
    <div>
    <button><a href="../HTML/index.html">Voltar a pagina principal</a></button>
    <button><a href="../HTML/while.html">Voltar a pagina Anterior</a></button>
    </div>
</body>
</html>