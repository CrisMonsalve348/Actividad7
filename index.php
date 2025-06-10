<?php 
require_once "cliente.php";
session_start();


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
            <input type="submit"  value="Crear cuenta">
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
   
    echo "<option>";
    echo "ID: ". $indice. " ";
    echo "Titular: " . $cuenta->getTitular() . "<br><br>";
    
   
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
   
    echo "<li>";
    echo "ID: ". $indice. " ";
    echo "Titular: " . $cuenta->getTitular() . " ";
    echo "Saldo: " . $cuenta->getSaldo() . "<br><br>";
   
    echo "</li>";
   }
    
    
    ?>

    </ul>
    </section>

    </main>
    
</body>
</html>