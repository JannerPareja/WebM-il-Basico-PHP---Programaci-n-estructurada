<?php

$error = $_GET['error'];

	if($error == 1){

		echo "
				<br>
				<h3 style='text-align: center;'>
				<span style='color: red;'>
				ERROR 1
				</span>
				: Las contraseñas no coinciden, prueba a registrarte nuevamente!
				</h3>
				<br>
			 ";
	}
	elseif($error == 2){

		echo "
				<br>
				<h3 style='text-align: center;'>
				<span style='color: red;'>
				ERROR 2
				</span>
				: Los datos de acceso no son correctos, intenta nuevamente!
				</h3>
				<br>
			 ";
	}
	elseif($error == 3){

		echo "
				<br>
				<h3 style='text-align: center;'>
				<span style='color: red;'>
				ERROR 3
				</span>
				: Debe seleccionar un genero!
				</h3>
				<br>
			 ";
	}

?>