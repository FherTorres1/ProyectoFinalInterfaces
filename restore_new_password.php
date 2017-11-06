<?php
	
	$user = $_POST['usuario'];
	$password1 = $_POST['password1'];
	$password2 = $_POST['password2'];

	if($password1==$password2)
	{
		require("conexion.php");

		$query = "UPDATE empleado SET password = '$password1' where usuario='$user'";
		$sqlupdate = mysqli_query($conexion,$query);
		if($conexion->query($query) == true)
		{
			echo "<script>location.href='password_sucessfull.php'</script>";
		}
		else
		{
			echo "No";
		}
	}
	else
	{
		echo '<script>alert ("Las contrasenas no coinciden.")</script>';
		echo "<script>location.href='restore_password.php?var=$user'</script>";
	}



?>