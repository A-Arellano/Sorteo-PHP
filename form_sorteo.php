
<html>
	<head>
	</head>
	<body>
		<h1> Insertando Datos </h1>
		<form action = "alta_sorteo.php" method = "POST">
			<label for = "nombre"> Nombre </label>
			<br/>
			<input type = "text" name = "nombre" placeholder="Ingrese Nombre"/>
			<br/>
			<label for = "mail"> Mail </label>
			<br/>
			<input type = "email" name = "mail" placeholder="Ingrese mail"/>
			<br/>
			<input type = "submit" value = "Alta"/>
			<input type = "reset" value = "Borrar"/>
		</form>
		<form action = "sorteo_sorteo.php" method = "POST">
		<input type = "submit" value = "Sorteo"/>
	</body>
</html>