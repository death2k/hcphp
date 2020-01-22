<?php 

/*


PDO Connection Mysql 

-> 5 




*/

$conn = new PDO("mysql:dbname=dbphp7;host=127.0.0.1" , "root", "");

$stmt = $conn->prepare();
?>