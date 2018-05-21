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

		$mail = new PHPMailer;
		$mail->Host = "localhost";
		$mail->From = "isaachvc04@gmail.com";
		$mail->FromName = "Frida & Ko";
		$mail->Subject = "Quiniela mundial 2018";
		$mail->Body = "Hola $name tus referidos invitados son $friend1 y $friend2,
		Gracias por participar en este increible concurso, con gusto atenderemos tus mensaje: $message
		en una llamada telefonica.";
		$mail->isHTML(true);
		// Se envia al correo del formulario y el nombre
		$mail->addAddress($email, $name);

		if(!$mail->send()) {
		    echo 'OH OH Ocurrio un error el mensaje no se pudo enviar.';
		    echo 'Mailer Error: ' . $mail->ErrorInfo;
		} else {
		    echo 'El mensaje se envio con éxito';
		}

	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Formulario</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="../images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../css/util.css">
	<link rel="stylesheet" type="text/css" href="../css/main.css">
<!--===============================================================================================-->
</head>
<body>

	<div class="bg-container-contact100" style="background-image: url(../images/bg-05.jpg);"></div>

	<div class="container-contact100">
		<div class="wrap-contact100">
			<div class="contact100-form-title" style="background-image: url(../images/bg-04.jpg);">
				<span class="text-center">Llena el formulario</span>
			</div>

			<form class="contact100-form validate-form" method="POST" action="../bd/base.php">
				<div class="wrap-input100 validate-input">
					<input id="nameFriend1" class="input100" type="text" name="friend1" placeholder="Nombre completo del referido 1">
					<span class="focus-input100"></span>
					<label class="label-input100" for="name">
						<span class="lnr lnr-user m-b-2"></span>
					</label>
				</div>

				<div class="wrap-input100 validate-input">
					<input id="nameFriend2" class="input100" type="text" name="friend2" placeholder="Nombre completo del referido 2">
					<span class="focus-input100"></span>
					<label class="label-input100" for="name">
						<span class="lnr lnr-user m-b-2"></span>
					</label>
				</div>


				<div class="wrap-input100 validate-input">
					<input id="name" class="input100" type="text" name="name" placeholder="Tu nombre completo">
					<span class="focus-input100"></span>
					<label class="label-input100" for="name">
						<span class="lnr lnr-user m-b-2"></span>
					</label>
				</div>


				<div class="wrap-input100 validate-input">
					<input id="email" class="input100" type="text" name="email" placeholder="Ej. ejemplo@email.com">
					<span class="focus-input100"></span>
					<label class="label-input100" for="email">
						<span class="lnr lnr-envelope m-b-5"></span>
					</label>
				</div>

				<div class="wrap-input100">
					<textarea id="message" class="input100" name="message" placeholder="Tus comentarios..."></textarea>
					<span class="focus-input100"></span>
					<label class="label-input100 rs1" for="message">
						<span class="lnr lnr-bubble"></span>
					</label>
				</div>

				<!-- Validación de formulario incorrecta -->
				<!-- a no valida pero si va a ruta -->
				<!-- Button si valida pero no va a ruta -->
				<!-- <div class="container-contact100-form-btn">
						<a class="contact100-form-btn" href='quiniela.html'>
							Enviar
						</a>
				</div> -->

				<!-- Otra forma de enviar datos -->
				<input type="hidden" name="phpmailer">
				<div class="container-contact100-form-btn">
					<input class="contact100-form-btn" type="submit" value="Enviar" src="quiniela.html">
				</div>

			</form>
		</div>
	</div>



<!--===============================================================================================-->
	<script src="../vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="../vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="../vendor/bootstrap/js/popper.js"></script>
	<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="../vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="../vendor/daterangepicker/moment.min.js"></script>
	<script src="../vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="../vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="../js/main.js"></script>
	<!-- Libreria del nuevo formulario -->
<!--===============================================================================================-->
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-23581568-13');
	</script>
</body>
</html>
