<html>
	
	<body style="background-color:#F1EEE8">
		<main>
			<?php
			session_start(); //inicio de sesion

			if (!isset($_SESSION["codigousuario"])){

				session_destroy();
				echo "<br><br> <font color='pink'>Intento de acceso sin autorizacion</font>";
				header("Location:login.html");
		
				exit;
			}

			else{

				include("menu.php");

			?>

			<?php
			
			}

			?>
		
			
		</main>
	</body>
</html>