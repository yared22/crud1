<?php include("conn2.php"); ?>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $class = $_POST['class'];
    $mark = $_POST['mark'];

    $query = "UPDATE students SET NAME='$name', CLASS='$class', MARK='$mark' WHERE ID=$id";
    $result = mysqli_query($connection, $query);

    if ($result) {
        header("Location: index.php");
        exit();
    } else {
        die("Update failed: " . mysqli_error($connection));
    }
}
?>
