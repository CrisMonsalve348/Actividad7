<?php 
session_start();
require_once "cliente.php";

$monto="";
$montoerror="";
if($_SERVER["REQUEST_METHOD"]=="POST"){

    //validar saldo
     $input_monto=trim($_POST["monto"]);
    if(empty($input_monto)){
        $montoerror="el campo esta vacio";
        echo $montoerror;
    }
    elseif(!is_numeric($input_monto)){
        if(isset($_POST["retirar"])){
            $montoerror="La cantidad a retirar no es valida, solo puede ingresar numeros";
            echo $montoerror;
        }
        else{
            $montoerror="La cantidad a depositar no es valida, solo puede ingresar numeros";
            echo $montoerror;
        }
    }
    else{
        $monto=floatval($input_monto);

    }

    if(empty($montoerror)){
        if(isset($_POST["retirar"])){
            if($_POST["cuenta"]==$_SESSION["listadecuentas"]){

            }
        }
    }
    
}



?>