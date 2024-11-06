$(document).ready(function () {
  var funcion;

  $("#form-login").submit((e) => {
    e.preventDefault();

    funcion = "login";
    let email = $("#email").val();
    let pass = $("#pass").val();
    $.post(
      "../Controllers/UsuarioController.php",
      { email, pass, funcion },
      (response) => {
        if (response == "logueado") {
          toastr.success('* Logeado!');
<<<<<<< HEAD
=======
          location.href =  "index.php";

>>>>>>> cf872cd (CODIGO PRINCIPA)
        } else {
            toastr.error('* Usuario o contraseña incorrecta!');
        }
      }
    );
  });
});
