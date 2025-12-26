<?php
$servername = "localhost";
$username = "root";
$password = "shivamraj";
$dbname = "booking";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM details";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h1>Details</h1><br>";

    // output data of each row
    while ($row = $result->fetch_assoc()) {

        echo "Name: " . $row["name"] . " , vehicle Number: " . $row["gadi"] . 
             " , Slot: " . $row["slot"] . " , Timing: " . $row["timing"] . "<br>";
    }
}

$conn->close();
?>
