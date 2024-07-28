<html>
    <body>  
        <form method="POST">
        Enter a number:<input type="number" name="nam1"/><br><br>
        Enter a second number:<input type="number" name="nam2"/><br><br>
        <input type="submit" name="submit"/>
        </form>
        <?php
        function swap(&$x,&$y)
        {
            $temp=0;
            $temp=$x;
            $x=$y;
            $y=$temp;

            echo "x:".$x;
            echo "y:".$y;
        }
        if(isset($_POST['submit']))
        {
            $x=$_POST['nam1'];
            $y=$_POST['nam2'];

            
            swap($x,$y);

              
        }
        ?>
    </body>
</html>