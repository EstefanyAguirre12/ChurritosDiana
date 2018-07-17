<?php
include_once('php/cargoempleado.php');
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
		text: "Cantidad de empleados en cada cargo"
	},
	data: [{
    type: "bar",
		name: "companies",
		axisYType: "secondary",
		color: "#014D65",

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
