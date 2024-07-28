<html>  
    <body>
        <form method="POST">
           Enter your name:<Input type="text" name="nam"/><br><br>
           Enter your position:<input type="text" name="pos"/><br><br>
           <input type="submit" name="submit"/>
        </form>

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
                echo $this->name. " ";
                echo "your position is : " .$this->position."\n";
            }
        }
        if(isset($_POST['submit']))
        {
            $name=$_POST['nam'];
            $position=$_POST['pos'];
            
        $obj1=new Employee($name,$position);
        $obj1->show_details();
        echo "<br>";
        }
        
        ?>
    </body>
</html>