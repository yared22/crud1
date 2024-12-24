<?php
include("conn2.php");
if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];
    $sql = "DELETE FROM students WHERE id=$id";
    $result = mysqli_query($connection, $sql);
    if($result){
        header('Location:index.php');
    }else{
        die(mysqli_error($connection));
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Delete Student</title>
</head>
<body>
    <h1>Delete Student Record</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
        <label for="deleteid">Enter Student ID:</label>
        <input type="text" id="deleteid" name="deleteid">
        <input type="submit" value="Delete">
    </form>
    <a href="index.php">Back to Home</a>
</body>
</html>