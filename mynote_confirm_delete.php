<?php
$servername = "localhost";
$username = "test";
$password = "test";
$dbname = "my_note";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$index_number = $_GET['number'];

$sql = "DELETE FROM mynote_data WHERE number=$index_number ";

if ($conn->query($sql) === TRUE) {
  //header("Location: index.php");
  header( "refresh: 1; url=index.php" );
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();

?>