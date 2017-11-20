
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Formulario</title>

</head>
<body>
<h1>Ejercicio 1</h1>
<form action="#" method="post"> 
	<!-- siempre en formulario se utiliza POST -->


		<div>
			<label for="name">NOMBRE</label>
			<input type="text" name="nombre" id="name"> <br><br>

		</div>
		<div>
			<label for="apellido1">APELLIDO</label> 
			<input type="text" name="apellido1" id="apellido1"> <br><br>
		
		</div>

		<div>
			<label for="apellido2">APELLIDO 2</label> 
			<input type="text" name="apellido2" id="apellido2"> <br><br>
			<input class="button" type="submit" name="Enviar"> 
		</div>

	</form>

<?php 

if (isset($_POST["nombre"])) {
	// tambien se puede poner como if ($_SERVER["REQUEST_METHOD"] == "POST")
	if (empty($_POST["nombre"])) {
		echo "<p> El nombre está vacio</p>";
	}

	if (empty($_POST["apellido1"])) {
		echo "<p> El apellido está vacio</p>";
	}

	if (empty($_POST["apellido2"])) {
		echo "<p> El apellido está vacio </p>";
	}
	if (!empty($_POST["nombre"]) && !empty($_POST["apellido1"]) && !empty($_POST["apellido2"])){

		echo "<p>" .$_POST["nombre"]." ".$_POST["apellido1"] . " ".$_POST["apellido2"]. "</p>";
		}

}
?>
</body>
</html>


</body>
</html>