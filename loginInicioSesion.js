document.querySelector("#btnIngresar").addEventListener("click", IniciarSesion);

function IniciarSesion() {
  var sCorreo = '';
  var sContrasena = '';
  var Acceso = false;

  sCorreo = document.querySelector('#txtCorreo').value;
  sContrasena = document.querySelector('#txtContrasena').value;

  Acceso = validarCredenciales(sCorreo, sContrasena);

  console.log(Acceso);
  console.log(sCorreo);
  console.log(sContrasena);


  if (Acceso == true) {
    ingresar();
  }
}

function ingresar() {
  window.location.href = 'dash.php';
}