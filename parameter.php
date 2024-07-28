<?php
class Employee
{
    public $name;
    public $position;

    function __construct()
    {
        $this->name=$name;
        $this->position=$position;

    }
    function show_details()
    {
        echo $this->name.":";
        echo "your position is " .$this->position."\n";
    }

}
$obj1=new Employee("Rakesh","developer");
$obj1->show_details();
echo "<br>";

$employee2=new Employee("vikas","manager");
$employee2->show_details();
?>