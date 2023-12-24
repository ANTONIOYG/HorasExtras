<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>REGISTRAR</title>
</head>
<body>
<?php

   $host = "localhost";
   $usuario = "root";
   $password = "";
   $bd = "hextra";

	  $fecha = trim($_POST['fecha']);
	  $destino = trim($_POST['destino']);
	  $entrada = trim($_POST['entrada']);
	  $salida = trim($_POST['salida']);
	  $viaje = trim($_POST['viaje']);
	  $festivo = trim($_POST['festivo']);
	  $obra = trim($_POST['obra']); 

	  $con = mysqli_connect ($host , $usuario , $password ,$bd);

	    $consulta = "INSERT INTO datos(fecha, destino, entrada, salida, viaje, festivo, obra) VALUES 
			('$fecha','$destino','$entrada','$salida','$viaje','$festivo','$obra')";
		
		$resultado = mysqli_query($con, $consulta);
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Te has inscripto correctamente!</h3>
			
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
  	mysqli_close($con);
?>
<br>
<button><a href="index.php">regresa al inicio</a></button>
	
</body>
</html>