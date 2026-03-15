<?php
    include 'db.php' ;

    $sql = "select * from students";
    $result = mysqli_query($conn,$sql);
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Student Management System</title>
    </head>

    <body>

    <h2>Student Management System</h2>

    <a href = "add_student.php">Add new student</a>
        <table border = "1" cellpadding = "10">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Department</th>
                <th>Year</th>
                <th>Actions</th>
            </tr>
            <?php
                while($row = mysqli_fetch_assoc($result)){
            ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['phone']; ?></td>
                <td><?php echo $row['department']; ?></td>
                <td><?php echo $row['year']; ?></td>

                <td>
                <a href = "update_student.php?id=<?php echo $row['id']; ?>">Edit</a>
                <a href = "delete_student.php?id=<?php echo $row['id']; ?>">Delete</a>
                </td>
            </tr>

            <?php
                }
            ?>
        </table>
    </body>
</html>

                