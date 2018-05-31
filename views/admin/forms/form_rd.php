<fieldset>
					<legend>Inbox: <?php echo $correo; ?></legend>
						<form name="register" method="post" action="http://localhost/webmail/app/Http/Controllers/Controller.php">
							<p>
								<input type="email" value="<?php echo $asunto_msg; ?>" readonly>
							</p>
							<p>
								<input type="text" value="<?php echo $dest_msg; ?>" readonly>
							</p>
							<p>
								<textarea rows="5" cols="100" readonly><?php echo $msg; ?></textarea>
							</p>
							<p>
								<!-- Envio de datos ocultos -->
								<input type="hidden" name="genre" value="<?php echo $genre; ?>">
								<input type="hidden" name="nombre" value="<?php echo $nombre; ?>">
								<input type="hidden" name="correo" value="<?php echo $correo; ?>">
							</p>
						</form>
					</fieldset>