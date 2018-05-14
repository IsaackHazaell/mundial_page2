<?php

  //$destino = "";
  $nameFriend1 = $_POST["nameFriend1"];
  $nameFriend2 = $_POST["nameFriend2"];
  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];

  $content = "Nombre del primer referido: " . $nameFriend1 .
  "\n Nombre del segundo referido: " . $nameFriend2 .
  "\n Tu nombre: " . $name .
  "\n Tus comentarios: " . $message;

  mail($email, "World Cup Quiniela", $content);
  header("Location:quiniela.html")

?>
