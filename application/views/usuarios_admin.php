<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Branding Machine :: CRM</title>
	<link href="../application/views/css/default.css" media="screen" type="text/css" rel="stylesheet"/>
	<script src="../application/views/js/jquery.min.js"></script>
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
		<table border="0" cellpadding="3" cellspacing="0" width="700" align="center">
		<tr>
			<td colspan="3"></td>
			<td><?php echo anchor('usuarios/crear/','Nuevo Usuario');?></td>
		</tr>
		<tr>
			<td>ID</td>
			<td>Nombre</td>
			<td>Email</td>
			<td>Acciones</td>
		</tr>
		<?php
			foreach ($query->result() as $row)
			{
				echo '<tr>';
				echo '<td>'.$row->id.'</td>';
				echo '<td>'.$row->nombre.'</td>';
				echo '<td>'.$row->email.'</td>';
				echo '<td>'.anchor('usuarios/editar/'.$row->id,'Editar').' | '.anchor('usuarios/eliminar/'.$row->id,'Eliminar').'</td>';
				echo '</tr>';
			}
		?>
		</table>
		</div>
	</div>
	<?php include('includes/footer.php'); ?>
</div>

</body>
</html>