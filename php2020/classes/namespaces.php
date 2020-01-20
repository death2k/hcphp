<?php 


//Outra pasta Cadastro.php

class Cadastro{

    private $nome;
    private $email;
    private $senha;

    public function getNome():string
    {
        return $this->nome;
    }
    public function setNome($nome):string
    {
        $this->nome = $nome;
    }
    
    
    public function getEmail():string
    {
        return $this->email;
    }
    public function setEmail($email):string
    {
        $this->email = $email;
    }
    
    
    public function getSenha():string
    {
        return $this->senha;
    }
    public function setSenha($senha):string
    {
        $this->senha = $senha;
    }


    public function __toString()
    {
        return json_encode(array(
            "nome"=>$this->getNome();
            "email"=>$this->getNome();
            "nome"=>$this->getNome();
        ));
    }

}

// colocar dentro de pastas organizando as classes 
// config autoload (config.php)

spl_autoload_register(function($nameClass)){
    $dirCLass = "class";
    $filename = $dirCLass . DIRECTORY_SEPARATOR . $nameClass . ".php";

    if(file_exists($filename)){
        require_once($filename);
    }
}



//------- Diretorio para novas classes //
//organizar assunstos por pastas, agrupar classe em diretorios







?>