<?php
class ControleRemoto {
    private $volume;
    private $ligado;
    private $tocando;

    //metodos especiais 

    function __construct()
    {
        $this->volume = 50;
        $this->ligado = false;
        $this->tocando = false;
    }

    function getVolume(){
        return $this->volume;
    }

    public function getLigado(Type $var = null)
    {
        return $this->ligado;
    }
}

?>