<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>voto 2</title>
    <link rel="stylesheet" href="../CSS/estilo.css">
</head>
<body>
<div>
<?php
$ano = $_GET["idade"]; 
$idade = date('Y') - $ano;
echo "<h2>Você nasceu no ano de $ano e você tem $idade de idade.</h2>";
if($idade >= 18 && $idade <= 64 ){
    echo"<h2>O voto é obrigatorio</h2>";
}
if($idade > 15 && $idade < 18 || $idade >= 65 ){
    echo"<h2>O voto é opcional</h2>";
}
if($idade < 16){
    echo"<h2>Você ainda não pode votar</h2>";
}
?>
</div>
<div>
<button><a href="../HTML/index.html">Voltar a pagina principal</a></button>
<button><a href="../HTML/voto2.html">Voltar a pagina Anterior</a></button>
</div>
</body>
</html>