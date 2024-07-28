<?php
interface person
{
public function input();
}

class collegeStudent implements person
{
public function input()
{
echo "Studying hard for exams!";
}
}

class faculty implements person
{
public function input()
{
echo "Teaching hard for exams!";
}
}

$student1 = new collegeStudent();
$student1->input();
echo "<br>";
$faculty1 = new faculty();
$faculty1->input();
?>