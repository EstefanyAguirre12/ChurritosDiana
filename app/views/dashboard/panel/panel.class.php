<?php
require_once('../../../app/models/database.class.php');
require_once('../../../app/helpers/validator.class.php');
require_once('../../../app/helpers/component.class.php');
require_once('../../../app/helpers/dumper.php');
require_once('../../../app/helpers/fpdf.php');


class Page extends Component{

	public static function Modulo_Hotel($h1,$h2,$h3,$h4){
		if($h1 != 0 || $h2 != 0 || $h3 != 0  || $h4  !=0 ){
		print("
			<div class='menu_section'>
				<h3 class='text-center'>Hotel</h3>
				<ul class='nav side-menu'>
		");
		if($h1 != 0 ){
			print("
				<li>
					<a>
						<i class='material-icons'>insert_invitation</i> Reservas
						<span class='fa fa-chevron-down'></span>
					</a>
					<ul class='nav child_menu'>
						<li>
						<a href='../../hotel/reservas/reserva_nueva.php'>Nueva reserva</a>
						</li>
						<li>
						<a href='../../hotel/reservas/reserva_control.php'>Listado reserva</a>
						</li>
					</ul>
				</li>
			");
		}
		if($h2 !=0 ){
			print("
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
			");
		}
		if($h3 !=0 ){
			print("			
				<li>
					<a>
						<i class='material-icons'>store</i> Habitaciones
						<span class='fa fa-chevron-down'></span>
					</a>
					<ul class='nav child_menu'>
						<li>
						<a href='../../hotel/habitaciones/h_disponibles.php'>Listado Habitaciones</a>
						</li>
					</ul>
				</li>
			");	
		}
		if($h4 !=0 ){
			print("
					<li>
						<a>
							<i class='material-icons'>archive</i> Registros
							<span class='fa fa-chevron-down'></span>
						</a>
						<ul class='nav child_menu'>
							<li>
							<a href='../../hotel/registros/habitaciones.php'>Habitaciones</a>
							</li>
							<li>
							<a href='../../hotel/registros/indextipo.php'>Tipo Habitacion</a>
							</li>
						</ul>
					</li>	
			");	
		}			
		print("		
				</ul>
			</div>
		");
		}
	
	}
	public static function Modulo_Resturante($r1,$r2,$r3){
		if($r1 != 0 || $r2 != 0 || $r3 != 0 ){
			print("
				<div class='menu_section'>
					<h3 class='text-center'>Restaurante</h3>
					<ul class='nav side-menu'>
			");
			if($r1 !=0 ){
				print("
					<li>
						<a>
							<i class='material-icons'>tab</i> Mesas
							<span class='fa fa-chevron-down'></span>
						</a>
						<ul class='nav child_menu'>
							<li>
							<a href='../../restaurante/mesas/mesas_disponibles.php'>Listado Mesas</a>
							</li>
						</ul>
					</li>
				");
			}
			if($r2 !=0 ){
				print("
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
				");
			}
			if($r3 !=0 ){
				print("			
				<li>
					<a>
						<i class='material-icons'>archive</i> Registros
						<span class='fa fa-chevron-down'></span>
					</a>
					<ul class='nav child_menu'>
						<li>
						<a href='../../restaurante/registros/indexcategoria.php'>Categoria</a>
						</li>
						<li>
						<a href='../../restaurante/registros/indexmesa.php'>Mesas</a>
						</li>
						<li>
						<a href='../../restaurante/registros/indexproducto.php'>Productos</a>
						</li>
						<li>
						<a href='../../restaurante/registros/indextipo.php'>Tipo Producto</a>
						</li>
					</ul>
				</li>
				");	
			}			
			print("		
					</ul>
				</div>
			");
			}
	}
	public static function Modulo_Eventos($e1,$e2,$e3){
		if($e1 != 0 || $e2 != 0 || $e3 != 0 ){
			print("
				<div class='menu_section'>
					<h3 class='text-center'>Eventos</h3>
					<ul class='nav side-menu'>
			");
			if($e1 !=0 ){
				print("
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
				");
			}
			if($e2 !=0 ){
				print("
					<li>
						<a>
							<i class='material-icons'>store</i> Salones
							<span class='fa fa-chevron-down'></span>
						</a>
						<ul class='nav child_menu'>
							<li>
							<a href='../../eventos/salones/salones_disponibles.php'>Listado salones</a>
							</li>
						</ul>
					</li>
				");
			}
			if($e3 !=0 ){
				print("			
					<li>
						<a>
							<i class='material-icons'>archive</i> Registros
							<span class='fa fa-chevron-down'></span>
						</a>
						<ul class='nav child_menu'>
							<li>
							<a href='../../eventos/registros/indexsala.php'>Salones</a>
							</li>
							<li>
							<a href='../../eventos/registros/indexsilla.php'>Sillas</a>
							</li>
							<li>
							<a href='../../eventos/registros/indexmesa.php'>Mesas</a>
							</li>
						</ul>
					</li>
				");	
			}			
			print("		
					</ul>
				</div>
			");
		}
	}
	public static function Modulo_Lavanderia($l1){
		if($l1 != 0){
			print("
				<div class='menu_section'>
					<h3 class='text-center'>Lavanderia</h3>
					<ul class='nav side-menu'>
			");
			if($l1 !=0 ){
				print("
				<li>
					<a>
						<i class='material-icons'>archive</i> Registros
						<span class='fa fa-chevron-down'></span>
					</a>
					<ul class='nav child_menu'>
						<li>
							<a href='../../lavanderia/registros/indexcategoria.php'>Categoria</a>
						</li>
						<li>
							<a href='../../lavanderia/registros/indexlavanderia.php'>Objetos</a>
						</li>
						<li>
							<a href='../../lavanderia/registros/indexmaterial.php'>Material</a>
						</li>
					</ul>
				</li>
				");
			}		
			print("		
					</ul>
				</div>
			");
		}
	}
	public static function Modulo_Registros($rr1,$b1,$g1){
		if($rr1 != 0 || $b1 != 0 || $g1 != 0 ){
			print("
				<div class='menu_section'>
					<h3 class='text-center'>Registros</h3>
			");
			if($rr1 !=0 ){
				print("
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
								<li>
								<a href='../../registros/mantenimientos/indexentes.php'>Entes</a>
								</li>
								<li>
								<a href='../../registros/mantenimientos/indextipoente.php'>Tipo Ente</a>
								</li>
							</ul>
						</li>
					</ul>
				");
			}
			if($b1 !=0 ){
				print("

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
				");
			}
			if($g1 !=0 ){
				print("			
					<h3 class='text-center'>Graficos</h3>
					<ul class='nav side-menu'>
						<li>
						<a>
							<i class='material-icons'>archive</i> Registros
							<span class='fa fa-chevron-down'></span>
						</a>
						<ul class='nav child_menu'>
							<li>
							<a href='../../graficos/parametros/paramfecha.php'>Reservas por Fecha</a>
							</li>
							<li>
							<a href='../../graficos/parametros/paramhab.php'>Habitaciones por precio</a>
							</li>
							<li>
							<a href='../../graficos/parametros/paramprod.php'>Productos y precio</a>
							</li>
							<li>
							<a href='../../graficos/parametros/paramsalas.php'>Salones por precio</a>
							</li>
							<li>
							<a href='../../graficos/parametros/paramtipo.php'>Cantidad de productos por tipo</a>
							</li>
						</ul>
						</li>
					</ul>
				");	
			}			
			print("		
					</ul>
				</div>
			");
		}
	}

	public static function ObtenerPermisos($valu){
		$permisos = json_decode($valu);
		Page::Modulo_Hotel($permisos[1],$permisos[2],$permisos[3],$permisos[4]);
		Page::Modulo_Resturante($permisos[5],$permisos[6],$permisos[7]);
		Page::Modulo_Eventos($permisos[8],$permisos[9],$permisos[10]);
		Page::Modulo_Lavanderia($permisos[11]);
		Page::Modulo_Registros($permisos[12],$permisos[13],$permisos[14]);	
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
					<script src='https://www.google.com/recaptcha/api.js'></script>	
					<script type='text/javascript' src='../../../web/js/sweetalert.min.js'></script>	
					<meta name='viewport' content='width=device-width, initial-scale=1.0'/>
				</head>
				<body class='nav-md'>
					<div class='container body'>
						<div class='main_container'>");
		if(isset($_SESSION['IdUsuario'])){


//Comprobamos si esta definida la sesión 'tiempo'.
if(isset($_SESSION['tiempo']) ) {

    //Tiempo en segundos para dar vida a la sesión.
    $inactivo = 300;//5min en este caso.

    //Calculamos tiempo de vida inactivo.
    $vida_session = time() - $_SESSION['tiempo'];

        //Compraración para redirigir página, si la vida de sesión sea mayor a el tiempo insertado en inactivo.
        if($vida_session > $inactivo)
        {
            
            //Removemos sesión.
            session_unset();
            //Destruimos sesión.
            session_destroy();              
            //Redirigimos pagina.
            header("Location: ../otros/logout.php");
            exit();
        }

}


$_SESSION['tiempo'] = time();





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
								<a href='contra.php'>
									<i class='fab fa-staylinked pull-right'></i> Contraseña</a>
								</li>
								<li>
								<a href='perfil.php'>
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
		require_once("../../../app/models/usuario.class.php");
		$object2 = new Usuario;  
		if($object2->setId($_SESSION['IdUsuario'])){
		  if($object2->readEstadoSesion()){
			if($object2->getestado_sesion()!=1){
			  header('Location: ../otros/logout.php');
			}
		  }
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
					<script type='text/javascript' src='../../../web/js/daterangepicker/bootstrap-datetimepicker.min.js'></script>
					<script type='text/javascript' src='../../../web/js/daterangepicker.js'></script>
					<!-- Custom Theme Scripts -->
					<script type='text/javascript' src='../../../web/js/custom.js'></script>
					<script type='text/javascript' src='../../../web/js/custom.min.js'></script>
				</body>
			</html>
		");
	}
}
?>