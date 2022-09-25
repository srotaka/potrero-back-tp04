<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP Nº4 | Silvia Otaka</title>
</head>

<body>
    <h1>Trabajo Práctico - Potrero Backend</h1>
    <h2>ESTRUCTURAS DE CONTROL: PARTE 2</h2>
    <br> <br>

    <h3> 1. Mostrar los números del 1 al 100.</h3>
    <?php
    for ($i = 1; $i < 101; $i++) {
        echo $i, " - ";
    }
    ?>
    <hr>

    <h3> 2. Mostrar los números del 100 al 1.</h3>
    <?php
    for ($i = 100; $i > 0; $i--) {
        echo $i, " - ";
    }
    ?>
    <hr>

    <h3> 3. Mostrar los números pares del 1 al 100.</h3>
    <?php

    for ($i = 1; $i < 101; $i++) {
        if ($i % 2 == 0) {
            echo $i, " - ";
        }
    }
    ?>
    <hr>

    <h3> 4. Mostrar los números impares del 1 al 100.</h3>
    <?php

    for ($i = 1; $i < 101; $i++) {
        if ($i % 2 != 0) {
            echo $i, " - ";
        }
    }
    ?>
    <hr>

    <h3> 5. Mostrar la suma de los números de 1 a 20.</h3>
    <?php
    $counter = 0;
    for ($i = 1; $i < 21; $i++) {
        $counter += $i;
    }

    echo "La suma de los números del 1 al 20 es:  ", $counter, ".";
    ?>
    <hr>

    <h3> 6. Mostrar la suma de números pares de 1 a 20.</h3>

    <?php
    $counter = 0;
    for ($i = 1; $i < 21; $i++) {
        if ($i % 2 == 0) {
            $counter += $i;
        }
    }
    echo "La suma de los números pares del 1 al 20 es:  ", $counter, ".";
    ?>


    <footer style=" position: fixed; left: 0; bottom: 0; width: 100%; background-color: #ff7b90; color: white; text-align: center; padding:15px; font-size:18px">
        <div class="container">
            <div class="copyright text-center">
                &copy; Copyright 2021-2022 |
                <strong><span>Silvia Otaka</span></strong> | Programming with ❤ <br />
            </div>
        </div>
    </footer>

</html>