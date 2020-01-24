<?php 

function __autoload($nomeClasse){

    require_once("$nomeClasse.php");

}
// Autoload -> arquivo com mesmo nome da classe p usar em cada caso 
// config.php

$carro = new DelRey();



// ============ Exemplo 2 


spl_autoload_register();
// Autoload -> arquivo com mesmo nome da classe p usar em cada caso 
// config.php

$carro = new DelRey();




?>