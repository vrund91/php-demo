<html>
<body bgcolor="blue">
	<h2>This is even demo</h2>
	<p style="color: skyblue;">
	<?php
	for($i=0; $i<=10; $i++)
	{
		if($i % 2 == 0)
		{
			echo "$i";
		}
		echo "<br>";
	}
	?></p>
</body>
</html>
