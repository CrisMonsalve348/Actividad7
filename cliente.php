<?php 
session_start();


class cuentaBancaria(){

    private $titular;
    private $saldo;


    //constructor
    public function __construct($titular,$saldoinicial){
        $this->titular = $titular;
        $this->saldo = $saldoinicial;
    }
}


?>