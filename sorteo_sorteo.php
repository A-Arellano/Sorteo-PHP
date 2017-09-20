<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    <title>Signin Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>

  <body>

    <div class="container">

      <form class="form-signin" action = "index.html" method = "POST">

        <?php
        $conexion = mysqli_connect ("localhost", "root", "", "mydb");
        $a = mysqli_query($conexion, "SELECT min(numero) as minimo FROM Datos_sorteo;") or die (mysqli_error($conexion));
        $b = mysqli_query($conexion, "SELECT max(numero) as maximo FROM Datos_sorteo;") or die (mysqli_error($conexion));
        $vector1 = mysqli_fetch_assoc($a);
        $vector2 = mysqli_fetch_assoc($b);
        $asignado = rand($vector1['minimo'], $vector2['maximo']);
                echo '<h4 class="form-signin-heading" align = "center"> El numero ganador es: ' .  $asignado . '</h4>';
        ?>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Volver</button>
      </form>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
