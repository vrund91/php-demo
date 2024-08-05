<html>
<form method = "POST">
<input type="text" placeholder="write here..."required name="Arr">
<span> Array seperated by commas (,) </span>
<button type="submit" name="Apply"> Apply Here..</button></form><br><br>

<?php
if(isset($_POST["Apply"]))
{
$Ar = $_POST["Arr"];
echo "<h3> Array using passed value (String value) = $Ar </h3>";
$NewArr = explode(',',$Ar);
$NewIntArr = [];
foreach ($NewArr as $value)
{
$NewIntArr[] = intval($value);
}

echo "<h3> Array after conversion (Integer Array) = ";
foreach ($NewIntArr as $value)
{
echo "$value";
}
echo "</h3>";
}

?>