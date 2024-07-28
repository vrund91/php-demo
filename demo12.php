<html>
    <body style="background-color: aqua;">
<?php
interface person
{
    public function input();
}
class collegestudent implements person
{
    public function input()
    {
        echo "studying hard for exams.";
    }
}   
class faculty implements person
{
    public function input()
    {
        echo "Teaching hard for exams.";
    }
}
$obj1=new collegestudent();
$obj1->input();
echo "<br>";
$obj2=new faculty();
$obj2->input(); 
?>
</html>
</html>