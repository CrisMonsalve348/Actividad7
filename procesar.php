<?php 
session_start();
require_once "cliente.php";

if(!isset($_SESSION["listadecuentas"])){
    $_SESSION["listadecuentas"]=[];
}

$nombre=$_SESSION["nombre"];
$salario=$_SESSION["saldo"];

$nuevacuenta= new cuentaBancaria($nombre, $salario);

$_SESSION["listadecuentas"][]=$nuevacuenta;
var_dump($_SESSION["listadecuentas"]);

echo "<h1>Cuenta creada</h1>";
echo "<br>";
echo "<a href='index.php'>Volver</a>";

?>