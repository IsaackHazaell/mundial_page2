function enviar_datos()
{
    var nameFriend1 = document.getElementById("nameFriend1").value
    var nameFriend2 = document.getElementById("nameFriend2").value
    var name = document.getElementById("name").value
    var email = document.getElementById("email").value
    var message = document.getElementById("message").value

    var url = "formulario.php";

    $.ajax({
      type: "post",
      url:url,
      data: {
        nameFriend1:nameFriend1,
        nameFriend2: nameFriend2,
        name: name,
        email: email,
        message: message
      },
      // Aqui se muestran los datos, donde los queremos mostrar (Esto tendrá que
      // irse a un correo y a la base de datos)
      success:function(datos){
        $("#show-data").html(datos);
      }
    })
}
