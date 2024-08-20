<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration Form</title>
    <style type="text/css">
        table {
            border-collapse: collapse;
            width: 40%;
        }
        td,th{
            border:1px solid black;
            padding: 8px;
        }
        th {
            background-color:cyan;
        }
        form {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div align="center">
    <h2>Student Registration Form</h2>
    <form method="POST">
        <table bgcolor="skyblue">
        <tr>
            <td>Student Name:</td>
            <td><input type="text" name="student_name" required><br><br></td>
        </tr>   

        <tr>
            <td>Mail ID:</td>
            <td><input type="email" name="mail_id" required><br><br></td>
        </tr>

        <tr>
            <td>Age:</td> 
            <td><input type="number" name="age" required><br><br></td>
        </tr>

        <tr>
            <td>Gender: <br></td>
            <td>
                <input type="radio" name="gender" value="Male" required> Male<br>
                <input type="radio" name="gender" value="Female" required> Female<br><br>
            </td>
        </tr>

        <tr>
            <td>Hobbies: <br></td>
            <td>
                <input type="checkbox" name="hobbies[]" value="Reading"> Reading<br>
                <input type="checkbox" name="hobbies[]" value="Sports"> Sports<br>
                <input type="checkbox" name="hobbies[]" value="Music"> Music<br><br>
            </td>
        </tr>

        <tr>
            <td>City:</td>
            <td>
            <select name="city" required>
                <option value="New York">New York</option>
                <option value="Los Angeles">Los Angeles</option>
                <option value="Chicago">Chicago</option>
                 <option value="Houston">Houston</option>
            </select><br><br>
            </td>
        </tr>

        <tr>
            <td colspan="2">
                <input type="submit" name = "submit" value="Submit"><br><br>
            </td>
        </tr>
        </table><br>
        <table bgcolor="skyblue">
    <?php
    if(isset($_POST['submit']))
    {
        $student_name = $_POST['student_name'];
        $mail_id = $_POST['mail_id'];
        $age = $_POST['age'];
        $gender = $_POST['gender'];
        $hobbies = $_POST['hobbies'];
        $city = $_POST['city'];

        echo "<tr>";
        echo "<td>";
        echo "Student Name: $student_name<br>";
        echo "Mail ID:$mail_id<br>";
        echo "Age: $age<br>";
        echo "Gender:$gender<br>";
        

        echo "Hobbies:";
        if (!empty($hobbies))
        {
            foreach ($hobbies as $hobby) {
                echo $hobby . " ";
            }
        } 
        else 
        {
            echo "None";
        }
        echo "<br>";

        echo "City: $city";
        echo "</td>";
        echo "</tr>";
    }
    ?>
</table>
</form>
</div>
</body>
</html>