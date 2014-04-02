<!DOCTYPE html>
<html>

<head>
	<title>...</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
	<!-- PHP Coding -->
	<?php  
	/******* 1.Variables ***************************/
		$a = 4.1;
		$b = "Rot";
		$c = strtolower($b);
		$d = gettype($c);
		echo $c . "; Datentyp: " . $d;

	/******* 2.Arrays ***************************/
		$e = [2, 5, "Gelb"];
		$e[] = "Grün";
		foreach ($e as $key) { echo "<br>Array-Element: $key"; }
		echo "<br>";
		echo gettype($e);
		$arr = array("a"=>"lila", "b"=>"schwarz", "c"=>"gelb", "d"=>3);
		echo "<br>";
		print_r($arr);
		extract($arr);
		echo "<br>";
		echo "Variable aus Array-Element: $b";

	/******* 3.Verzweigungen ***************************/
		if(is_array($e)){
			echo "<br>Datentyp: Array";
		} else {
			echo "<br>Datentyp: Unbekannt";
		} 
	/******* 4.Schleifen ***************************/
		echo "<ul>";
		$i = 4.1;
		while($i < 7){
			echo "<li>i ist noch kleiner 7</li>";
			$i++;
		}
		echo "<ul>";
	?>
</body>

</html>