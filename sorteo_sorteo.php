<html>
<head>
</head>
<body>

<?php
		$conexion = mysqli_connect ("localhost", "root", "", "mydb");
		$a = mysqli_query($conexion, "SELECT min(numero) as minimo FROM Datos_sorteo;") or die (mysqli_error($conexion));
		$b = mysqli_query($conexion, "SELECT max(numero) as maximo FROM Datos_sorteo;") or die (mysqli_error($conexion));
		$vector1 = mysqli_fetch_assoc($a);
		$vector2 = mysqli_fetch_assoc($b);
		//echo $vector1['minimo'];
		//echo $vector2['maximo'];
		$asignado = rand($vector1['minimo'], $vector2['maximo']);
		echo $asignado;
	?>

<form action = "form_sorteo.php" method = "POST">
<input type = "submit" value = "Volver"/>

</body>
</html>