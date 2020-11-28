<!DOCTYPE html>
<html>
<head>
	<title>배열</title>
</head>
<body>
	<h1>배열 / Array</h1>
	<?php 
		$array = array('array1','array2','array3','array4');	
		$i = 0;
		array_push($array, 'array5');
		for ($i=0; $i < count($array); $i++) { 
			echo $array[$i]."<br>";
		}
	?>
</body>
</html>