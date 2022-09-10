<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/estilo.css">
    <title>POO</title>
    <style>

        body::-webkit-scrollbar {
        width: 14px; 
        height:16px;
                 
        }

        body::-webkit-scrollbar-track {
        background: rgba(0,0,0,0.6);        
}
        body::-webkit-scrollbar-thumb {
        background-color:rgba(140,140,140,0.5);    /* color of the scroll thumb */
        border-radius: 30px;       
        border: 3px solid black;  /* creates padding around scroll thumb */ 
        }

        body{
            background-color:rgb(0,0,30);

        }
        div#canetas{
            background-color:rgb(0,0,30);
            width:1800px;
            height:1100px;
        }
        header{
            padding-top:20px;
            margin-right:400px;
        }

        h2{
            font-family:Times;
            text-transform:uppercase;
            font-size:32pt;
        }
        h2#lanche{
            color:black;
            text-shadow:none;
            font-family:Arial;
            letter-spacing:2px;
        }
   
        h2#titulo{
            color:black;
            text-shadow:none;
            font-family:arial;
        }
        h2#footer{
            margin-right:400px;
        }


        pre{
            color:cyan;
            font-size:25pt;
            text-shadow:2px 2px black;
            text-align: justify;
            margin-left:5%;
     
            height:680px;
        }
        pre#azul{
            position:absolute;
            top:28%;
            left:-1%;
        }

        pre#preto{
            color:darkgrey;
            text-shadow:2px 1px 2px black;
            position:absolute;
            top:33%;
            left:40%;
            border-left:3px solid black;
            border-right:3px solid black;
            padding-left:50px;
            padding-right:25px;
            height:570px;
        }
        pre#vermelho{
            color:red;
            position:absolute;
            top:33%;
            left:89%;
            height:569px;

        }
        div#c1{
            position:absolute;
            left:18%;
            top:135%;
        }
        a{
            color:white;
            padding:20px;
            background-color:rgb(20,20,20);
            border:2px solid white;
            border-radius:25%;
            text-transform:uppercase;
        }
       

        a:hover{
        color:yellow;
        }

        div#c2{
            position:absolute;
            top:135%;
            left:65%;
        }
        div#c3{
            position:absolute;
            top:135%;
            right:-30%;
        }

        input{
        width:155px;
        border:2px black solid;
        text-transform:uppercase;
        font-weight:bold;

        }
        input:hover{
        color:blue;
        text-shadow:2px 2px 2px lightgrey;
        cursor:pointer;
        }

        div#lanches{
            border-top:3px solid black;
            background-color:gold;
            width:1800px;
            height:1500px;
            margin-top:1000px;
        }

        pre#combo1{
            color:black;
      
            text-align:left;
        }
      pre#combo2{
        position:absolute;
        top:205%;
        left:50%;
        color:black;
      }
      img#lanche{
        width:300px;
        height:300px;
        position:absolute;
        top:240%;
        left:100%;
      }
      img#pizza{
        width:400px;
        height:400px;
        position:absolute;
        top:340%;
        left:100%;
      }

      pre#combo3{
        color:black;
        font-size:20pt;
      }
      span#s1{
      margin-left:200px;
      }

      pre#combo4{
        position:absolute;
        top:312%;
        left:50%;
        font-size:20pt;
        color:black;
      }
      div#cadastro{
        background-color:aliceblue;
        width:1800px;
        height:1800px;
  

      }
      h2#titulo3{
        color:black;
        text-shadow:none;

      }
      pre#cad1, pre#cad2, pre#cad3, pre#cad4{
        color:black;
        text-shadow:none;
        font-family:courier;
        font-weight:bold;
      }
      pre#cad2{
        position:absolute;
        top:500%;
      }
      pre#cad3{
        position:absolute;
        top:570%;     
      }
      pre#cad4{
        position:absolute;
        top:630%;
      }
      a#gh{
        position:absolute;
        left:45%;
      }
      a#gh:hover{
       cursor:pointer;
      }
    </style>
</head>
<body>
    <div id="canetas"> 
    <header>
        <h2>Objeto caneta:</h2>
    </header>
    <pre id=azul>
    <?php
    echo "<h2>Caneta 1</h2>";
    require_once 'caneta.php';
    $c1 = new caneta;
    $c1 -> cor = "Azul";
    $c1 -> ponta = 0.5;
    $c1 -> carga = 25;
    if(isset($_GET['a']) == 1){
        $c1 -> destampar();
     
       }
    elseif(isset($_GET['b']) == 1){
       $c1 -> tampar();
   } 
    $c1 -> rabiscar();
    print_r($c1);
    echo "</br>";
    
?> </pre>

<div id='c1'>
        <a id='c1a' href="exemplo1.php?a=1&d=1&f=1">Destampar caneta</a>
        <a id='c1b' href="exemplo1.php?b=1&c=1&f=1">Tampar caneta</a>
</div>
<pre id='preto'>
<?php
    echo "<h2>Caneta 2</h2>";
    require_once 'caneta.php';
    $c2 = new caneta;
    $c2 -> cor = "Preta";
    $c2 -> ponta = 0.8;
    $c2 -> carga = 75;
    if(isset($_GET['c']) == 1){
        $c2 -> destampar();
     
       }
    elseif(isset($_GET['d']) == 1){
       $c2 -> tampar();
   } 
    $c2 -> rabiscar();
    print_r($c2);
    ?>
</pre>

<div id='c2'>
        <a id='c2a' href="exemplo1.php?c=1&b=1&f=1">Destampar caneta</a>
        <a id='c2b' href="exemplo1.php?d=1&b=1&e=1">Tampar caneta</a>
</div>

<pre id='vermelho'>
<?php
    echo "<h2>Caneta 3</h2>";
    require_once 'caneta.php';
    $c3 = new caneta;
    $c3 -> cor = "Vermelha";
    $c3 -> ponta = 0.8;
    $c3 -> carga = 75;
    if(isset($_GET['e']) == 1){
        $c3 -> destampar();
     
       }
    elseif(isset($_GET['f']) == 1){
       $c3 -> tampar();
   } 
    $c3 -> rabiscar();
    print_r($c1);
    ?>
</pre>
<div id='c3'>
        <a id='c2a' href="exemplo1.php?e=1&b=1&d=1">Destampar caneta</a>
        <a id='c2b' href="exemplo1.php?f=1&a=1&d=1">Tampar caneta</a>
</div>

<div id="lanches">
<header>
        <h2 id="lanche">Combo de lanches:</h2>
</header>

    <pre id="combo1">
    <?php
    echo "<h2 id='titulo'>Combo ideal</h2>";
    require_once 'lanche.php';
    $l1 = new lanche;
    $l1 -> hamburger = "X-calabresa";
    $l1 -> refri = "fanta laranja";
    $l1 -> batata = "Batata média";
    $l1 -> pizza = "Portuguesa média";
    $l1 -> preço = 55;
    $l1 -> status = "A caminho";
    print_r($l1);
    echo "</br>";
    ?> </pre>

    <pre id='combo2'>
    <?php
    echo "<h2 id='titulo'>Combo infarto</h2>";
    $l1 = new lanche;
    $l1 -> hamburger = "X-tudo";
    $l1 -> refri = "coca-cola";
    $l1 -> batata = "Batata grande";
    $l1 -> pizza = "Bacon com lombo";
    $l1 -> preço = 85;
    $l1 -> status = "Preparando";
    print_r($l1);
    echo "</br>";
    ?> </pre>
<img id="lanche" src="../Imagens/lanche.png">
<pre id='combo3'>
<?php
    echo "<h2 id='titulo'>Combo netflix</h2>";
    $l1 = new lanche;
    $l1 -> hamburger = "Não vem";
    $l1 -> refri = "Sprite";
    $l1 -> batata = "Batata Mega grande";
    $l1 -> pizza = "Frango com catupiry grande + <br><span id='s1'> pizza de brigadeiro pequena</span>";
    $l1 -> preço = 55;
    $l1 -> status = "Na fila";
    print_r($l1);
    echo "</br>";
?></pre>
<img id="pizza" src="../Imagens/pizza.png">
<pre id="combo4">
<?php
    echo "<h2 id='titulo'>Combo modesto</h2>";
    $l1 = new lanche;
    $l1 -> hamburger = "X-eggs calabresa +<br> <span id='s1'> x-bacon</span>";
    $l1 -> refri = "Coca-cola";
    $l1 -> batata = "Não vem ";
    $l1 -> pizza = "Mista Média";
    $l1 -> preço = 65;
    $l1 -> status = "Entregado";
    print_r($l1);
    echo "</br>";
?></pre>
</div>

<div id="cadastro">
<header>
    <h2 id="titulo3">Formularios</h2>
</header>
    <pre id="cad1">
        <?php
        require_once 'formulario.php';
        $f1 = new cadastro;
        $f1 -> nome = "Roberto";
        $f1 -> sobrenome = "Assunção";
        $f1 -> email = "robertoassuncao@gmail.com";
        $f1 -> senha = "RobertootreboR12";
        $f1 -> DiaCadastro = "20/05/2022";
        print_r($f1);
        ?>
    </pre>
    <pre id='cad2'>
        <?php        
                $f1 = new cadastro;
                $f1 -> nome = "Cesar";
                $f1 -> sobrenome = "Abrel";
                $f1 -> email = "cesarogrande@gmail.com";
                $f1 -> senha = "Lo-fi Hip-Hop";
                $f1 -> DiaCadastro = "08/12/2021";
                print_r($f1);
        ?>
    </pre>
    <pre id='cad3'>
    <?php        
                $f1 = new cadastro;
                $f1 -> nome = "Jaime";
                $f1 -> sobrenome = "Coelho";
                $f1 -> email = "coelho@gmail.com";
                $f1 -> senha = "Adoro frango frito";
                $f1 -> DiaCadastro = "10/09/2022";
                print_r($f1);
        ?>
    </pre>

    <pre id='cad4'>
    <?php        
                $f1 = new cadastro;
                $f1 -> nome = "Leiticia";
                $f1 -> sobrenome = "Coutinho";
                $f1 -> email = "let123@gmail.com";
                $f1 -> senha = "Batata";
                $f1 -> DiaCadastro = "15/04/2022";
                print_r($f1);
        ?>
    </pre>

</div>
<footer>
    <h2 id="footer">Criado por: Luiz Tenã</h2>
   <a id='gh' href='https://github.com/luiztena' target='blank'> https://github.com/luiztena</a>
</footer>
</body>
</html>