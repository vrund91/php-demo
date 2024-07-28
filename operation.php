<?php
$no1=10;
$no2= 10;

$not_equal=$no1!=$no2;
echo "<br> not equal = $not_equal <br>";
var_dump($no1!=$no2);

$equal = $no1==$no2;
echo "<br> Equal = $equal <br>";
var_dump($no1==$no2);

$identical = $no1==$no2;
echo "<br> identical = $identical <br>";
var_dump($no1===$no2);

$not_equal2=$no1<> $no2;;
echo "<br> not_equal2 = $not_equal" ;
var_dump($no1<> $no2);

$identical_not_equal=$no1!==$no2;
echo "<br> identical_not_equal = $identical_not_equal <br>";
var_dump($no1!==$no2);

?>