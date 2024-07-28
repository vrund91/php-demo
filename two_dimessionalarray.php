<?php
$emp=array
(
	array(1,"sonoo",400000),
	array(2,"john",500000),
	array(3,"rahul",300000)
);
for($row=0; $row<3; $row++)
{
	for($cols=0; $cols<3; $cols++)
	{
		echo $emp[$row][$cols]. " ";
	}
	echo "<br>";
}
?>