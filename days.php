<html>
<body>
	<form method="POST">
		Enter a number:<input type="number" name="num"/><br>
		<input type="submit" name="submit">
	</form>
	<?php
	$num1=$_POST['num'];
	if(isset($_POST['submit']))
	{
	switch ($num1) {
		case '1':
			echo "sunday";
			break;
		
		case '2':
			echo "Monday";
			break;

		case '3':
			echo "Tuesday";
			break;

		case '4':
			echo "Wednesday";
			break;

		case '5':
			echo "Thursday";
			break;

		case '6':
			echo "friday";
			break;

		case '7':
			echo "saturday";
			break;

		     default:
			 echo "Invalid case";
	}
}
	?>
</body>
</html>