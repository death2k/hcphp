<?php

class ContaBanco {
    //atributos
    public $numconta;
    protected $tipo;
    private $saldo;
    private $dono;
    private $status;

    //metodos construtor

    public function Constructor(){
        $this->$saldo = 0;
        $this->$status = falso;
    }

    // Metodos public

    public function abrirConta(){
        
    }
    public function fecharConta(){

    }
    public function depositar(){

    }
    public function sacar(){

    }
    public function pagarMensalidade(){

    }
}



?>