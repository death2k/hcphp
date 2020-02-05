<?
// Codigo para conectar no banco e fazer um SELECT * FROM tb_usuarios; 


// depois converte 

$headers = array();

foreach ($usuarios[0] as $key => $value) {
    array_push($headers, ucfirst($key));
}

$file = fopen("usuarios.csv", "w+");


fclose($file);

?>