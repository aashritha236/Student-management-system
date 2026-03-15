<?php
    include 'db.php' ;

    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $department = $_POST['department'];
        $year = $_POST['year'];

        $sql = "insert into students (name, email, phone, department, year) values ('$name','$email','$phone','$department','$year')";

        if(mysqli_query($conn,$sql)){
            header("Location: index.php");
        }
        else{
            echo "Error: ".mysqli_error($conn);
        }
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Add Student</title>
    </head>
    <body>
    <form method = "post">
        Name:<br>
        <input type = "text" name = "name" required><br><br>
        
        Email:<br>
        <input type = "text" name = "email" required><br><br>

        Phone:<br>
        <input type = "text" name = "phone" required ><br><br>

        Department:<br>
        <input type = "text" name = "department" required><br><br>

        Year:<br>
        <input type = "number" name = "year" required>

        <button type = "submit" name ="submit">Add student</button>

</form>
<br>

<a href= "index.php">Back to Student List</a>

</body>
</html>
