<?php
include_once 'dbh.php';

$user = $_POST["username"];
$first = $_POST["fname"];
$last = $_POST["lname"];
$email = $_POST["email"];
$role =  $_POST["role"];
$phone = $_POST["phone"];
$message;

$sql =  "INSERT INTO contacts (ID, username, first, last, email, Role, phone)
VALUES(0, '$user', '$first', '$last', '$email', '$role', '$phone')";

if ($conn->query($sql) === TRUE) {
  $message = "Welcome to the UWMP";
} else {
  $message = "Error: " . $sql . "<br>" . $conn->error;
}
?>

<html>

<body>

<div><h1><?php print($message)?></h1></div>
<p>
<a href="dbTable.php">View current database</a> or <a href="index.php"> return to main page</a>
</p>
</body>
</html>