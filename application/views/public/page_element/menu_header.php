<?php
defined('BASEPATH') or exit('No direct script access allowed');

$type_user = $this->session->userdata('logged_in');

function li_menu($url, $string, $type_user)
{
    
    if ($type_user == FALSE) {
        echo "<li>";
        echo anchor($url, $string);
        echo "</li>";
    }
   
}

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
				<?php
    li_menu('sing_in', '<span class="glyphicon glyphicon-user"></span> ' . $this->lang->line('menu_header_sing_in_button'), $type_user);
    li_menu('sing_up', '<span class="glyphicon glyphicon-user"></span> ' . $this->lang->line('menu_header_sing_up_button'), $type_user);
            ?>
		
				</ul>
			</div>
		</div>
	</nav>
</div>