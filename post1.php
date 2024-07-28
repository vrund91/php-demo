<html>
<body>
	<form method="post">
		Enter first number : <input type="number" name="number1"/><br>
	    Enter second number: <input type="number" name="number2"/><br>
	    <input type="submit" name="Add" value="Addition"/><br>
	    <input type="submit" name="sub" value="subtraction"/><br>
	    <input type="submit" name="Mul" value="Multiplication"/><br>
	    <input type="submit" name="Div" value="Divide"/><br>

	</form>
	<?php
	if(isset($_POST['Add']))
	{
		$num1 = $_POST['number1'];
		$num2 = $_POST['number2'];
		
		$result = $num1 + $num2;
		echo "result(Addition): $result";
	}
	if(isset($_POST['sub']))
	{
		$num1 = $_POST['number1'];
		$num2 = $_POST['number2'];
		
		$result = $num1 - $num2;
		echo "result(subtraction): $result";
	}
	if(isset($_POST['Mul']))
	{
		$num1 = $_POST['number1'];
		$num2 = $_POST['number2'];
		
		$result = $num1 * $num2;
		echo "result(Multiplication): $result";
	}
	if(isset($_POST['Div']))
	{
		$num1 = $_POST['number1'];
		$num2 = $_POST['number2'];
		
		$result = $num1 / $num2;
		echo "result(Division): $result";
	}
	?>
</body>
</html>