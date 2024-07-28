<html>
<body>
	<?php
	$intArray = array(10,20,30);
	echo "first Element: $intArray[0]\n";
	echo "second Element: $intArray[1]\n";
	echo "Third Element: $intArray[2]\n\n";

	for($i=0; $i<count($intArray); $i++)
	{
		echo "<br>Element [$i]: $intArray[$i]\n<br>";
	}
	//var_dump($intArray);
	?>
</body>
</html>