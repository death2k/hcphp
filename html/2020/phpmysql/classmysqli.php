<?php 

// Parametros de conexao de banco de dados por function 
$conn = new mysqli("localhost", "root", "", "dbphp7");

if ($conn->connect_error) {
    echo "Error: " . $conn->connect_error;
}


/* --- PASSANDO POR FORA DO BANCO 
$stmt = $conn->prepare("INSERT INTO tb_usuario (deslogin, dessenha) VALUES (? , ?)");
$stmt->bind_param("ss", $login, $pass);
$login = "user";
$pass = "12345";
$stmt->execute();

$login = "root";
$pass = "teste123";
*/


/* dentro do banco de dados 
*/

$result = $conn->query("SELECT * FROM tb_usuarios ORDER BY deslogin");

$data = array();

while ($row = $result->fetch_array()) {
   // var_dump($row);
   array_push($data, $row);
}

echo json_encode($data);


?>