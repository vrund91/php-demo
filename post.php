<html>
<body>
	<form method="post">
    Name:<input type="text" name="name"/><br>
    Age:<input type="text" name="age"/><br>
    <input type="submit" name="submit" value="enter"/>
	</form>
	<?php
     if(isset($_POST['submit']))
     {
     	echo "welcome ". $_POST['name']."<br>";
     	echo "You are ". $_POST['age']. "Year Old.<br>";
     }
	?>
</body>
</html>
