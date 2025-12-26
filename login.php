<?php
// Database connection
$servername = "localhost";
$username = "root";     // same as signup.php
$password = "shivamraj"; // your MySQL password
$dbname = "smart_parking";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Get data from login form
$user = $_POST['username'];
$pass = $_POST['password'];

// Check if user exists
$sql = "SELECT * FROM users WHERE username = '$user'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  $row = $result->fetch_assoc();
  
  // Since you are storing plain passwords (not hashed), we compare directly
  if ($pass === $row['password']) {
    header("Location: home.html");
    exit();
  } else {
    // Incorrect password
    echo "<script>
            alert('Incorrect Password!');
            window.location.href='index.html';
          </script>";
  }
} else {
  // User not found
  echo "<script>
          alert('User not found! Please sign up first.');
          window.location.href='signup.html';
        </script>";
}

$conn->close();
?>
