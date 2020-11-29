function obtenerListaUsuarios() {
    var listaUsuarios = JSON.parse(localStorage.getItem("listaUsuariosLs"));
  
    if (listaUsuarios == null) {
      listaUsuarios = ['Jorge','Ospina','jorge.ospina@uao.edu.co','ospina123'];
    }
    
    return listaUsuarios;
  }
  
  function validarCredenciales(pCorreo, pContrasena) {
    var listausuarios = obtenerListaUsuarios();
    var Acceso = false;
  
    for (var i = 0; i < listausuarios.length; i++) {
      if (
        pCorreo == 'jorge.ospina@uao.edu.co' &&
        pContrasena == 'ospina123'
      ) {
        Acceso = true;
        sessionStorage.setItem(
          'usuarioActivo',
          listausuarios[i][1] + '' + listausuarios[i][2]
        );
      }
    }
    return Acceso;

  }