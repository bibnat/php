<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<h1>Mi programa</h1>
<?php
// Ejercicio 1
echo "Hola mundo<br>";

// Ejercicio 2
$mensaje = "Hola mundo";
echo $mensaje . "<br>";

// Ejercicio 3
$numero1 = 10;
$numero2 = 5;

$suma = $numero1 + $numero2;
$resta = $numero1 - $numero2;
$multiplicacion = $numero1 * $numero2;
$division = $numero1 / $numero2;
$resto = $numero1 % $numero2;

echo "Suma: " . $suma . "<br>";
echo "Resta: " . $resta . "<br>";
echo "Multiplicación: " . $multiplicacion . "<br>";
echo "División: " . $division . "<br>";
echo "Resto: " . $resto . "<br>";

// Ejercicio 4
$gradosCelsius = 20;
$gradosFahrenheit = ($gradosCelsius * 9/5) + 32;
echo "20°C es igual a " . $gradosFahrenheit . "°F<br>";

// Ejercicio 5
// a) Calcular el perímetro y el área de un rectángulo
$baseRectangulo = 18;
$alturaRectangulo = 12;

$perimetroRectangulo = 2 * ($baseRectangulo + $alturaRectangulo);
$areaRectangulo = $baseRectangulo * $alturaRectangulo;

echo "Perímetro del rectángulo: " . $perimetroRectangulo . " cm<br>";
echo "Área del rectángulo: " . $areaRectangulo . " cm<br>";

// b) Calcular el perímetro y el área de un círculo
$radioCirculo = 30;
$pi = 3.14;

$perimetroCirculo = 2 * $pi * $radioCirculo;
$areaCirculo = $pi * pow($radioCirculo, 2);

echo "Perímetro del círculo: " . $perimetroCirculo . " cm<br>";
echo "Área del círculo: " . $areaCirculo . " cm<br>";
?>


  </body>
</html>
