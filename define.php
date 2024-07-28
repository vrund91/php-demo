<?php
        define("GREETING","HELLO WORLD");
        //define("GREETING","Hello world",false);
        echo GREETING."<br>";//outputs "Hello world."
        echo grEEting."<br>";//outputs "grEEting"
        define("GREETING","Hello world",true);
        echo GREETING."<br>";//outputs "Hello world."
        echo grEEting."<br>";//outputs "Hello world."
?>