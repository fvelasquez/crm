<div id="mainmenu">
	<ul id="jsddm">
		<li>
		<?php 
		if($this->session->userdata('uid') != ''){
			echo anchor('/dashboard','Inicio');
		}else{
			echo anchor('/#','Inicio');
		}
		?>
		</li>
		<li><?php echo anchor('/#','Transacciones');?>
			<ul>
				<li><?php echo anchor('/proyectos/','Proyectos');?></li>
				<li><?php echo anchor('/tareas/','Tareas');?></li>
				<li><?php echo anchor('/clientes/','Clientes');?></li>
				<li><?php echo anchor('/usuarios/','Usuarios');?></li>
			</ul>
		</li>
		<li><?php echo anchor('/#','Catalogos');?>
			<ul>
				<li><?php echo anchor('/cat_clientes/','Clientes');?></li>
				<li><?php echo anchor('/cat_productos/','Productos');?></li>
				<li><?php echo anchor('/cat_paquetes/','Paquetes');?></li>
				<li><?php echo anchor('/cat_fpagos/','Formas de pago');?></li>
				<li><?php echo anchor('/cat_atareas/','Acciones de Tareas');?></li>
				<li><?php echo anchor('/cat_etareas/','Estados de Tareas');?></li>
			</ul>
		</li>
		<li><?php echo anchor('/login','Iniciar Sesion');?></li>
	</ul>
</div>