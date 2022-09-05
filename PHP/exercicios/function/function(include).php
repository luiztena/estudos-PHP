<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="10">
    <title>Document</title>
</head>
<body>
<?php
function hora(){
    date_default_timezone_set('America/Belem');
    $hora = date ('H:m:s');
    echo "<h2> São $hora</h2>";
}
function dia(){
$data = date("m.d.y");
echo "<h2>A data de hoje é $data</h2>" 
}
?>
</body>
</html>