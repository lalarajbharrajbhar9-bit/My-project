<?php
$servername = "localhost";
$username = "root";
$password = "shivamraj";
$dbname = "contact";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM messages";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

        echo "<h1>Details</h1><br>";


    while ($row = $result->fetch_assoc()) {

        echo "Name: " . $row["name"] .
             " - Email: " . $row["email"] .
             " - Message: " . $row["message"] . "<br>";
    }
}

$conn->close();
?>
