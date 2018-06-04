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

    $team1 = $_POST['team1'];
    $team2 = $_POST['team2'];

    echo $team1;
    echo $team2;

    $sql = "INSERT INTO informacion VALUES ('','','','','','','$team1', '$team2')";

    $ejecutar = mysqli_query($conection, $sql);
    if(!$ejecutar)
    {
      echo "Tuvimos un error con la base de datos";
    }
    else
    {
      echo "Datos guardados correctamente";
      header("Location: ../views/end.html");
    }

?>
