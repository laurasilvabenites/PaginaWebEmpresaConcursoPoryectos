<html>
<head>
	
</head>


<body>
	<?php
		session_start(); //inicio de sesion
		$codusr=$_POST["codusr"];
		$passusr=$_POST["passusr"];

		if ($codusr==""|| $passusr==""){
			echo "Usuario o contraseña incorrecto";
		}

		else {

			/* La funcion de enlace necesita: servidor BD, usuario, contraseña, nombre*/

		$enlace=mysqli_connect("localhost","root","","vivaamazonas");

		/* sentencia de consulta*/

		$sentencia= "select * from usuario where usuario='$codusr' and password='$passusr';";

		$resultado=mysqli_query($enlace,$sentencia);

		$numFilas=mysqli_num_rows($resultado);

		if ($numFilas==0){

			echo "<br><font color='pink'>El usuario o la contraseña no existe</font>";
				session_destroy();
		}
		else{

			$_SESSION["codigousuario"]=$codusr;
			header("Location:principal.php");
		}
	}
	?>

</body>

</html>