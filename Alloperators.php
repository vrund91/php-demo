<html>
    <body>
        <form method="POST">
            Enter 1st number:<input type="number" name="first"><br>
            Enter 2nd number:<input type="number" name="second"><br>
            Not equal<input type="submit" name="notequ" value="!="><br>
            equal<input type="submit" name="equ" value="="><br>
            greater<input type="submit" name="gre" value=">"><br>
            less<input type="submit" name="less" value="<"><br>

        </form>
        <?php
        if(isset($_POST["notequ"]))
        {
            $a=$_POST['first'];
            $b=$_POST['second'];

            if($a!=$b)
            {
                echo "not equal. <br>";
            }   
        }
        if(isset($_POST["equ"]))
        {
            $a=$_POST['first'];
            $b=$_POST['second'];

            if($a==$b)
            {
                echo " equal. <br>";
            }   
        }
        if(isset($_POST["gre"]))
        {
            $a=$_POST['first'];
            $b=$_POST['second'];

            if($a>$b)
            {
                echo " $a > $b greater then. <br>";
            }   
        }
        if(isset($_POST["less"]))
        {
            $a=$_POST['first'];
            $b=$_POST['second'];

            if($a<$b)
            {
                echo "$a < $b less then. <br>";
            }   
        }

        ?>
    </body>
</html>