<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/estilo.css">
    <title>Variaveis</title>
</head>
<body>
    <header>
    <h1>Tipos de variaveis(Int,Float,String,Logic)</h1>

    </header><br>
    <div id="variaveis">
    <?php 
    $nome = $_GET["nome"];
    $idade = $_GET["idade"];
    $peso = $_GET["peso"];
    $casado = $_GET["casado"];
    echo " <h2> Seu nome é $nome, sua idade é $idade e seu peso é " .number_format($peso , 2 , ',', ' '). '</h2>';
    
    echo "<h2> String = " . $nome . "<br> Int = " . $idade . "<br> Float = " . ' ' .number_format($peso , 2 , ',', ' ') .'<br> '. "Logic = " . $casado . " = Casado </h2>";
   
   ?>    
    <button><a target="blank" href="../HTML/index.html">Voltar a pagina principal</a></button>
    <button><a target="blank" href="../HTML/variaveis.html">Voltar a pagina Anterior</a></button>
</body>
</html>