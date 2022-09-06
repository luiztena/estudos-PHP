<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contadors</title>
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

    <h2>Ordenando vetores</h2>
    <div style='white'>
    <pre>
    <?php
    $n = array(5,7,3,9,1,11,15);
    print_r($n);
    echo "<h2>Ordem crescente</h2>";
    sort($n);
    print_r($n);
    echo "<h2>Ordem decrescente</h2>";
    rsort($n);
    print_r($n);
?>
    </pre>
    </div>
    <div><button><a  href="../../../HTML/index.html">Voltar a pagina principal</a></button></div>
</body>
</html>