<?php 
require_once "cliente.php";
session_start();


if(!isset($_SESSION["listadecuentas"])){
    $_SESSION["listadecuentas"]=[];
}

$nombre=$_SESSION["nombre"];
$salario=$_SESSION["saldo"];

$nuevacuenta= new cuentaBancaria($nombre, $salario);

$_SESSION["listadecuentas"][]=$nuevacuenta;


header("Location:index.php");

?>