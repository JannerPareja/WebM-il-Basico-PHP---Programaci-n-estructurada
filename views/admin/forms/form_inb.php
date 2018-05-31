<fieldset>
					<legend>Mensaje recibido..</legend>
						<form name="register" method="post" action="http://localhost/webmail/app/Http/Controllers/Controller.php">
							<p>
								<label>Asunto: </label><input type="submit" name="btn-read" value="<?php echo $asunto_msg; ?>" class="btn-read">
							</p>
							<p>
								<!-- Envio de datos ocultos -->
								<input type="hidden" name="genre" value="<?php echo $genre; ?>">
								<input type="hidden" name="nombre" value="<?php echo $nombre; ?>">
								<input type="hidden" name="correo" value="<?php echo $correo; ?>">
								<input type="hidden" name="dest_msg" value="<?php echo $dest_msg; ?>">
								<input type="hidden" name="asunto_msg" value="<?php echo $asunto_msg; ?>">
								<input type="hidden" name="msg" value="<?php echo $msg; ?>">
							</p>
						</form>
					</fieldset>