<?php
include_once('php/tipohabitacion.php');
/*include_once('php/usuarios.php');*/
?>
<!DOCTYPE HTML>
<html>
<head>

<script>
window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	exportEnabled: true,
	theme: "light1", // "light1", "light2", "dark1", "dark2"
	title:{
		text: "Cantidad de habitaciones por tipo"
	},
	data: [{
		type: "column",
                indexLabelFontFamily: "Garamond",
                indexLabelFontSize: 15,
                startAngle: -20,
                toolTipContent: "Cantidad de productos = {y}",

		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();


}
</script>

</head>
<body>
<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html>

