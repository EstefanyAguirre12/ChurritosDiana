<?php
require_once('../../../app/models/database.class.php');
require_once('../../../app/helpers/validator.class.php');
require_once('../../../app/helpers/component.class.php');
require_once('../../../app/helpers/dumper.php');
require_once('../../../app/helpers/phpmyimporter.php');
class Page extends Component{

	public static function Modulo_Hotel(){
		print("
			<div class='menu_section'>
				<h3 class='text-center'>Hotel</h3>
				<ul class='nav side-menu'>
					<li>
					<a>
						<i class='material-icons'>insert_invitation</i> Reservas
						<span class='fa fa-chevron-down'></span>
					</a>
					<ul class='nav child_menu'>
						<li>
						<a href='../../hotel/reservas/reserva_online.php'>Reservas en linea</a>
						</li>
						<li>
						<a href='../../hotel/reservas/reserva_nueva.php'>Nueva reserva</a>
						</li>
						<li>
						<a href='../../hotel/reservas/reserva_control.php'>Listado reserva</a>
						</li>
					</ul>
					</li>
					<li>
					<a>
						<i class='material-icons'>room_service</i> Servicios
						<span class='fa fa-chevron-down'></span>
					</a>
					<ul class='nav child_menu'>
						<li>
						<a href='../../hotel/servicios/h_servicios.php'>Servicio habitacion</a>
						</li>
					</ul>
					</li>
					<li>
					<a>
						<i class='material-icons'>store</i> Habitaciones
						<span class='fa fa-chevron-down'></span>
					</a>
					<ul class='nav child_menu'>
						<li>
						<a href='../../hotel/habitaciones/h_disponibles.php'>Habitaciones disponibles</a>
						</li>
						<li>
						<a href='../../hotel/habitaciones/h_reservadas.php'>Habitaciciones reservadas</a>
						</li>
					</ul>
					</li>
					<li>
					<a>
						<i class='material-icons'>archive</i> Registros
						<span class='fa fa-chevron-down'></span>
					</a>
					<ul class='nav child_menu'>
						<li>
						<a href='../../hotel/registros/habitaciones.php'>Habitaciones</a>
						</li>
					</ul>
					</li>
				</ul>
			</div>
		");
	}
	public static function Modulo_Resturante(){
		print("
			<div class='menu_section'>
				<h3 class='text-center'>Restaurante</h3>
				<ul class='nav side-menu'>
					<li>
					<a>
						<i class='material-icons'>chrome_reader_mode</i> Menu
						<span class='fa fa-chevron-down'></span>
					</a>
					<ul class='nav child_menu'>
						<li>
						<a href='../../restaurante/menu/menu.php'>Menus</a>
						</li>
					</ul>
					</li>
					<li>
					<a>
						<i class='material-icons'>tab</i> Mesas
						<span class='fa fa-chevron-down'></span>
					</a>
					<ul class='nav child_menu'>
						<li>
						<a href='../../restaurante/mesas/mesas_disponibles.php'>Mesas disponibles</a>
						</li>
						<li>
						<a href='../../restaurante/mesas/mesas_ocupadas.php'>Mesas ocupadas</a>
						</li>
					</ul>
					</li>
					<li>
					<a>
						<i class='material-icons'>rate_review</i> Ordenes
						<span class='fa fa-chevron-down'></span>
					</a>
					<ul class='nav child_menu'>
						<li>
						<a href='../../restaurante/ordenes/nueva_orden.php'>Nueva orden</a>
						</li>
						<li>
						<a href='../../restaurante/ordenes/lista_ordenes.php'>Lista de ordenes</a>
						</li>
					</ul>
					</li>
					<li>
					<a>
						<i class='material-icons'>archive</i> Registros
						<span class='fa fa-chevron-down'></span>
					</a>
					<ul class='nav child_menu'>
						<li>
						<a href='../../restaurante/registros/bebidas.php'>Platos</a>
						</li>
						<li>
						<a href='../../restaurante/registros/platos.php'>Bebidas</a>
						</li>
					</ul>
					</li>
				</ul>
			</div>
		");
	}
	public static function Modulo_Eventos(){
		print("
			<div class='menu_section'>
				<h3 class='text-center'>Eventos</h3>
				<ul class='nav side-menu'>
					<li>
					<a>
						<i class='material-icons'>date_range</i>Reservaciones
						<span class='fa fa-chevron-down'></span>
					</a>
					<ul class='nav child_menu'>
						<li>
						<a href='../../eventos/reservas/reservacion_nueva.php'>Nuevo reservacion</a>
						</li>
						<li>
						<a href='../../eventos/reservas/reservacion_lista.php'>Lista reservaciones</a>
						</li>
					</ul>
					</li>
					<li>
					<a>
						<i class='material-icons'>store</i> Salones
						<span class='fa fa-chevron-down'></span>
					</a>
					<ul class='nav child_menu'>
						<li>
						<a href='../../eventos/salones/salones_disponibles.php'>Salones disponibles</a>
						</li>
						<li>
						<a href='../../eventos/salones/salones_ocupados.php'>Salones ocupados</a>
						</li>
					</ul>
					</li>
					<li>
					<a>
						<i class='material-icons'>archive</i> Registros
						<span class='fa fa-chevron-down'></span>
					</a>
					<ul class='nav child_menu'>
						<li>
						<a href='../../eventos/registros/salones.php'>Salones</a>
						</li>
						<li>
						<a href='../../eventos/registros/muebles.php'>Muenbles</a>
						</li>
					</ul>
					</li>
				</ul>
			</div>
		");
	}
	public static function Modulo_Registros(){
		print("
			<div class='menu_section'>
				<h3 class='text-center'>Registros</h3>
				<ul class='nav side-menu'>
					<li>
					<a>
						<i class='material-icons'>archive</i> Registros
						<span class='fa fa-chevron-down'></span>
					</a>
					<ul class='nav child_menu'>
						<li>
						<a href='../../registros/mantenimientos/indexusuarios.php'>Usuarios</a>
						</li>
						<li>
						<a href='../../registros/mantenimientos/indexempleados.php'>Empleados</a>
						</li>
						<li>
						<a href='../../registros/mantenimientos/indexcargos.php'>Cargos</a>
						</li>
					</ul>
					</li>
				</ul>
				<h3 class='text-center'>Backup</h3>
				<ul class='nav side-menu'>
					<li>
					<a>
						<i class='material-icons'>archive</i> Datos
						<span class='fa fa-chevron-down'></span>
					</a>
					<ul class='nav child_menu'>
						<li>
						<a href='../../registros/backup/importar.php'>Importar</a>
						</li>
						<li>
						<a href='../../registros/backup/exportar.php'>Exportar</a>
						</li>
					</ul>
					</li>
				</ul>
			</div>
		");
	}

	public static function ObtenerPermisos($valu){
		switch ($valu) {
			case 1:
				Page::Modulo_Hotel();
				Page::Modulo_Resturante();
				Page::Modulo_Eventos();
				Page::Modulo_Registros();
				break;
			case 2:
				Page::Modulo_Registros();
				break;
			case 3:
				Page::Modulo_Hotel();
				break;
			case 4:
				Page::Modulo_Resturante();
				break;
			case 5:
				Page::Modulo_Eventos();
				break;	
			default:
				echo "";
		}	
	}

	public static function templateHeader($title){
		session_start();
		print("
			<!DOCTYPE html>
			<html lang='es'>
				<head>
					<meta charset='utf-8'>
					<title>Dashboard - $title</title>
					<link type='text/css' rel='stylesheet' href='../../../web/css/bootstrap.css'/>
					<link type='text/css' rel='stylesheet' href='../../../web/css/custom.css'/>
					<link type='text/css' rel='stylesheet' href='../../../web/css/daterangepicker.css'/>
					<link type='text/css' rel='stylesheet' href='../../../web/fonts/css/fontawesome-all.min.css'/>
					<link type='text/css' rel='stylesheet' href='../../../web/font/css/font-awesome.min.css'/>
					<link type='text/css' rel='stylesheet' href='https://fonts.googleapis.com/icon?family=Material+Icons'/>	
					<script type='text/javascript' src='../../../web/js/sweetalert.min.js'></script>	
					<meta name='viewport' content='width=device-width, initial-scale=1.0'/>
				</head>
				<body class='nav-md'>
					<div class='container body'>
						<div class='main_container'>");
		if(isset($_SESSION['IdUsuario'])){
			print("
				<header >
					<div class='col-md-3 left_col '>
						<div class='left_col scroll-view '>
						<div class='navbar nav_title'>
							<a href='../../otros/page/index.php' class='site_title'>
							<i class='material-icons'>business </i>
							</i>
							<span>Barolo</span>
							</a>
						</div>
						<div class='clearfix'></div>
						<br />
						<!-- sidebar menu -->
						<div id='sidebar-menu' class='main_menu_side hidden-print main_menu  '>
						<div class=''> ");
							if(isset($_SESSION['IdUsuario'])){
							print("
							<ul class='nav side-menu '>
							<li>
								<a>Bienvenido $_SESSION[NombreUsuario]</a>
							</ul>"); 
							}
								print("
							<ul class='nav side-menu '>
								<li>
								<a href='../../otros/page/index.php'>
								
									<i class='material-icons'>home</i> Inicio </a>
							</ul>
						</div>
			");	
			Page::ObtenerPermisos($_SESSION['cargo']);					
			print("		
						</div>
						<!-- /sidebar menu -->
						</div>
					</div>
					<!-- top navigation -->
					<div class='top_nav  '>
					<div class='nav_menu '>
						<nav>
						<div class='nav toggle'>
							<a id='menu_toggle'>
							<i class='material-icons'>menu</i>
							</a>
						</div>
						<ul class='nav navbar-nav navbar-right'>
							<li class=''>
							<a href='javascript:;' class='user-profile dropdown-toggle' data-toggle='dropdown' aria-expanded='false'>
								<i class='fas fa-cog'></i>
							</a>
							<ul class='dropdown-menu dropdown-usermenu pull-right'>
								<li>
								<a href=''>
									<i class='fab fa-staylinked pull-right'></i> Tema</a>
								</li>
								<li>
								<a href=''>
									<i class='fa fa-user pull-right'></i> Mi perfil</a>
								</li>
								<li>
								<a href='logout.php'>
									<i class='fa fa-sign-out pull-right'></i> Cerrar sesion</a>
								</li>
							</ul>
							</li>
							<li class=''>
							<a href='javascript:;' class='user-profile dropdown-toggle' data-toggle='dropdown' aria-expanded='false'>
								<i class='fas fa-envelope'></i>
							</a>
							</li>
							<li class=''>
							<a href='javascript:;' class='user-profile dropdown-toggle' data-toggle='dropdown' aria-expanded='false'>
								<i class='fas fa-bell'></i>
							</a>
							</li>
						</ul>
						</nav>
					</div>
					</div>
					<!-- /top navigation -->
				</header>
				<main>
			");
		}else{
			print("
				<header >
					<div class='col-md-3 left_col '>
						<div class='left_col scroll-view '>
						<div class='navbar nav_title'>
							<a href='../../otros/page/index.php' class='site_title'>
							<i class='material-icons'>business </i>
							</i>
							<span>Barolo</span>
							</a>
						</div>
						<div class='clearfix'></div>
						<br />
						<!-- sidebar menu -->
						<div id='sidebar-menu' class='main_menu_side hidden-print main_menu  '>
						</div>
						<!-- /sidebar menu -->
						</div>
					</div>
					<!-- top navigation -->
					<div class='top_nav  '>
					<div class='nav_menu '>
						<nav>
						<div class='nav toggle'>
							<a id='menu_toggle'>
							<i class='material-icons'>menu</i>
							</a>
						</div>
						<ul class='nav navbar-nav navbar-right'>
							<li class=''>
							<a href='javascript:;' class='user-profile dropdown-toggle' data-toggle='dropdown' aria-expanded='false'>
								<i class='fas fa-cog'></i>
							</a>
							<ul class='dropdown-menu dropdown-usermenu pull-right'>
								<li>
								<a href=''>
									<i class='fab fa-staylinked pull-right'></i> Tema</a>
								</li>
								<li>
								<a href=''>
									<i class='fa fa-user pull-right'></i> Mi perfil</a>
								</li>
								<li>
								<a href='logout.php'>
									<i class='fa fa-sign-out pull-right'></i> Cerrar sesion</a>
								</li>
							</ul>
							</li>
							<li class=''>
							<a href='javascript:;' class='user-profile dropdown-toggle' data-toggle='dropdown' aria-expanded='false'>
								<i class='fas fa-envelope'></i>
							</a>
							</li>
							<li class=''>
							<a href='javascript:;' class='user-profile dropdown-toggle' data-toggle='dropdown' aria-expanded='false'>
								<i class='fas fa-bell'></i>
							</a>
							</li>
						</ul>
						</nav>
					</div>
					</div>
					<!-- /top navigation -->
				</header>
				<main>
			");
			Page::showMessage(3,"Debe iniciar Sesion","login.php");
		}
	}


	public static function templateFooter(){
		print("
							</main>
							<!-- Footer -->
							<footer id='myFooter'>
								<div class='container'>
									<div class='row'>
										<div class='col-sm-3 myCols'>
											<h5>titulo 1</h5>
											<ul>
												<li><a href='#'>Home</a></li>
											</ul>
										</div>
										<div class='col-sm-3 myCols'>
											<h5>About us</h5>
											<ul>
												<li><a href='#'>Company Information</a></li>
											</ul>
										</div>
										<div class='col-sm-3 myCols'>
											<h5>Support</h5>
											<ul>
												<li><a href='#'>FAQ</a></li>
											</ul>
										</div>
										<div class='col-sm-3 myCols'>
											<h5>Legal</h5>
											<ul>
												<li><a href='#'>Terms of Service</a></li>
											</ul>
										</div>
									</div>
								</div>
								<div class='footer-copyright'>
									<p>© 2018 Copyright Barolo hotel </p>
								</div>
							</footer>
							<!-- ./Footer -->
						</div>
					</div>  
					<!-- jQuery -->
					<script type='text/javascript' src='../../../web/js/jquery.js'></script>
					<!-- Bootstrap -->
					<script type='text/javascript' src='../../../web/js/bootstrap.js'></script>
					<!-- bootstrap-progressbar -->
					<script type='text/javascript' src='../../../web/js/bootstrap-progressbar.js'></script>
					<!-- Custom Theme Scripts -->
					<script type='text/javascript' src='../../../web/js/custom.js'></script>
				</body>
			</html>
		");
	}
}
?>