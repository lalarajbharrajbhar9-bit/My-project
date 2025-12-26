 <?php
// Database connection
$servername = "localhost";
$username   = "root";
$password   = "shivamraj";
$dbname     = "admin";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Get password from form
$pass = $_POST['password'];

// Fetch admin password
$sql = "SELECT password FROM admin LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    $row = $result->fetch_assoc();

     if ($pass === $row['password']) {

         header("Location: admin_home.html");
        exit();

    } else {

         echo "Login Failed: Incorrect Password!";
    }

} else {
    echo "Error: Admin password not found in database.";
}

$conn->close();
?>
