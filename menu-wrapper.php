<?php 
$nomArchivo = basename($_SERVER['PHP_SELF']); ?>
<div id="sidebar-wrapper">
	<ul class="sidebar-nav">
		<div class="logoEmpresa ocultar-mostrar-menu">
			<img class="img-responsive" src="images/empresa.png?version=1.1" alt="">
		</div>
		<li <?php if($nomArchivo =='principal.php') echo 'class="active"'; ?>>
				<a href="principal.php"><i class="icofont icofont-home"></i> Inicio</a>
		</li>
		<li <?php if($nomArchivo =='registro.php') echo 'class="active"'; ?>>
				<a href="registro.php"><i class="icofont icofont-ui-music-player"></i> Registro</a>
		</li>
		<li <?php if($nomArchivo =='productos.php') echo 'class="active"'; ?>>
				<a href="#!"><i class="icofont icofont-cube"></i> Productos</a>
		</li>
		<li <?php if($nomArchivo =='caja.php') echo 'class="active"'; ?>>
				<a href="caja.php"><i class="icofont icofont-shopping-cart"></i> Caja</a>
		</li>
	
		
		<li <?php if($nomArchivo =='reportes.php') echo 'class="active"'; ?>>
				<a href="reportes.php"><i class="icofont icofont-ui-copy"></i> Reportes</a>
		</li>
		
		<li <?php if($nomArchivo =='almacen.php') echo 'class="active"'; ?>>
				<a href="almacen.php"><i class="icofont icofont-box"></i> Almacén</a>
		</li>
		<?php if( $_COOKIE['ckPower']==1){ ?>
		<li <?php if($nomArchivo =='configuraciones.php') echo 'class="active"'; ?>>
			<a href="configuraciones.php"><i class="icofont icofont-settings"></i> Configuraciones</a>
		</li>
		<?php } ?>
		<li class="hidden">
			<a href="#!" class="ocultar-mostrar-menu"><i class="icofont icofont-swoosh-left"></i> Ocultar menú</a>
		</li>
	</ul>
</div>
<div class="navbar-wrapper">
	<div class="container-fluid">
		<nav class="navbar navbar-fixed-top encoger">
			<div class="container-fluid">
				<div class="navbar-header ">
				<a class="navbar-brand ocultar-mostrar-menu" href="#"><img id="imgLogoInfocat" class="img-responsive" src="images/logoInfocat.png" alt=""></a>
					<button type="button" class="navbar-toggle collapsed" id="btnColapsador" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</button>
				</div>
				<div id="navbar" class="navbar-collapse collapse ">
					
					<ul class="nav navbar-nav navbar-right " style="padding:0 30px;">
						 <li>
							<div class="btn-group has-clear "><label for="txtBuscarNivelGod" class="text-muted visible-xs" style="color:white; font-weight: 500;">Buscar algo:</label>
								<input type="text" class="form-control" id="txtBuscarNivelGod" placeholder="&#xedef;">
								<span class="form-control-clear icofont icofont-close form-control-feedback hidden" id="spanClear" style="color: #fff;"></span>
							</div>
						 </li>
						 
						 <li class="dropdown text-center" id="liDatosPersonales">
						 	
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
							<? $imagen = 'images/usuarios/'.$_COOKIE['ckidUsuario'].'.jpg';
							if( file_exists($imagen) ):?>
								<img src="<?= $imagen; ?>" class="img-responsive img-circle" style="max-width:50px; display: inline-block;"> <span class="caret"></span>
							<? else: ?>
							<img src="images/usuarios/noimg.jpg?ver=1.2" class="img-responsive img-circle" style="max-width:50px; display: inline-block;"> <span class="caret"></span>
							<? endif;?>
							</a>
							<ul class="dropdown-menu">
								<li><a href="miperfil.php?usuario=soloyo"><i class="icofont icofont-ui-file"></i> Ver mi perfil</a></li>
								<li><a href="php/desconectar.php"><i class="icofont icofont-ui-power"></i> Salir del sistema</a></li>
							</ul>
						 </li>
						 <li class="hidden" id="liDatosPersonales"><a href="#!" style="padding-top: 12px;"><p> <span class="icoUser"><i class="icofont icofont-ui-user"></i></span><span class="mayuscula" id="menuNombreUsuario"><?= $_COOKIE['cknomCompleto']; ?></span></p><p class="icoUser"><i class="icofont icofont-archive"></i> <?= $_COOKIE['ckSucursal'];?></p></a></li>
						 <li class="text-center hidden"><a href="php/desconectar.php"><span class="visible-xs">Cerrar Sesión</span><i class="icofont icofont-ui-power"></i></a></li>
					</ul>

				</div>
		</div>
		</nav>
	</div>
</div>
<div id="overlay">
	<div class="text"><span id="hojita"><i class="icofont icofont-leaf"></i></span> <p id="pFrase"> Guardando los datos... <br> <span>«Pregúntate si lo que estás haciendo hoy <br> te acerca al lugar en el que quieres estar mañana» <br> Walt Disney</span></p></div>
</div>