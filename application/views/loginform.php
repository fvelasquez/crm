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
	<?php include('header.php'); ?>
	<?php include('menu.php'); ?>
	<div id="content">
		<div id="wrapper">
        <form name="login" action="login/validate" method="post" id="form">
            <label>Email:</label>
			<input type="text" name="email" value=""/>
			<label>Password:</label>
			<input type="password" name="password" value=""/><br />
            <input type="submit" value="Ingresar" name="submit" id="submit" />
        </form>
    	</div>
	</div>
	<?php include('footer.php'); ?>
</div>

</body>
</html>