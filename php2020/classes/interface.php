<?php 

// Interface padroes .. metodo certinho

// implementos 

interface Veiculo {

    public function acelerar($velocidade);
    public function freiar($velocidade);
    public function trocarMarcha($marcha);

}

class Civic implements Veiculo{
    
    public function acelerar($velocidade){
        echo "O Veiculo acelerou até " . $velocidade . "km/h";   
    }
    public function freiar($velocidade){
        echo "O Veiculo frenou até " . $velocidade . "km/h";   
    }
    public function trocarMarcha($marcha){
        echo "O Veiculo engatou a marcha" . $marcha;   
    }

}


$carro = new Civic();
$carro->acelerar("200");
$carro->freiar("300");
$carro->trocarMarcha("2");






?>