<html>
<?php
class Student{
    public $name;
    function set_name($name)
    {
        $this->name = $name;
    }
    function get_name()
    {
        return $this->name;
    }
}
$student1 = new Student();
$student2 = new Student();

$student1->set_name("student name 1");
$student2->set_name("student name 2");

echo "student 1:<br>";
echo "Name:".$student1->get_name()."<br>";
echo "<br>";
echo "student 2:<br> ";
echo "Name:".$student2->get_name()."<br>";
?>
</html>