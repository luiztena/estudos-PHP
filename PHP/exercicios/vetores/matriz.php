<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matriz</title>
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
            padding-right:30px;
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
    <h2>Matrizes</h2>
    </header>
    <div>
        <pre>
    <?php
    $m = array(
        
        "Nomes" => array("Claudia","Paulo","Manoel","Teresa","Antonio"),
        "Sobrenome" => array("Quiroz","Menezes","Lisboa","Aparecida", "Silva"),
        "Idade" => array(22,11,33,77,25),
        "E-mail" => array(
                        "claudinhadobadalasom@gmail.com",
                        "Paulo@gmail.com",
                        "manuel_obrabo@gmail.com",
                        "donateresa@hotmail.com",
                        "Antonio@hotmail.com"),
        "Senha" => array(
                        "claudinha123",
                        "paulo24325",
                        "seilamano",
                        "Deus123",
                        "123Olamundo123",
        )
    );
    array_unshift($m, "Teste");
    print_r($m);
    ?> </pre>
</div>
<div>
<button><a target="blank" href="formulario.php">Pagina anterior </a></button>
<button><a target="blank" href="../../../HTML/index.html">Voltar a pagina principal</a></button>
</div>
</body>
</html>