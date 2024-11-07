<?php
$servername = "localhost:3306";
$username = "root";
$password = "";
$dbname = "contribute";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn)
  die("Connection failed: " . mysqli_connect_error());

$title = $_POST['title'];
$details = $_POST['details'];
$reference = $_POST['reference'];
$link = $_POST['link'];


$sql = "INSERT INTO card (title, details, reference, link) 
VALUES ('$title', '$details', '$reference', '$link')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
  header("Location: Dashboard1.php");
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>