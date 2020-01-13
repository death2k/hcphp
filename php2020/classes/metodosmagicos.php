<?php

// Treinando metodo construtor

class Endereco {

    private $logradoro;
    private $numero;
    private $cidade; 


    public function __construct($a, $b, $c){

        $this->logradoro = $a;
        $this->numero = $b;
        $this->cidade = $c;

    }  
   // final executa automatico 
    public function __destruct()
    {
       //var_dump("Destruir"); 
    }

    public function __toString()
    {
        return $this->logradoro.", " .$this->numero. ". " .$this->cidade;
    }
    
}

$meuEndereco = new Endereco("Rua Jacy", "123", "Maringa");
echo $meuEndereco; 

?>