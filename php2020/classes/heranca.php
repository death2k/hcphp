<?php


// UML estudo , projetar todas as classe , antes de codificar 

class Documento {
    
    private $number;

    public function getNumber(){
        return $this->number;
    }
    public function setNumber($n){
        $this->number = $n;
    }


}

class CPF extends Documento {

    public function validar():bool{

        $numberCPF = $this->getNumber();
        // validacao de cpf
        return true;

    }
}


$dot = new CPF();
$dot->setNumber("123123123123");
var_dump($dot->validar());
echo "<br/>";
echo $dot->getNumber();



?>