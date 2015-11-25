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
		<h3 class="panel-title">Mensajeria</h3>
	</div>
	<div class="panel-body">
		<div class="form-group">
			<label>Titulo</label> <input
				name="name" type="text" class="form-control"
			
				>
		</div>
		
		<div class="form-group">
			<label>Tipo</label>
			<div class="col-xl-12">
			
				<div class="col-xs-12">
					<select class="form-control" name="pre-subjet">
						<option value="Pregunta:">Pregunta</option>
						<option value='Error:' selected>Propio</option>
						<option value='Error:'>Trabajo</option>
						<option value='Error:'>ETC</option>
					</select>
				</div>

			</div>
		</div>
		<div class="form-group">
			<label>Mensaje</label>

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
