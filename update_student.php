<?php
    include 'db.php';

    $id = $_GET['id'];

    $result = mysqli_query($conn,"select * from students where id = $id");
    $row = mysqli_fetch_assoc($result);

    if(isset($_POST['update'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $department = $_POST['department'];
        $year = $_POST['year'];

        $sql = "update students 
                set name = '$name',
                email = '$email',
                phone = '$phone',
                department = '$department',
                year = '$year'
                where id = $id";

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
        <head><title>Update student</title></head>
        <body>
            <form method = "post">
                Name: <input type = "text" name = "name" value = "<?php echo $row['name']; ?>"><br><br>

                Email: <input type = "email" name = "email" value = "<?php echo $row['email']; ?>"><br><br>

                Phone: <input type = "phone" name = "phone" value = "<?php echo $row['phone']; ?>"><br><br>

                Department: <input type = "text" name = "department" value = "<?php echo $row['department']; ?>"><br><br>

                Year: <input type = "number" name = "year" value = "<?php echo $row['year']; ?>"><br><br>

                <button name = "update">Update Student</button>

            </form>
    </body>
</html>