<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="../../../CSS/estilo.css">
    <style>
        body{
            background-color:rgb(130,130,130);
        }
        div{
            color:black;
            font-size:22pt;
            font-family:sans-serif;
            border-left:2px solid black;
            border-right:2px solid black;
            width:780px;
            padding-left:80px;
            margin-left:19%;
            border-bottom:2px solid black;
            background-color:aliceblue;
        }

        h2{
            font-size:45pt;
            font-family:monospace;
            text-align:center;}
        pre{
            text-align:justify;
        }



        div#botao{
            margin-left:15%;
            border:none;
        }

    </style>
</head>
<body><
    <header>
    <h1>Formulario 2</h1>
    </header>
    <div>
        <pre>
    <?php
    echo "<h1>cadastro 1</h1>";
    $cadastro = array(
        "Nome" => "Claudia",
        "Sobrenome" => "Queiroz",
        "idade" => 22,
        "email" => "claudinhadobadalasom@gmail.com",
        "senha" => "claudinha123",
    );
    print_r($cadastro);
    ?>
    </pre>

    <pre>
    <?php
    echo "<h1>cadastro 2</h1>";
    $cadastro = array(
        "Nome" => "Paulo",
        "Sobrenome" => "Menezes",
        "idade" => 11,
        "email" => "Paulo@gmail.com",
        "senha" => "paulo24325",
    );
    print_r($cadastro);
    ?>
    </pre>

    <pre>
    <?php
    echo "<h1>cadastro 3</h1>";
    $cadastro = array(
        "Nome" => "Manoel",
        "Sobrenome" => "Lisboa",
        "idade" => 33,
        "email" => "manuel_obrabo@gmail.com",
        "senha" => "seilamano",
    );
    print_r($cadastro);
    ?>
    </pre>

    <pre>
    <?php
    echo "<h1>cadastro 4</h1>";
    $cadastro = array(
        "Nome" => "Teresa",
        "Sobrenome" => "Aparecida",
        "idade" => 77,
        "email" => "donateresa@hotmail.com",
        "senha" => "Deus123",
    );
    print_r($cadastro);
    ?>
    </pre>

    <pre>
    <?php
    echo "<h1>cadastro 5</h1>";
    $cadastro = array(
        "Nome" => "Antonio",
        "Sobrenome" => "Silva",
        "idade" => 25,
        "email" => "Antonio@hotmail.com",
        "senha" => "123Olamundo123",
    );
    print_r($cadastro);
    ?>
    </pre>
</div>
<div style="background-color:grey;" id="botao"><br>
<button><a target="blank" href="../../../HTML/index.html">Voltar a pagina principal</a></button>
<button><a target="blank" href="matriz.php">Proxima pagina </a></button>
</div>
</body>
</html>