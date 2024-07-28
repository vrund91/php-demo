<html>
 <body>
  <form method="POST">
    Enter name: <input type="text" name="h1"/>
    Enter marks: <input type="number" name="mark"/>
    <input type="submit" name="submit"/>
    </form>
    
    <?php
      
      class Student
      {
        public $name;
	public $marks;
	
         function a()
	 {
	  if(isset($_POST['submit']))
		    {
		       $name=$_POST['h1'];
		       $marks=$_POST['mark'];
		       
		       echo $name;
		       echo "<br>";
		       echo $marks;
		       echo "<br>";
		       }
	    echo "Student class";
	    echo "<br>";
	    }
	    }
	    
	    class Newclass extends Student
	    {
	       function b()
	       {
	          echo "Newclass";
		  echo "<br>";
		  }
		  }
		       
		     $obj1 = new Newclass();
		    $obj1->a();
		   $obj1->b();
		     
		     ?>
		     </body>
		     </html>
	    
	    