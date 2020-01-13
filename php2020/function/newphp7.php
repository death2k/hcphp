<?php 


// novos parametros php7 

function soma(int ...$valores){

    return array_sum($valores);



}

echo soma(2,2);
echo '<br>';
echo soma(50,2);
echo '<br>';
echo soma(2.4,2.8);
echo '<br>';


// news
function soma(int ...$valores):string {

    return array_sum($valores);



}

echo soma(2,2);
echo '<br>';
echo soma(50,2);
echo '<br>';
echo soma(2.4,2.8);
echo '<br>';


// new features

php


// funcoes recursivas 



?>