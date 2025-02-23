<?php include("conn2.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Student</title>
</head>
<body>
    <h1>Edit Student</h1>
    <?php
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $query = "SELECT * FROM students WHERE ID = $id";
        $result = mysqli_query($connection, $query);
        
        if (!$result) {
            die("Query failed: " . mysqli_error($connection));
        }
        
        $student = mysqli_fetch_assoc($result);
    ?>
    <form action="update.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $student['ID']; ?>">
        <label for="name">Name:</label>
        <input type="text" name="name" value="<?php echo $student['NAME']; ?>" required>
        <br>
        <label for="class">Class:</label>
        <input type="text" name="class" value="<?php echo $student['CLASS']; ?>" required>
        <br>
        <label for="mark">Mark:</label>
        <input type="number" name="mark" value="<?php echo $student['MARK']; ?>" required>
        <br>
        <input type="submit" value="Update">
    </form>
    <?php
    } else {
        echo "No student ID provided.";
    }
    ?>
    <a href="index.php">Back to Home</a>
</body>
</html>
