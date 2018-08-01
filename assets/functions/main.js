$(document).ready(function(){
  $(".error").hide();
  var nombre= document.getElementById('nombre');
  var area= document.getElementById('area');
  var coordinacion= document.getElementById('coordinacion')

  nombre.addEventListener("keyup",function (event){
    if(nombre.validity.valid){
      console.log("VALID")
      $("#nombre").addClass("valid")
      $("#nombre").removeClass("invalid")
      $("#nameError").fadeOut(100);
    }
    else {
      console.log("INVALID")
      $("#nombre").addClass("invalid")
      $("#nombre").removeClass("valid")
      $("#nameError").fadeIn(200);
    }
    if(nombre.value.length==0){
      $("#nombre").removeClass("valid");
      $("#nombre").removeClass("invalid")
      $("#nameError").hide( );
    }
  },false);

  area.addEventListener("keyup",function (event){
    if(area.validity.valid){
      console.log("VALID")
      $("#area").addClass("valid")
      $("#area").removeClass("invalid")
      $("#areaError").fadeOut(100);
    }
    else {
      console.log("INVALID")
      $("#area").addClass("invalid")
      $("#area").removeClass("valid")
      $("#areaError").fadeIn(200);
    }
    if(area.value.length==0){
      $("#area").removeClass("valid");
      $("#area").removeClass("invalid")
      $("#areaError").hide( );
    }
      },false);

    coordinacion.addEventListener("keyup",function (event){
      if(coordinacion.validity.valid){
        console.log("VALID")
        $("#coordinacion").addClass("valid")
        $("#coordinacion").removeClass("invalid")
        $("#coordinacionError").fadeOut(100);
      }
      else {
        console.log("INVALID")
        $("#coordinacion").addClass("invalid")
        $("#coordinacion").removeClass("valid")
        $("#coordinacionError").fadeIn(200);
      }
      if(coordinacion.value.length==0){
        $("#coordinacion").removeClass("valid");
        $("#coordinacion").removeClass("invalid")
        $("#coordinacionError").hide( );
      }

  },false);

  $("form").on('submit', function (e) {
     var nombre= $("#nombre").val();
     var area= $("#area").val();
     var coordinacion= $("#coordinacion").val();
     var problema= $("#problema").val();
     var descripcion= $("#descripcion").val();
     //console.log(nombre + area + coordinacion + problema +descripcion);

     $.ajax({
       url: 'altaOrden.php',
       type: 'POST',
       data: {'nombre': nombre, 'area': area, 'coordinacion': coordinacion, 'problema':problema, 'descripcion': descripcion},
       dataType: 'text',
       success: function () {
         alert("Se Creo su corpus");
       }
     });

     e.preventDefault();
  });

});
