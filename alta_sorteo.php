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
        $mail = $_POST["mail"];
        $nombre = $_POST["nombre"];
        $conexion = mysqli_connect ("localhost", "root", "", "mydb");
         mysqli_query ($conexion, "INSERT INTO Datos_sorteo VALUES(  NULL, '" . $nombre . "','" . $mail . "');") or die(mysqli_error());
        echo '<h5 class="form-signin-heading" align = "center"> Ud. ha sido dado de alta! </h5>';
        echo '<h4 class="form-signin-heading" align = "center"> El numero asignado es: ' . mysqli_insert_id($conexion) . '</h4>';
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
