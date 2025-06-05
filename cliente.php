<?php 



class cuentaBancaria{

    private $titular;
    private $saldo;


    //constructor
    public function __construct($titular,$saldoinicial){
        $this->titular = $titular;
        $this->saldo = $saldoinicial;
    }
     public function getTitular(){
        return $this->titular;
    }

    //Getter del saldo
    public function getSaldo(){
        return $this->saldo;
    }

    // Metodo -> Depositar dinero
    public function depositar($cantidad){
        if ($cantidad > 0){
            $this->saldo += $cantidad;
        }
    }

    // Metodo -> Retirar dinero
    public function retirar($cantidad){
        if($cantidad > 0 && $cantidad <= $this->saldo){
            $this->saldo -= $cantidad;
        }
    }

    // Metodo -> Mostrar los saldos
    public function mostrarSaldos() {
        return "Titular: {$this->titular}, Saldo actual {$this->saldo}";
    }
}

$nombre=$_SESSION["nombre"];
$salario=$_SESSION["saldo"];
$cuenta=new cuentaBancaria($nombre,$salario);
echo $cuenta->mostrarSaldos();

?>