<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>operadores 2</title>
    <link rel="stylesheet" href="../CSS/estilo.css">
    <style>
        body{
            background-color: rgb(100, 100, 100);
        }
        div{
            background-color: white;
            display: inline-block;
            margin-left: 23%;
            width: 800px;
            border: 8px solid rgb(31, 5, 31);
            margin-top: 15%;
            border-left: 8px solid purple;
            border-right: 8px solid purple;
            font-size:16pt;}
        div#rodape{
        background-color: rgb(100,100,100);
        border:none;
        }
        button:hover{
            background-color:springgreen;
            cursor: pointer;
            font-weight:bold;
        }

    </style>
</head>
<body>
<div>
    <?php
$n = $_GET["valor"];
$op = $_GET["op"];
switch($op){
    case 1:
       $r = $n * 2;
        break;
    
    case 2:
        $r = pow($n, 2);
        break;
    
    case 3:
       $r = pow($n, 3);
        break;
    
    case 4:
        $r= sqrt($n);
        break;
    
}
echo "O resultado da operação solicidade foi ".number_format($r,'2',',','.');
?>
</div><br>
<div id="rodape">
<button><a target="blank" href="../HTML/index.html">Voltar a pagina principal</a></button>
<button><a target="blank" href="../HTML/switch.html">Voltar a pagina anterior</a></button>
</div>
</body>
</html>