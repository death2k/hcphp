<?php

// parametros por valor
function ola(){

    $argumentos = func_get_args();

    return $argumentos;

}

var_dump(ola("Bom dia"));

// parametros por referencia 

$a = 10;

function trocaValor(&$a){

 $a = 50;

 return $a; 

}

echo trocaValor($a);
echo "<br>";
echo $a;


// por referencia 

$pessoa = array('nome' => 'João ',
              'idade' => 28
);

foreach ($pessoa as &$value) {
    
    if (gettype($value) === 'integer') $value += 10; 
	
    echo $value . '<br>';

}

print_r($pessoa);


?>
