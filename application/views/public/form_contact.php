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
			
				>
		</div>
		<div class="form-group">
			<label><?php echo $this->lang->line('form_email'); ?></label> <input
				name="emailaddress" type="email" class="form-control"
				
				>
		</div>
		<div class="form-group">
			<label><?php echo $this->lang->line('form_subjet'); ?></label>
			<div class="col-xl-12">
			
				<div class="col-xs-12">
					<select class="form-control" name="pre-subjet">
						<option value="Pregunta:">Pregunta</option>
						<?php 
						  if(isset($_REQUEST['bug'])){
				
						      echo "<option value='Error:' selected>Encontre un error</option>";
						  }else{
						      echo "<option value='Error:'>Encontre un error</option>";
						      }
						?>
					</select>
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
		<button type="submit" class="btn btn-primary">Guardar</button>
	</div>
</div>
</form>
