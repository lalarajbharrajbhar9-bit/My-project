<?php
$servername = "localhost";
$username = "root";   
$password = "shivamraj";   
$db = "contact";

//create connection
$conn = new mysqli($servername, $username, $password, $db);

//check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$name=$_POST['name'];
$email=$_POST['email'];
$msg=$_POST['message'];

 $sql = "INSERT INTO messages (name, email, message) VALUES ('$name', '$email', '$msg')";
 if ($conn->query($sql) === TRUE) {
    echo "Message Ment Successfully.";
 }
 else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>






