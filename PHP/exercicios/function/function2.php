<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>rotinas</title>
    <link rel="stylesheet" href="../../../CSS/estilo.css">
</head>
<body>
    <div>
        <?php
        function soma(){
            $p = func_get_args();
            $t = func_num_args();
            $s = 0;

            for($i = 0;$i < $t;$i++){
                $s += $p[$i];
            }
            return $s;
        }
        $res = soma(3,4,1,10,12);
        echo "<h2>A soma dos valores foi $res</h2>";

 
?>
    </div>
</body>
</html>