<?php
function count_strudent()
{
    static $student_count=0;
    //$student_count=0;
    $student_count++;
    echo "Total students: ". $student_count."<br>";
}
count_strudent();
count_strudent();
count_strudent();
?>