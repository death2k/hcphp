<?php 


// Classe Abstrata
interface Veiculo {

    public function acelerar($velocidade);
    public function freiar($velocidade);
    public function trocarMarcha($marcha);

}

abstract class Automovel implements Veiculo {
    
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

class Delrey extends Automovel {
    
    public function empurrar(){

    }

}


$carro = new Automovel();

$carro->acelerar("50");






?>