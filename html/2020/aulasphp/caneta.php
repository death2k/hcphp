<?php

class Caneta {
    
    public $modelo;
    public $cor;
    public $ponta;
    public $carga;
    public $tampada;

    public function rabiscar(){
        
        if($this->tampada == true){
            echo "<p>Nao posso Rabiscar</p>";
        }else{
            echo "<p>Estou Rabiscando...</p>";
        }

        
       
       }
       
       private function tampar(){
        
        $this->tampada = true;

       }
       
       private function destampada(){
        $this->tampada = false;
       }


}



?>
