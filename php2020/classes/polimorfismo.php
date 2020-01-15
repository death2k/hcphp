<?php 

// ter muitas formas .. 
// classe pai com o mesmo metodo 

class Animal {

    public function falar(){
        return "Som";
    }
    public function mover(){
        return "Anda";
    }


}


class Cachorro extends Animal {

    public function falar()
    {
        return "Late"; 
    }
}

class Gato extends Animal {
    public function falar()
    {
        return "Mia"; 
    }
}
class Passaro extends Animal {
    public function falar()
    {
        return "Canta"; 
    }
    public function mover()
    {
        return "Voa e " . parent::mover(); 
    }
}


$pluto = new Cachorro();
echo $pluto->falar() . "<br>";
echo $pluto->mover() . "<br>";
echo "--------------- <br>" ;

$garfild = new Gato();
echo $garfild->falar() . "<br>";
echo $garfild->mover() . "<br>";
echo "--------------- <br>" ;
$ave = new Passaro();
echo $ave->falar() . "<br>";
echo $ave->mover() . "<br>";





?>