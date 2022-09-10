<?php
class caneta{
var  $modelo;
var $cor;
var $ponta;
var $carga;
var $tampada;

function rabiscar() {
    if($this->tampada == true){
        echo "<h2 style='color:red;'>Destampe a caneta </h2>";
    } if($this->tampada == false){
        echo "<h2 style='color:springgreen;'>Pronta para rabiscar!</h2>";
    }
}

function tampar(){
    $this-> tampada = true;
}

function destampar(){
    $this-> tampada = false;

}}
?>