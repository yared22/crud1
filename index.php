<?php include("conn2.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
</head>
<body>
    <h1>hello from home</h1>
    <button class="btn" name="add"><a href="add.php">ADD STUDENTS</a></button>
    <button class="btn" name="delet "><a href="delete.php">DELETE STUDENTS</a></button>
    <button class="btn" name="edit"><a href="edit.php">EDIT</a></button>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>NAME</th>
                <th>CLASS</th>
                <th>MARK</th>
            </tr>

        </thead>
        <tbody>
            <?php
            $query = "SELECT * FROM students";
            $result = mysqli_query($connection,$query);
            
            if(!$result){
                die("Query failed".mysqli_error());
            }
             else{
            while($row = mysqli_fetch_assoc($result)){

?>
       
                <tr>
                    <td><?php echo $row['ID'];?></td>
                    <td><?php echo $row['NAME'];?></td>
                    <td><?php echo $row['CLASS'];?></td>
                    <td><?php echo $row['MARK'];?></td>
                </tr>
                <?php
            }
        }
            ?>
            
</tbody>
</table>
</body>
</html>
