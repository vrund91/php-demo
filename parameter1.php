<?php
class Employee
{
    public $name;
    public $position;

    function __construct($name,$position)
    {
        $this->name=$name;
        $this->position=$position;
    }

    function show_details()
    {
        echo $this->name.
    }
}
?>