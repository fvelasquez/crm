<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Branding Machine :: CRM</title>
	<link href="../../application/views/css/default.css" media="screen" type="text/css" rel="stylesheet"/>
	<script src="../../application/views/js/jquery.min.js"></script>
	<script type="text/javascript">
		var timeout         = 500;
		var closetimer		= 0;
		var ddmenuitem      = 0;

		function jsddm_open()
		{	jsddm_canceltimer();
			jsddm_close();
			ddmenuitem = $(this).find('ul').eq(0).css('visibility', 'visible');}

		function jsddm_close()
		{	if(ddmenuitem) ddmenuitem.css('visibility', 'hidden');}

		function jsddm_timer()
		{	closetimer = window.setTimeout(jsddm_close, timeout);}

		function jsddm_canceltimer()
		{	if(closetimer)
			{	window.clearTimeout(closetimer);
				closetimer = null;}}

		$(document).ready(function()
		{	$('#jsddm > li').bind('mouseover', jsddm_open);
			$('#jsddm > li').bind('mouseout',  jsddm_timer);});

		document.onclick = jsddm_close;
	</script>
</head>
<body>
<div id="container">
	<?php include('includes/header.php'); ?>
	<?php include('includes/menu.php'); ?>
	<div id="content">
		<div id="wrapperc">
		<?php echo form_open('usuarios/guardar');?>
				<label for="nombre">Nombre:</label>
				<?php 
				$data = array(
					'name'        => 'nombre',
					'id'          => 'nombre',
					'maxlength'   => '100'
            	);
				echo form_input($data);?>
				
				<label for="apellido">Apellido:</label>
				<?php 
				$data = array(
					'name'        => 'apellido',
					'id'          => 'apellido',
					'maxlength'   => '100'
            	);
				echo form_input($data);?>
				
				<label for="email">Email:</label>
				<?php 
				$data = array(
					'name'        => 'email',
					'id'          => 'email',
					'maxlength'   => '100'
            	);
				echo form_input($data);?>
				
				<label for="password">Password:</label>
				<?php 
				$data = array(
					'name'        => 'password',
					'id'          => 'password',
					'maxlength'   => '100'
            	);
				echo form_password($data);
				echo '<br /><br />';
				echo form_submit('enviar','Crear usuario');
				?>

		<?php echo form_close(); ?>
		</div>
	</div>
	<?php include('includes/footer.php'); ?>
</div>

</body>
</html>