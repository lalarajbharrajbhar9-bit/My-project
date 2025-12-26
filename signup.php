 <?php
// Database connection
$servername = "localhost";
$username = "root";   // default for XAMPP
$password = "shivamraj";       // leave empty unless you set one
$dbname = "smart_parking";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Get data from form
$user = $_POST['username'];
$email = $_POST['email'];
// $pass = password_hash($_POST['password'], PASSWORD_DEFAULT); // encrypt password
// $hashedPassword = $password;
$pass = $_POST['password'];

// Insert into database
$sql = "INSERT INTO users (username, email, password) VALUES ('$user', '$email', '$pass')";

if ($conn->query($sql) === TRUE) {
 
  header("Location:home.html");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
