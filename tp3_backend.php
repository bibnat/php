<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title><h2>TP3<h2></title>
  </head>
    <body>

    <p style="text-align: center; font-size: 24px; font-weight: bold;">TP3 WHILE - DO WHILE - FOR</p>
    
  <?php


    print "<h3>Números del 1 al 100</h3>";
    for ($i = 1; $i <= 100; $i++) {  //++ incrementa el valor en 1 unidad
        print "$i ";
    }


    print "<h3>Números del 100 al 1</h3>";
    $i = 100;
   while ($i >= 1) {
       print "$i ";
       $i--; //-- decremento del valor en 1 unidad
   }


    print "<h3>Números pares del 1 al 100</h3>";
    $i = 2;
      do {
          print "$i ";
          $i += 2;
      } while ($i <= 100);


    print "<h3>Números impares del 1 al 100</h3>";
    for ($i = 1; $i <= 100; $i += 2) {
        print "$i ";
    }


    print "<h3>Suma de los números de 1 a 20</h3>";
    $suma = 0;
    $i = 1;
    while ($i <= 20) {
        $suma += $i;
        $i++;
    }
    print "La suma es: $suma";


    print "<h3>Suma de números pares de 1 a 20</h3>";
    $suma_pares = 0;
     $i = 2;
     do {
         $suma_pares += $i;
         $i += 2;
     } while ($i <= 20);
     print "La suma de los pares es: $suma_pares";

     ?>

   </body>
 </html>
