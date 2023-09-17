<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>TP 2</title>
  </head>
  <body>
<h1> EJERCICIOS TP2 </h1>
    <?php
// Ejercicio 1
$n1 = 8;

if ($n1 >= 0) {
    echo "Ejercicio 1: '$n1' es un número positivo.<br><br>";
} else {
    echo "Ejercicio 1: '$n1' no es un número positivo.<br><br>";
}

// Ejercicio 2
$n2 = 3;

if ($n2 > 1 && $n2 < 10) {
    echo "Ejercicio 2: '$n2' es mayor a 1 y menor a 10.<br><br>";
} else {
    echo "Ejercicio 2: '$n2' no cumple con la condición de ser mayor a 1 y menor a 10.<br><br>";
}

// Ejercicio 3
$n3 = 1;

if ($n3 > 10 || $n3 < 2) {
    echo "Ejercicio 3: '$n3' es mayor a 10 o menor a 2.<br><br>";
} else {
    echo "Ejercicio 3: '$n3' no cumple con la condición de ser mayor a 10 o menor a 2.<br><br>";
}

// Ejercicio 4
$numero1 = 10;
$numero2 = 8;

if ($numero1 > $numero2) {
    $suma = $numero1 + $numero2;
    $resta = $numero1 - $numero2;
    echo "Ejercicio 4: numero1 es mayor que numero2. Suma: $suma, Resta: $resta<br><br>";
} elseif ($numero2 > $numero1) {
    $multiplicacion = $numero1 * $numero2;
    $division = intdiv($numero1, $numero2);
    $resto = $numero1 % $numero2;
    echo "Ejercicio 4: numero2 es mayor que numero1. Multiplicación: $multiplicacion, División Entera: $division, Resto: $resto<br><br>";
} else {
    echo "Ejercicio 4: numero1 y numero2 son iguales.<br><br>";
}
?>


  </body>
</html>
