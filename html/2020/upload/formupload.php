<?php 

// pega o arquivo 
    if ($_SERVER["REQUEST_METHOD"] === "POST") {

        $file = $_FILES["fileupload"];

        if ($file["error"]) {
            
            throw new Exception("Error Processing Request: ".$file["error"]);
            
        }
        
        $dirUploads =  "uploads";
        
        // Verificar pasta existente , se não existir criar a pasta com mkdir 
        if (!is_dir($dirUploads)) {
            
            mkdir($dirUploads);

        }
        
        if (move_uploaded_file($file["tmp_name"], $dirUploads . DIRECTORY_SEPARATOR . $file["name"])) {
            echo "Upload Processing OK!";
        } else {
            throw new Exception("Error Processing Request Upload");
        }

    }

    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formhtml</title>
</head>
<body>
    <form action="" method="POST" enctype="multipart/form-data" >
        <input type="file" name="fileupload" id="">
        <button type="submit">Send</button>
    </form>
</body>
</html>