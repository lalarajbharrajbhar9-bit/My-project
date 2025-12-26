<?php
$servername = "localhost";
$username = "root";
$password = "shivamraj";
$dbname = "payment";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM jankari";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h1>Details</h1><br>";

    // output data of each row
    while ($row = $result->fetch_assoc()) {

        echo "Name: " . $row["name"] . " , Card Number: " . $row["card_no"] . 
             " , Expiry date: " . $row["expiry_dat"] . " , Pin: " . $row["pin"] . " , Amount: " . $row["amount"] .  "<br>";
    }
}

$conn->close();
?>
