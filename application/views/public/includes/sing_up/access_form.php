
<?php echo validation_errors(); ?>

<div class="row">

	<div class="col-sm-8 col-sm-push-2">
		<div class="panel panel-default ">
			<div class="panel-body">

				<legend>Registro de usuario</legend>

					<?php echo form_open(''); ?>

						<div class="form-group">
					<label for="inputPassword"><?php echo $this->lang->line('placeholder_input_name')?>:</label> <input name="name"
						type="text" class="form-control" placeholder="<?php echo $this->lang->line('placeholder_input_name')?>"
						value="<?php echo set_value('name'); ?>">
				</div>

				<div class="form-group">
					<label for="inputEmail"><?php echo $this->lang->line('placeholder_input_lastname')?>:</label> <input name="lastname"
						type="text" class="form-control" id="inputEmail"
						placeholder="<?php echo $this->lang->line('placeholder_input_lastname')?>"
						value="<?php echo set_value('lastname'); ?>">
				</div>

				<div class="form-group">
					<label for="inputEmail"><?php echo $this->lang->line('placeholder_input_email')?>:</label> <input name="email"
						type="email" class="form-control" id="inputEmail"
						placeholder="<?php echo $this->lang->line('placeholder_input_email')?>" value="<?php echo set_value('email'); ?>">
				</div>

				<div class="form-group">
					<label for="inputPassword"><?php echo $this->lang->line('placeholder_input_password')?>:</label> <input
						name="password" type="password" class="form-control"
						id="inputPassword" placeholder="<?php echo $this->lang->line('placeholder_input_password')?>">
				</div>

				<div class="form-group">
					<label for="inputPassword"><?php echo $this->lang->line('placeholder_input_password_2')?>:</label> <input
						name="repeatpassword" type="password" class="form-control"
						id="inputPassword" placeholder="<?php echo $this->lang->line('placeholder_input_password_2')?>">
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
