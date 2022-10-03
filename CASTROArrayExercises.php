<!DOCTYPE html>
<html>
<head>
	<title>CASTRO - PHP Array</title>
</head>
<body>
<?php
//ARRAY 1

$weather = array();
$weather = array("rain", "sunshine", "clouds", "hail", "sleet", "snow", "wind");

echo "We've seen all kinds of weather this month. At the beginning of the month, we had " . $weather[5] . " and " . $weather[6] . ". Then came " . $weather[1] . " with a few " . $weather[2] . " and some " . $weather[0] . " At least we didn't get any " . $weather[3] . " or " . $weather[4] . "."


//ARRAY 2
$cities = array();
$cities = array("Tokyo", "Mexico City", "New York City", "Mumbai", "Seoul", "Shanghai", "Lagos", "Buenos Aires", "Cairo", "London");
	for($i=0; $i<count($cities); $i++){
		echo ($cities[$i]);
		echo ",";
	}
	sort ($cities);
	echo ("<ul>");
	for($i=0; $i<count($cities); $i++){
		echo ("<li>" . $cities[$i] . "<li>");
	}
	array_push($cities, "Los Angeles" , "Calcuta" , "Osaka" , "Beijing");
	sort ($cities);
	echo ("<ul>");
	for($i=0; $i<count($cities); $i++){
		echo ("<li>" . $cities[$i] . "<li>");
	}

?>

</body>
</html>