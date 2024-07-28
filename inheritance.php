<?php
class ParentClass
{
function a()
{
echo "A member function of the base class a";
}
}

class ChildClass extends ParentClass
{
function b()
{
echo "A member function of the base class b";
}
}

$Obj = new ChildClass();
$Obj->a();
echo "<br>";
$Obj->b();
?>

