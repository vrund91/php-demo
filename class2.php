<html>
    <body>
    <form method="POST">
          Enter a student name:<input type="text" name="name">   
          <input type="submit" name="submit" > 
    </form>
    
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
$student= new Student();
$student_name = $_POST['name'];
$student->set_name($student_name);
if(isset($_POST['submit']))
{
    if(!empty($student_name))
    {
        echo "<h2> Student Detaiks: </h2>";
        echo "<p> Name:".$student->get_name()."</p>";
    }
}
?>
</body>
</html>