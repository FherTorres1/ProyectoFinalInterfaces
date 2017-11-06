<?php

	$bandera=0;
	$tipo_emp;
	$user = $_POST['usuario'];
	$pass = $_POST['password'];

	require("conexion.php");

	$query = "SELECT * FROM empleado where usuario='$user' AND password = '$pass'";
	$resultado = mysqli_query($conexion,$query);

	while($fila = mysqli_fetch_array($resultado))
	{
		$bandera=1;
		$tipo_emp = "$fila[tipo]";
		$nombre = "$fila[nombre]";
		$foto = "$fila[imagen]";

	}

	//vemos si el usuario y contraseña son válidos
	if ($bandera==1)
	{
		echo "<script>location.href='dashboard_$tipo_emp.php?nom=$nombre&tipo=$tipo_emp&imagen=$foto'</script>";
	}
	else 
	{
		//si no existe se va a login.php
		echo "<div class='alert alert-icon alert-danger alert-dismissible fade in' role='alert'>
                    <button type='button' class='close' data-dismiss='alert'aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                    </button>
                    <i class='mdi mdi-block-helper'></i>
                    <strong>Usuario o contraseña incorrecto.";
	}
?>