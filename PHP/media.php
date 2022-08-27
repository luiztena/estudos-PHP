<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../CSS/estilo.css">
</head>
<body>
<header>
    <h1>Média do aluno</h1>
</header>
<div>
    <?php
    $nota1 = isset($_GET["nota1"])?$nota1 = $_GET["nota1"]:"Não informado";
    $nota2 = $_GET["nota2"];
    $r = ($nota1 + $nota2) /2;
    echo "<h2>As notas que o aluno tirou foi $nota1 e $nota2</h2>";
    if($r <= 4){
    echo "<h2>Status: Reprovado</h2>";}
    elseif($r > 4 && $r <= 7){
    echo "<h2>Status: Recuperação</h2>";}
    else{
        echo "<h2>Status: Aprovado</h2>";}
    ?>
    <div id="rodape">
    <button><a target="blank" href="../HTML/index.html">Voltar a pagina principal</a></button>
    <button><a href="../HTML/media.html">Voltar a pagina Anterior</a></button>

</div>
</body>
</html>