$(document).ready(function () {
    var funcion;
    verificar_sesion();
  
    function verificar_sesion() {
      funcion = "verificar_sesion";
      $.post('./Controllers/UsuarioController.php', { funcion }, (response) => {
        console.log(response);
        if (response != '') {
          let sesion  = JSON.parse(response);
          $('#nav_login')
        }
      });
    }
  });
  