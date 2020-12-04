<?php include ('templates/head.php'); ?>

	<div class="container spacing-top">
		<div class="row">

			<div class="col-12 bg-warning">
				
				<fieldset>
					<legend>Formulario de Ingreso</legend>
						<form name="login" method="post" action="http://localhost/webmail/app/Http/Controllers/Controller.php">
							<p>
								<input type="email" name="correo_log" placeholder="Correo electronico.." required>
							</p>
							<p>
								<input type="password" name="pass_log" placeholder="Contraseña.." required>
							</p>
							<p>
								<!-- Envio de datos ocultos -->
								<input type="hidden" name="genre" value="<?php echo $genre; ?>">
								<input type="hidden" name="nombre" value="<?php echo $nombre; ?>">
								<input type="hidden" name="correo" value="<?php echo $correo; ?>">
								<input type="hidden" name="password" value="<?php echo $password; ?>">

								<input type="submit" name="btn-login" value="Ingresar">
								<input type="reset" value="Cancelar">
							</p>
						</form>
					</fieldset>

			</div>

		</div>
	</div>

<?php include ('templates/foot.php'); ?>
