<?php

// Recursos de data e time 

echo date("");

echo date("d/m/Y H:i:s", 1578681444);
echo "<br>";
echo time();


// strtotime 

$ts = strtotime("2001-09-11");


echo date(l, "d/m/Y", $ts );





?>