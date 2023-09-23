<?php
$usuario = $_POST ["usuario"];
$contrasenia = $_POST["pass"];

//check
$ckusuario = "admin";
$ckpass = 1234;

//validacion
if ($usuario==$ckusuario && $contrasenia==$ckpass) {
  header ("location:https://bbtcon.blogspot.com/?m=1");
}  else {
  echo "incorrecto";
  header ("location:https://www.marvel.com/404");
}

// mensaje en pagina
// }  else {
//    echo "Incorrecto";
// header ("location:login.html");
// }

?>
