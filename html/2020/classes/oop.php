<?php 
// Conceitos a Orientação a Objeto 

 //classe - organizar o codigo 
 // -- variaveis e funcoes (atributos e metodos)
 // objeto -> instancia , quando vai usar a classe 

 // variavel que representa ou tira uma copia 


 // Primeira classe 



class Pessoa {

    public $nome; // atributo

    public function falar(){ //metodo 

        return "Meu nome é " .$this->nome; // encapsulamento

    }
}

$glaucio = new Pessoa();
$glaucio->nome = "Glaucio Daniel";
echo $glaucio->falar(); 







?> 