
<?php echo validation_errors(); ?>

<div class="row">

	<div class="col-sm-8 col-sm-push-2">
		<div class="panel panel-default ">
			<div class="panel-body">

				<legend>Formulario de registro</legend>

					<?php echo form_open(''); ?>

						<div class="form-group">
					<label for="inputPassword">Nombre:</label> <input name="name"
						type="text" class="form-control" placeholder="Nombre"
						value="<?php echo set_value('name'); ?>">
				</div>

				<div class="form-group">
					<label for="inputEmail">Apellido:</label> <input name="lastname"
						type="text" class="form-control" id="inputEmail"
						placeholder="Apellido"
						value="<?php echo set_value('lastname'); ?>">
				</div>

				<div class="form-group">
					<label for="inputEmail">Email:</label> <input name="email"
						type="email" class="form-control" id="inputEmail"
						placeholder="Email" value="<?php echo set_value('email'); ?>">
				</div>

				<div class="form-group">
					<label for="inputPassword">Contraseña:</label> <input
						name="password" type="password" class="form-control"
						id="inputPassword" placeholder="Password">
				</div>

				<div class="form-group">
					<label for="inputPassword">Repite tu contraseña:</label> <input
						name="repeatpassword" type="password" class="form-control"
						id="inputPassword" placeholder="Password">
				</div>

				<div class="col-sm-12">
					<button type="submit" class="btn btn-primary btn-block">Crear una
						cuenta</button>
				</div>
				</form>
			</div>
		</div>
	</div>
</div>
