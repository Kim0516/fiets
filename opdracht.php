<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Naamloos document</title>
</head>

<body>
<?php
	$number = 7;
	for ($i =1 ; $i <= 10; $i ++)
	{
		$ans = $number * $i;
		echo "$i * $number = $ans <br>";
	}
	
	echo "<br> <br> <br>";
	
	$x = 15;
	while ($x >= 1 )
	{
		$answer = $number * $x;
		echo "$x * $number = $answer <br>";
		$x--;
	}
?>
</body>
</html>