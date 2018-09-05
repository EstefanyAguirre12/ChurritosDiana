<?php
require_once('../../app/models/database.class.php');
require_once('../../app/helpers/validator.class.php');
require_once('../../app/helpers/component.class.php');

class Page extends Component {
	public static function templateHeader($title){
		session_start();
		print("
			<!DOCTYPE html>
			<html lang='es'>
				<head>
					<meta charset='utf-8'>
					<title>BAROLO - $title</title>
					<link type='text/css' rel='stylesheet' href='../../web/css/bootstrap.min.css'>
					<link type='text/css' rel='stylesheet' href='../../web/css/style.css'>
					<link type='text/css' rel='stylesheet' href='../../web/css/color.css'>
					<script type='text/javascript' src='../../web/js/sweetalert.min.js'></script>		
				</head>
				<body>
				<nav class='navbar navbar-expand-lg navbar-light bg-light fixed-top'>
				<a class='navbar-brand' href='#'>BAROLO</a>
				<button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarNav' aria-controls='navbarNav' aria-expanded='false' aria-label='Toggle navigation'>
				  <span class='navbar-toggler-icon'></span>
				</button>
				<div class='collapse navbar-collapse' id='navbarNav'>
				  <ul class='navbar-nav'>
					<li class='nav-item'>
					  <a class='nav-link' href='#'>Home <span class='sr-only'>(current)</span></a>
					</li>
					<li class='nav-item'>
					  <a class='nav-link' href='#'>Features</a>
					</li>
					<li class='nav-item'>
					  <a class='nav-link' href='#'>Pricing</a>
					</li>
					<li class='nav-item'>
					  <a class='nav-link disabled' href='#'>Disabled</a>
					</li>
				  </ul>
				</div>
			  </nav>
			  <main>
		");
	}


	public static function templateFooter(){
		print("
							</main>
							<!-- Footer -->
							<footer >
							</footer>
							<!-- ./Footer -->
						</div>
					</div>  
					<!-- jQuery -->
					<script type='text/javascript' src='../../web/js/jquery.js'></script>
					<!-- Bootstrap -->
					<script type='text/javascript' src='../../web/js/bootstrap.js'></script>
					<!-- bootstrap-progressbar -->
					<script type='text/javascript' src='../../web/js/bootstrap-progressbar.js'></script>
					<!-- Custom Theme Scripts -->
					<script type='text/javascript' src=''></script>
				</body>
			</html>
		");
	}
}
?>