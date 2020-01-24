<?php 

/*


PDO Connection Mysql 

-> 5 




*/

$conn = new PDO("mysql:dbname=dbphp7;host=127.0.0.1" , "root", "");
$stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY deslogin");
$stmt->execute();



$dsn = "mysql:host=localhost;dbname=mydb";
$user = "user12";
$passwd = "12user";

$pdo = new PDO($dsn, $user, $passwd);

$stm = $pdo->query("SELECT VERSION()");

$version = $stm->fetch();

echo $version[0] . PHP_EOL;



 
?>