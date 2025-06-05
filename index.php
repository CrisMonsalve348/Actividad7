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
            <input type="submit" value="Crear cuenta">
        </form>
    </section>
    <hr>
    <section class="opereciones">
    <h1>Opereciones bancarias</h1>
    <br>    
    <form action="procesar.php" method="post">
        cuenta
        <br>
        <select name="cuenta" id="cuenta">
           
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

    </section>

    </main>
    
</body>
</html>