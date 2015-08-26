<?php
// Pagina de inicio de la aplicacion ademas es la pagina por defecto.
defined('BASEPATH') or exit('No direct script access allowed');
?>

<style>
.style_img {
	width: 250px;
	height: 200px;
}
</style>

<div class="jumbotron">
	<h1>Super Compu Hiper Mega Red</h1>
</div>

<div class="panel panel-default">
	<div class="panel-body">
	Usuarios destacados
	</div>
</div>

<div class="col-xs-3">
	<div class="panel panel-default">
		<div class="panel-body">

			<img src="<?php echo base_url() . 'uploads/' . 'bbb.png' ?>"
				class="img-thumbnail style_img style_img" alt="Thumbnail Image">
			<legend>
				<h4>Morpheus</h4>
			</legend>
			<p>
				y si te dijiera... <br> que pueden guardar tun notas aqui
			</p>
		</div>
	</div>
</div>

<div class="col-xs-3">
	<div class="panel panel-default">
		<div class="panel-body">

			<img src="<?php echo base_url() . 'uploads/' . 'aaaa.png' ?>"
				class="img-thumbnail style_img" alt="Thumbnail Image">
			<legend>
				<h4>First World Problems</h4>
			</legend>
			<p>Se me olvido la clave y el usuario.</p>
		</div>
	</div>
</div>

<div class="col-xs-3">
	<div class="panel panel-default">
		<div class="panel-body">

			<img src="<?php echo base_url() . 'uploads/' . 'manco.jpg' ?>"
				class="img-thumbnail style_img" alt="Thumbnail Image">
			<legend>
				<h4>Mancos Fen</h4>
			</legend>
			<p>Me encanta la pagina puedo guardar el numero de todos esos
				zorrones :)</p>
		</div>
	</div>
</div>

<div class="col-xs-3">
	<div class="panel panel-default">
		<div class="panel-body">
			<img src="<?php echo base_url() . 'uploads/' . 'un_manjar.png' ?>"
				class="img-thumbnail style_img" alt="Thumbnail Image">
			<legend>
				<h4>Un manjar men</h4>
			</legend>
			<p>Esta aplicacion es Un manjar</p>
		</div>
	</div>
</div>