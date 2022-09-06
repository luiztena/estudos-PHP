<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>chaves-personalizadas</title>
    <link rel="stylesheet" href="../../../CSS/estilo.css">
    <style>
        div{
            color:black;
            font-size:22pt;
            font-family:sans-serif;
        }

        h2{
            font-size:45pt;
            font-family:monospace;
            text-align:center;}

    </style>
</head>
<body><
    <header>
    <h2>Chave personalizada</h2>
    </header>
    <div>
    <?php
    $n = array(8 => 8, 3 => 16, 6 => -7, 2 => "Olá Mundo" );
    $n[] = "E";
    print_r($n); echo "<br>";
    unset($n[8]);
    print_r($n);
    ?>
</div>
</body>
</html>