
$(document).ready(function() {

    $("#btnSubmit").on('click', function () {

        var userName = document.getElementById("txtName1").value;
        var userName2 = document.getElementById("txtSurName1").value;
        var userEmail = document.getElementById("txtEmail1").value;
        var userRut = document.getElementById("txtRut1").value;
        var userAdress = document.getElementById("txtAddress1").value;
        var userPass = document.getElementById("txtPass1").value;
        var userPassRe = document.getElementById("txtPassRe1").value;
    

        

      })
    
})



/*
$("#accept").on('click', function () {

    var userName = $("#txtName").val()
    var userEmail = $("#txtEmail").val()
    var userRut = $("#txtRut").val()
    var userPass = $("#txtPass").val()
    var userPassRe = $("#txtPassRe").val()

    if (userName.length == 0 && userRut.length == 0 && userEmail.length == 0 && userPass.length == 0 && userPassRe.length == 0) {
      alert("Uno o más campos están vacíos, ingrese información")
    } else if (userName.length == 0 || userRut.length == 0 || userEmail.length == 0 || userPass.length == 0 || userPassRe.length == 0) {
      alert("Uno o más campos están vacíos, ingrese información")
    } else if (!soloLetras(userName)) {
      alert("El campo de nombre solo debe incluir letras")
    } else if (userPass != userPassRe) {
      alert("Las contraseñas no coinciden, intente nuevamente")
    } else {
      alert("Usuario Creado Éxitosamente, Volviendo al Home")
      gohome()
    }

    
  })
  */