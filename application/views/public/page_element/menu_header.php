<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<div style="margin-bottom: 60px;">
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container-fluid">

			<div class="navbar-header">
				<span class="navbar-brand">Super Compu Hiper Mega Red</span>
			</div>

			<div class="collapse navbar-collapse">

				<ul class="nav navbar-nav">
					<li><?php echo anchor('', '<span class="glyphicon glyphicon-home"></span> '.$this->lang->line('menu_header_index_page')) ?></li>
				</ul>

				<ul class="nav navbar-nav navbar-right">
					<li><?php echo anchor('sing_up', '<span class="glyphicon glyphicon-home"></span> Ingresar') ?></li>	
					<li><?php echo anchor('sing_up', '<span class="glyphicon glyphicon-user"></span> '.$this->lang->line('menu_header_sing_up_button')) ?></li>			
				</ul>
			</div>
		</div>
	</nav>
</div>