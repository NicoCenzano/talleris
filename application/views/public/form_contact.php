<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<?php
/**
 * Formulario para mandar un email al admnistrador
 *
 * @link application/controllers/public/contact.php
 */
echo validation_errors();
?>

<?php echo form_open(''); ?>

<div class="panel panel-primary">
	<div class="panel-heading">
		<h3 class="panel-title"><?php echo $this->lang->line('form_title'); ?></h3>
	</div>
	<div class="panel-body">
		<div class="form-group">
			<label><?php echo $this->lang->line('form_name'); ?></label> <input
				name="name" type="text" class="form-control"
				placeholder=<?php echo $this->lang->line('form_name'); ?>
				value="<?php echo set_value('name'); ?>">
		</div>
		<div class="form-group">
			<label><?php echo $this->lang->line('form_email'); ?></label> <input
				name="emailaddress" type="email" class="form-control"
				placeholder=<?php echo $this->lang->line('form_email'); ?>
				value="<?php echo set_value('emailaddress'); ?>">
		</div>
		<div class="form-group">
			<label><?php echo $this->lang->line('form_subjet'); ?></label>
			<div class="col-xl-12">
			
				<div class="col-xs-4">
					<select class="form-control" name="pre-subjet">
						<option value="Pregunta:">Pregunta</option>
						<?php 
						  if(isset($_REQUEST['bug']) and $_REQUEST['bug'] =1){
						      echo "hola";
						      echo "<option value='Error:' selected>Encontre un error</option>";
						  }else{
						      echo "<option value='Error:'>Encontre un error</option>";
						      }
						?>
					</select>
				</div>

				<div class="col-xs-8">
					<input type="text" class="form-control" name ="subjet"
						placeholder=<?php echo $this->lang->line('form_message'); ?>
						value="<?php echo set_value('title'); ?>">
				</div>
			</div>
		</div>
		<div class="form-group">
			<label><?php echo $this->lang->line('form_message'); ?></label>

			<textarea name="message" id="editor1">

            </textarea>
			<script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.		
                
                CKEDITOR.replace('editor1');
            </script>

		</div>
		<button type="submit" class="btn btn-primary"><?php echo $this->lang->line('button_send'); ?></button>
	</div>
</div>
</form>
