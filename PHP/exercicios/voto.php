<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../CSS/estilo.css">
</head>
<body>
    <header>
    <h1>Eleições</h1>
    <h2>Veja se você é obrigado a votar</h2>
    </header>
    <div>
        <?php
        $idade = $_GET["a"];
        $voto = $idade >= 18 && $idade <= 64? "O voto é obrigatorio":"O voto NÃO é obrigatorio";
        echo "<h2>Sua idade é $idade</h2>";
        echo "<h2>$voto</h2>"
       ?>
<button><a target="blank" href="index.php">Voltar a pagina principal</a></button>
    </div>
</body>
</html>