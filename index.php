<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <!-- meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- BOOTSRAP LIBRARIES -->
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <!--validator-->

    <script src="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script>
    <link rel="shortcut icon" type="image/x-icon" href="img/logoDIF.png" />
    <script type="text/javascript" src="assets/functions/main.js"></script>

    <title>Infomática - DIF </title>
  </head>
  <body>
    <!-- Navigation bar-->
    <nav>
      <div class="navbar" id="header">
        <img src="img/logoDIF.png" height="80px;">
        <h3 style="text-align: center; display:block;">Área de Informática</h3>
        <!--span id="date">
          <script type="text/javascript">
           document.write(new Date().toLocaleDateString());
        </script>
      </span-->

      </div>
    </nav>
    <!--Main container-->
    <div class="container">
      <div class="row">
        <div class="col-8 reporte">
          <span class="title">Genera reporte</span>
          <form id="resgistroOrden" class="formOrden">
            <span class="step">1. Datos del solicitante</span>
            <br>
            <span>Nombre: </span>
            <input type="text" id="nombre" name="nombre"  pattern="^[a-zA-Z\s]*$" required>
            <span id="nameError"class="error active"aria-live="polite">Introduce datos validos</span>
            <br>
            <span>Área: </span>
            <input type="text" id="area" name="area" pattern="^[a-zA-Z\s]*$"  required>
            <span id="areaError"class="error active"aria-live="polite">Introduce datos validos</span>
            <br>
            <span>Coordinación: </span>
            <input type="text" id="coordinacion" name="coordinacion" pattern="^[a-zA-Z\s]*$"  required>
            <span id="coordinacionError"class="error active"aria-live="polite">Introduce datos validos</span>
            <br>

            <span class="step">2. Datos del problema</span> <br>
            <span>Problemática: </span>
            <select id="problema" name="problema" required>
              <option hidden value="">Elige una opción</option>
              <option value="telefono">Teléfono</option>
              <option value="equipoComputo">Equipo de Cómputo</option>
              <option value="red">Red</option>
              <option value="impresora">Impresora</option>
              <option value="soporteTecnico">Soporte Técnico</option>
            </select>
            <br>
            <span style="margin-bottom:-2em;">Describe tu problema: </span>
            <textarea id="descripcion" rows="4" cols="40"></textarea>
            <br><br>
            <input type="submit" id="submit" class="mx-auto" value="Envíar reporte" style="text-align:center; margin-left:2em;">
          </form>
        </div>
        <div class="col-3 tutoriales">
          <span class="title">Tutoriales</span>
        </div>
      </div>
    </div>
  </body>
</html>
