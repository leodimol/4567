<!DOCTYPE html>
<html>
<head>
	<title>Using Math Functions</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="container">
		<h1><center>Using Math Functions</center></h1>
		<div class="box">
			<h2>Floating Point Numbers</h2>
			<p>Number 1: <?php $float1 = 12.6; echo $float1; ?></p>
			<p>Number 2: <?php $float2 = 22.35; echo $float2; ?></p>
			<p>Number 3: <?php $float3 = 33.80; echo $float3; ?></p>
			<p>Number 4: <?php $float4 = 45.89; echo $float4; ?></p>
			<p>Number 5: <?php $float5 = 57.25; echo $float5; ?></p>

			<h2>Whole Numbers</h2>
			<p>Number 1: <?php $int1 = 15; echo $int1; ?></p>
			<p>Number 2: <?php $int2 = 25; echo $int2; ?></p>
			<p>Number 3: <?php $int3 = 35; echo $int3; ?></p>
			<p>Number 4: <?php $int4 = 45; echo $int4; ?></p>
			<p>Number 5: <?php $int5 = 55; echo $int5; ?></p>

			<h2>Math Functions</h2>
			<p>abs(-15): <?php echo abs(-15); ?></p>
			<p>ceil(12.6): <?php echo ceil($float1); ?></p>
			<p>floor(12.6): <?php echo floor($float1); ?></p>
			<p>round(12.6): <?php echo round($float1); ?></p>
			<p>sqrt(144): <?php echo sqrt(144); ?></p>
			<p>pow(3, 2): <?php echo pow(3, 2); ?></p>
			<p>exp(2): <?php echo exp(2); ?></p>
			<p>log(50): <?php echo log(50); ?></p>
			<p>log10(1000): <?php echo log10(1000); ?></p>
			<p>sin(PI()/6): <?php echo sin(PI()/6); ?></p>
			<p>cos(PI()/6): <?php echo cos(PI()/6); ?></p>
			<p>tan(PI()/6): <?php echo tan(PI()/6); ?></p>
			<p>min(15, 25, 35): <?php echo min($int1, $int2, $int3); ?></p>
			<p>max(15, 25, 35): <?php echo max($int1, $int2, $int3); ?></p>

			<p><a href="index.html">Return to Main Page</a></p>
		</div>
		<center>Leo Dimol<br>October 12, 2024</center>
	</div>

</body>
</html>
