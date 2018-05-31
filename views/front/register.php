<?php include ('templates/head.php'); ?>

	<div class="container spacing-top">
		<div class="row">

			<div class="col-12 bg-warning">
				
				<fieldset>
					<legend>Formulario de Registro</legend>
						<form name="register" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
							<p>
								<select name="genre" required>
									<option value="hombre">Hombre</option>
									<option value="mujer">Mujer</option>
									<option value="genero" selected>Genero</option>
								</select>
							</p>
							<p>
								<input type="text" name="nombre" placeholder="Nombre completo.." required>
							</p>
							<p>
								<input type="email" name="correo" placeholder="Correo electronico.." required>
							</p>
							<p>
								<input type="password" name="password" placeholder="Contraseña.." required>
							</p>
							<p>
								<input type="password" name="conf_pass" placeholder="Confirmar contraseña.." required>
							</p>
							<p>
								<input type="submit" name="btn-register" value="Registrar usuario">
								<input type="reset" value="Limpiar datos">
							</p>
						</form>
					</fieldset>

			</div>

		</div>
	</div>

<?php include ('templates/foot.php'); ?>