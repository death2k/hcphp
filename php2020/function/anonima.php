<?php 


function test($callback){

    //processo lento -terminou

    $callback();

}

test(function(){

    echo "terminou";

});

// outro exemplo 

$fn = function($a){

    var_dump($a);

}; 

$fn("oi");


?>
