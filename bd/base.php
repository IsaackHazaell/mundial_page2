<?php

  //Conectamos con el servidor
  $conection = mysqli_connect('localhost', 'root', '');
  //Verificamos la conexion
  if(!$conection)
  {
    echo "No se pudo conectar con el servidor";
  }
  else
  {
    $database = mysqli_select_db($conection, 'mundial_quiniela');
    if(!$database)
    {
      echo "No se encontro la base de datos";
    }
  }

  $friend1 = $_POST['friend1'];
  $friend2 = $_POST['friend2'];
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  $sql = "INSERT INTO informacion VALUES ('$friend1', '$friend2','$name','$email','$message')";

  $ejecutar = mysqli_query($conection, $sql);
  if(!$ejecutar)
  {
    echo "Tuvimos un error con la base de datos";
  }
  else
  {
    echo "Datos guardados correctamente";
  }

?>
