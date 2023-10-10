<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title><h2>TP4<h2></title>
  </head>
    <body>

    <p style="text-align: center; font-size: 24px; font-weight: bold;">TP4 MATRICES</p>


    <?php


  print "<p><u> Ejercicio 1: </u></p>";
  $pares = [];
  for ($i = 2; $i <= 20; $i += 2) {
      $pares[] = $i;
  }
  foreach ($pares as $numero) {
      print $numero . "<br>";
  }


  print "<p><u>Ejercicio 2: </u></p>";
  $arraySinI = ["Pedro", "Ana", 34, 1];
  print_r($arraySinI);


  print "<p><u>Ejercicio 3: </u></p>";
  $datosPersonales = [
      "Nombre" => "Pedro",
      "Apellido" => "Torres",
      "Dirección" => "Av. Mayor 3703",
      "Teléfono" => "1122334455"
  ];
  print_r($datosPersonales);


  print "<p><u>Ejercicio 4: </u></p>";
  $ciudSinI = ["Madrid", "Barcelona", "Londres", "New York", "Los Ángeles", "Chicago"];
  foreach ($ciudSinI as $indice => $ciudad) {
      print "La ciudad con el índice $indice tiene el nombre $ciudad.<br>";
  }


  print "<p><u>Ejercicio 5: </u></p>";
  $ciudConI = [
      "MD" => "Madrid",
      "BCL" => "Barcelona",
      "LD" => "Londres",
      "NY" => "New York",
      "LA" => "Los Ángeles",
      "CCG" => "Chicago"
  ];
  foreach ($ciudConI as $indice => $ciudad) {
      print "El índice de $ciudad es $indice.<br>";
  }

  ?>


  </body>
</html>
