<?php
include_once('php/tipoproducto.php');
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
		text: "Cantidad de productos por Tipo"
	},
	data: [{
    type: "pyramid",
		indexLabel: "{label} - {y}",
    showInLegend: true,
    legendText: "{label}",
		toolTipContent: "Cantidad de productos en <b>{label}</b>: {y}",
		neckWidth: 20,
		neckHeight: 0,
		valueRepresents: "area",

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
