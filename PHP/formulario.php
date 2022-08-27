<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="../CSS/estilo.css">
    <style>
        body{
            background-color:teal;
        }
        div{
            background-color:black;
            text-align:justify;
            display:inline-block;
            margin-left:28%;
            margin-top:5%;
            width:500px;
            padding-left:100px;
            border: 8px white double;
        }
        button#1{
            margin-top:15%;
            margin-left:30%;
        }

        button{
            margin-top:8%;
        }
        div#rodape{
            margin-left:28%;
            background-color:teal;
            border:none;
        }

    </style>
</head>
<body>
    <header>
        <h2 style="font-size:32pt; font-weight:bold;">Dados recebidos</h2>
    </header>
    <div>
    <?php
    $nome = $_GET["v-nome"];
    $sobrenome = $_GET["v-sobrenome"];
    $ano = $_GET["v-data"];
    $sexo = $_GET["v-sexo"];
    echo "<h2> Nome: ". $nome. "<br>". 
    "Sobrenome: ". $sobrenome. "<br>". 
    "Ano: ". $ano. "<br>".
    "Sexo: ". $sexo. "</h2>";?>
    </div><br>
        <div id="rodape">
    <button><a target="blank" href="../HTML/index.html">Voltar a pagina principal</a></button>
    <button><a href="../HTML/formulario.html">Voltar a pagina Anterior</a></button>
        </div>
</body>
</html>