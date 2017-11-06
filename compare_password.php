<?php

	$bandera=0;
	$correo = $_POST['emailaddress'];
	$user = $_POST['usuario'];

	require("conexion.php");

	$query = "SELECT password FROM empleado where usuario='$user' AND correo = '$correo'";
	$resultado = mysqli_query($conexion,$query);

	while($fila = mysqli_fetch_array($resultado))
	{
		$bandera=1;

	}

	//vemos si el usuario y contraseña son válidos
	if ($bandera==1)
	{
		echo "<script>location.href='restore_password.php?var=$user'</script>";

	}
	else 
	{
		//si no existe se va a login.php
		echo '<script>alert ("Usuario o correo no existen.")</script>';
		echo "<script>location.href='forget_password.php'</script>";
	}
?>