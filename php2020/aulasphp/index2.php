<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php 

require_once "caneta.php"; 

$c1 = new Caneta;
$c1->cor = "azul";
$c1->ponta = 0.5;
$c1->tampada = false;
$c1->destampada();
print_r($c1);
echo "<br/>>";
$c2 = new Caneta;
$c2->cor = "Verde";
$c2->carga = 50;
$c2->tampar();
print_r($c2);

?>
    
</body>
</html>