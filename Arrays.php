// Write a PHP script for numeric, associative and multidimensional array and perform all sorting functions on it.<br>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Array</title>
</head>
<body>
<?php 

echo "***************Numeric Array************<br>";
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $value) {
  echo "$value <br>";
}
echo "<br>***************Associative  Array************<br>";

$name = array("ABC"=>101,"PQR"=>102,"XYZ"=>103);
foreach ($name as $key => $value) {
	echo "<br>keys = ".$key." and  values = ".$value;
	//echo " <br> $value";
}

echo "<br>***************Multidimensional  Array************<br>";

$cars = array (
  array("Volvo",22,18),
  array("BMW",15,13),
  array("Saab",5,2),
  array("Land Rover",17,15)
);

foreach($cars as $index => $data){
	foreach($data as $key => $val){
		echo $val ."<br>";
	}
}
?>
</body>
</html>