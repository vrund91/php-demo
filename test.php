<?php
class demo
{
    function __construct()
    {
        echo "in constructor"."<br>";
    }
    function __destruct()
    {
        echo "in Destructing";
    }

}
$demo = new demo();
?>