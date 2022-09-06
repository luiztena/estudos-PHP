<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vetores 2</title>
    <link rel="stylesheet" href="../../../CSS/estilo.css">
    <style>
        div{
            color:springgreen;
            font-size:22pt;
            font-family:sans-serif;
            text-shadow:2px 2px black;
        }

        h2{
            font-size:45pt;
            font-family:monospace;
            text-align:center;

        }
        pre#format{
            position:relative;
            margin-left:38%;
            font-size:25pt;
            font-family:monospace;
            top:66%;
        }
        
        table{
            border:2px solid black;
            background-color:rgba(255,255,150,.8);
        }

        td{
            border-left:rgba(0,0,0,.6) 3px solid;
            padding:12px;
            font-family:courier;
            font-weight:bold;
        }
        pre#foreach{
            font-size:22pt;
            margin-left:27%;;
        }
        div#vetores{
            text-align:center;
        }
;

    </style>
</head>
<body><
    <header>
    <h2>Vetores parte 1</h2>
    </header>
    <div>

    <?php
    $n[0] = 3;
    $n[1] = 4;
    $n[2] = 5;
    $n[3] = 8;
    $n[4] = 10;
    $n[] = 20;
    print_r($n);
    $linha = str_repeat("___", 14); 
    print($linha); echo "<br><br>";
    $x = array(2,6,7,9,12);
    print_r($x);
    ?>
    <h2>Range</h2>
    </div>

    <pre id='format'>
    <?php
    $y = range(0, 50,5);
    print_r($y);
    ?>
    </pre>

    <h2>Foreach</h2>
    <pre id='foreach'> <table><tr>
    <?php
    $a = range(0, 50,5);
    $b = range(20,100,20);;
    $c = range(3, 38, 2);
    foreach($a as $valor1){
        echo "<td>$valor1</td>";
        
    }; 
    ?>
    </table>
    </pre>
    <div><button><a  href="../../../HTML/index.html">Voltar a pagina principal</a></button></div>
</body>

</html>