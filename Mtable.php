<html>
<body bgcolor="sky blue">
	<h2>This is Multiplication Table</h2>
	<p style="color: navajowhite;">
		<?php
		$a=9;
        $i;
        for($i=1; $i<=10; $i++)
        {
        	echo "$a * $i = " , $a * $i;
        	echo "<br>";
        }
		?>
	</p>
</body>
</html>