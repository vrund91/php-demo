<html>
<body>
	<?php
	$intArray = array(1,2,3,4,5,6,7,8,9,10);
	

    $count=0;
    echo "even element are:<br>";
	for($i=0; $i<count($intArray); $i++)
	{
		if($intArray[$i]%2==0)
		{
		echo"$intArray[$i]\n<br><br>";
		$count=$count+1;
	    }
	}
	echo "count is: $count";
	//var_dump($intArray);
	?>
</body>
</html>