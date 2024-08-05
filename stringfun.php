<html>
<body>
	<form method="POST">

		Enter a string: <input type="text" name="string"/><br><br>
		Enter a string[only for pos function]: <input type="text" name="string1"/><br><br>
		<input type="submit" name="upper" value="upper"/><br><br>
		
		<input type="submit" name="lower" value="lower"/><br><br>
		
		<input type="submit" name="vowel" value="vowel"/><br><br>
		
		<input type="submit" name="length" value="length"/><br><br>
		
		<input type="submit" name="rev" value="reverse"/><br><br>
	
		<input type="submit" name="trim" value="trim"/><br><br>
		
		<input type="submit" name="ltrim" value="ltrim"/><br><br>
		
		<input type="submit" name="rtrim" value="rtrim"/><br><br>
		
		<input type="submit" name="wcount" value="word count"/><br><br>
		
		<input type="submit" name="position" value="position"/><br><br>
		
		<input type="submit" name="replace" value="replace"/><br><br>
	
		<input type="submit" name="split" value="split"/>
		
		<input type="submit" name="ucfirst" value="ucfirst"/>
		
		<input type="submit" name="strtoken" value="strtoken"/>

	</form>

	<?php

	 if(isset($_POST['upper']))
	 {
	 	$str = $_POST['string'];

	 	echo "To uppercase: ".strtoupper($str);
	 }

	 elseif(isset($_POST['lower']))
	 {
	 	$str = $_POST['string'];

	 	echo "To lowercase : ".strtolower($str);
	 }

	 elseif(isset($_POST['vowel']))
	 {
	 	$str = $_POST['string'];

	 	if($str == 'A' || $str == 'E' || $str == 'I' || $str == 'O' || $str == 'U' ||
	       $str == 'a' || $str == 'e' || $str == 'i' || $str == 'o' || $str=='u')
	 	{
	 		echo "$str is a vowel";
	 	}
	 	else
	 	{
	 		echo "$str is consonant";
	 	}
	 }

	 elseif(isset($_POST['length']))
	 {
	 	$str = $_POST['string'];
	 	echo "print the length:".strlen($str);
	 }

	 elseif(isset($_POST['rev']))
	 {
	 	$str = $_POST['string'];

        echo "convert string into reverse:".strrev($str); 
	 }

	 elseif(isset($_POST['trim']))
	 {
	 	$str = $_POST['string'];

	 	echo "string convert into trim:".trim($str);
	 }

	  elseif(isset($_POST['ltrim']))
	 {
	 	$str = $_POST['string'];

	 	echo "string convert into ltrim:".ltrim($str);
	 }

	  elseif(isset($_POST['rtrim']))
	 {
	 	$str = $_POST['string'];

	 	echo "string convert into rtrim:".rtrim($str);
	 }

	  elseif(isset($_POST['wcount']))
	 {
	 	$str = $_POST['string'];

	 	echo "string world count:".str_word_count($str);
	 }

	  elseif(isset($_POST['position']))
	 {
	 	$str = $_POST['string'];
	 	$str1 = $_POST['string1'];

        echo $str;
        echo "<br>";
        echo $str1;
        echo "<br>";
	 	echo strpos($str,$str1);
	 }

	 elseif(isset($_POST['replace']))
	 {
	 	echo str_replace("world","Peter","Hello world!");
	 }

	  elseif(isset($_POST['split']))
	 {
	 	$str = $_POST['string'];
	 	print_r(str_split($str));
	 }

	   elseif(isset($_POST['ucfirst']))
	 {
	 	$str = $_POST['string'];
	 	echo "convert into ucfirst: ".ucfirst($str);
	 }

	 elseif(isset($_POST['strtoken']))
	 {
	 	$str = $_POST['string'];
	 	$token = strtok($str, " ");
    while ($token !== false)
    { 
      echo "$token<br>";
      $token = strtok(" ");
    } 
	 }

	 ?>
	</body>
	</html>

