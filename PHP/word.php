<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php
    $texto =$_GET["word"];
    $cor = $_GET["cor"];
    $tamanho = $_GET["tamanho"];
    $fonte = $_GET["fonte"];
    $tipo = $_GET["tipo"];
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../CSS/estilo.css">
    <style>
        body{
            background-color:crimson;
        }
        span.texto{
            font-size: <?php echo $tamanho;?>;
            font-family: <?php echo $fonte?>;
            text-transform: <?php echo $tipo?>;
            color: <?php echo $cor?>;
        }

        div#resultado{
            background-color: white;
            display: inline-block;
            padding: 30px;
            border: 2px black solid;
            text-align: center;
            margin-left:40%;
        }

        div#rodape{
            margin-top:8%;
        }

    </style>
</head>
<body>
    <header>
    <h1 style="color:skyblue; text-shadow:2px 3px black;">Personalizador de texto</h1>
    <h2 style="color:skyblue;">O texto que você digitou foi: </h2>
    </header>
    <div id="resultado">
        <?php
        echo "<span class='texto'>$texto</span>";
        ?>
    </div>
    <div id="rodape">
    <button><a target="blank" href="../HTML/index.html">Voltar a pagina principal</a></button>
    <button><a href="../HTML/formulario.html">Voltar a pagina Anterior</a></button>
    </div>
</body>
</html>