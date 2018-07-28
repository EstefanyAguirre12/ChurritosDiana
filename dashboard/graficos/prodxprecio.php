<?php
include_once('php/prodxprecio.php');
/*include_once('php/usuarios.php');*/
?>
<!DOCTYPE HTML>
<html>
<head>  
<script>
window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	theme: "light2", // "light1", "light2", "dark1", "dark2"
	title:{
		text: "Productos por precio"
	},
	axisY: {
		title: "Precio"
	},
	data: [{        
		type: "column",  
		showInLegend: true, 
		legendMarkerColor: "white",
		legendText: "Productos",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();

}
</script>
</head>
<body>
<div id="chartContainer" style="height: 300px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html>