<?php

  $msg = null;
  if(isset($_POST["phpmailer"]))
  {
    $friend1 = htmlspecialchars($_POST["friend1"]);
    $friend2 = htmlspecialchars($_POST["friend2"]);
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = $_POST["message"];

    require "../PHPMailer/class.phpmailer.php";
    require "../views/bodyemail.php";

    $mail = new PHPMailer;
    $mail->Host = "localhost";
    $mail->From = "isaachvc04@gmail.com";
    $mail->FromName = "Frida & Ko";
    $mail->Subject = "Concurso mundial latin 2018";
    $mail->Body = $body;
    $mail->isHTML(true);
    // Se envia al correo del formulario y el nombre
    $mail->addAddress($email, $name);

    if(!$mail->send())
    {
        echo 'OH OH Ocurrio un error el mensaje no se pudo enviar.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    }
    else
    {
        echo 'El mensaje se envio con éxito';
    }

  }

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

  $sql = "INSERT INTO informacion VALUES ('$friend1', '$friend2','$name','$email','$message','','')";

  $ejecutar = mysqli_query($conection, $sql);
  if(!$ejecutar)
  {
    echo "Tuvimos un error con la base de datos";
  }
  else
  {
    echo "Datos guardados correctamente";
    header("Location: ../views/quiniela.html");
  }

?>
