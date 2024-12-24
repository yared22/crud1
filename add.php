<?php include("conn2.php");?>
<form action="add.php" method="post">
  <label for="id">ID:</label>
  <input type="text" id="id" name="id"><br><br>
  <label for="name">Name:</label>
  <input type="text" id="name" name="name"><br><br>
  <label for="class">Class:</label>
  <input type="text" id="class" name="class"><br><br>
  <label for="mark">Mark:</label>
  <input type="number" id="mark" name="mark"><br><br>
  <input type="submit" value="Add Student">
</form>
<a href="index.php">Back to Home</a>

<?php
if (isset($_POST['id']) && isset($_POST['name']) && isset($_POST['class']) && isset($_POST['mark'])) {
  $id = $_POST['id'];
  $name = $_POST['name'];
  $class = $_POST['class'];
  $mark = $_POST['mark'];
 $sql = "INSERT INTO students set id='$id', name='$name', class='$class', mark='$mark'";
//   $sql = "INSERT INTO students (id, name, class, mark) VALUES ('$id', '$name', '$class', '$mark')";
if (mysqli_query($connection, $sql)) {
    echo "Student added successfully!";
  } else {
    echo "Error adding student: " . mysqli_error($connection);
  }
}


mysqli_close($connection);
?>