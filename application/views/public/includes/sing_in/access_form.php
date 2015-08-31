
<?php echo validation_errors(); ?>

<div class="row">

	<div class="col-sm-8 col-sm-push-2">
		<div class="panel panel-default ">
			<div class="panel-body">

				<legend>Ingresa</legend>

					<?php echo form_open(''); ?>

						<div class="form-group">
					<label for="inputPassword">Email:</label> <input name="email"
						type="email" class="form-control" placeholder="Email"
						value="<?php echo set_value('emal'); ?>">
				</div>

				<div class="form-group">
					<label for="inputEmail">Contraseña:</label> <input name="password"
						type="password" class="form-control" id="inputEmail"
						placeholder="Password">
				</div>

				<div class="col-sm-12">
					<button type="submit" class="btn btn-primary btn-block">Ingresar</button>
				</div>
				</form>
			</div>
		</div>
	</div>
</div>
