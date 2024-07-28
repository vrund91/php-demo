<html>
<body>
<form method="POST">
Student Name:<input type="text" name="name"/>
<input type="submit" value="submit" name="submit"/>
</form>
<?php
class Student 
{
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
$student = new Student();
$student_name = $_POST['name'];
$student->set_name($student_name);
if(isset($_POST['submit']))
{
if(!empty($student_name))
{
echo "<h2> Student Details: </h2>";
echo "<p> Name:".$student->get_name()."</p>";
}
}
?>
</body>
</html>