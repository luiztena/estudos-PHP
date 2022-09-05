<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contador</title>
    <link rel="stylesheet" href="../../../CSS/estilo.css">
    <style>
        body{
            background-color:rgb(30,30,150,0.7);
        }
        div{
            background-color:grey;
            position:absolute;
            margin-left:20%;
            margin-top:3%;
            box-shadow:2px 3px black;
            border-left:2px rgb(0,0,0,0.5) solid;
            border-top:2px rgb(0,0,0,0.5) solid;
            padding-top:10px;
            padding-left:10px;
            padding-right:10px;
            width:800px;
        }
        h2#titulo{
            font-size:50pt;
            
        }
        h1{
            font-family:courier;
            letter-spacing:8px;
        }
    </style>
</head>
<body>
    <header>
        <h2 id="titulo">Contador</h2>
    </header>
    <div>
        <h1>Contagem: </h1>
        <?php
        $c = 10;
        while($c > -1){
            echo "<h2>$c</h2>";
            $c -= 2;
        };
        ?>
    </div>
</body>
</html>