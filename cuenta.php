<?php 
session_start();


$nombre=$email=$saldo="";
$nombreerror=$emailerror=$saldoerror="";

if($_SERVER["REQUEST_METHOD"]=="POST"){

 //VALIDAR NOMBRE
    $input_nombre=trim($_POST["nombre"]);
    if(empty($input_nombre)){
        $nombre_error="El campo esta vacio";
        echo $nombre_error;
    }
    elseif(!filter_var($input_nombre, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $nombre_error="El nombre solo puede contener caractres de A_Z y a_z";
        echo $nombre_error;
    }
    else{
        $nombre=$input_nombre;
    }
//validar EMAIL 
    $input_correo=trim($_POST["correo"]);
    if(empty($input_correo)){
        $emailerror="el campo esta vacio";
        echo $emailerror;
    }
    elseif(!filter_var($input_correo, FILTER_VALIDATE_EMAIL)){
        $emailerror="el correo no es valido";
    }
    else{
        $correo=$input_correo;

    }
    //validar saldo
     $input_saldo=trim($_POST["saldo"]);
    if(empty($input_saldo)){
        $saldoerror="el campo esta vacio";
        echo $saldoerror;
    }
    elseif(!is_numeric($input_saldo)){
        $saldoerror="el saldo no es valido, solo puede contener numeros";
    }
    else{
        $saldo=floatval($input_saldo);

    }


    if(empty($nombre_error) && empty($emailerror) && empty($saldoerror)){
        $_SESSION["nombre"]=$nombre;
        $_SESSION["correo"]=$correo;
        $_SESSION["saldo"]=$saldo;
        echo "<h1>Cuenta creada</h1>";
        echo "<br>";
        echo "<a href='index.php'>Volver</a>";

    }


}

?>