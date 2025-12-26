<?php
$servername = "localhost";
$username = "root";
$password = "shivamraj";
$dbname = "smart_parking";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

        echo "<h1>Details</h1><br>";

    while ($row = $result->fetch_assoc()) {
        echo "Username: " . $row["username"] .
             " - Email: " . $row["email"] .
             " - Password: " . $row["password"] .
             "<br>";
    }
}

$conn->close();
?>
