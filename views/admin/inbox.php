<?php 
//Encabezado de la pagina
include ('templates/head.php');

//validar errores
if(isset($_GET['error'])){

	include ('errors/errors.php');
}

?>

<div class="container spacing-top">
	<div class="row">
		<div class="col-4 bg-dark">

			<center>
				
				<figure>
					<?php if ($genre == 'hombre') {
						echo '<img src="http://localhost/webmail/public/images/user.png" class="img-email">';
					}elseif($genre == 'mujer'){
						echo '<img src="http://localhost/webmail/public/images/userw.png" class="img-email">';
					} ?>
					
				</figure>

			</center>

		</div>
		<div class="col-8 bg-dark">
			<h2 class="title-h1">Bienvenid@: <i>

				<?php 
				if(isset($nombre)){
					echo $nombre;
				}?>
					
				</i></h2>
		</div>
		<div class="col-12 bg-warning">
			<?php include('forms/form_inb.php'); ?>
		</div>
	</div>
</div>

<?php include ('templates/foot.php'); ?>