<?php 
session_start();

require_once "cliente.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./estilos/style.css">
</head>
<body>
    <main>
    <section class="seccion1">
        <h1>Crear cuenta</h1>
        <br>
        <form action="cuenta.php" method="post">
            Nombre
            <br>
            <input type="text" name="nombre">
            <br>
            EMAIL
            <br>
            <input type="text" name="correo">
            <br>
            Saldo inicial
            <br>
            <input type="text" name="saldo">
            <br>
            <input type="submit" name="crear" value="Crear cuenta">
        </form>
    </section>
    <hr>
    <section class="opereciones">
    <h1>Opereciones bancarias</h1>
    <br>    
    <form action="consignas.php" method="post">
        cuenta
        <br>
        <select name="cuenta" id="cuenta">
            <option value="">Seleccionar</option>
            <?php
             foreach($_SESSION["listadecuentas"] as $indice => $cuenta){
    $arr = (array) $cuenta;
    $titular = $arr["\0cuentaBancaria\0titular"] ?? "N/D";
    $saldo = $arr["\0cuentaBancaria\0saldo"] ?? 0;
    echo "<option>";
    echo "ID: $indice ";
    echo " $titular<br> ";
    
    echo "</option>";
   }
   ?>
        </select>
        <br>
        Monto:
        <br>
        <input type="text" name="monto">
        <br>
        <input type="submit" value="Retirar" name="retirar">
        <input type="submit" value="Depositar" name="depositar">

    </form>
    </section>
    <section class="lista">
    <ul>
    <?php 
    
    
    
   foreach($_SESSION["listadecuentas"] as $indice => $cuenta){
    $arr = (array) $cuenta;
    $titular = $arr["\0cuentaBancaria\0titular"] ?? "N/D";
    $saldo = $arr["\0cuentaBancaria\0saldo"] ?? 0;
    echo "<li>";
    echo "ID: $indice ";
    echo "Titular: $titular ";
    echo "Saldo: $saldo<br> ";
    echo "</li>";
   }
    
    
    ?>

    </ul>
    </section>

    </main>
    
</body>
</html>