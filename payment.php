<?php
$servername = "localhost";
$username = "root";   
$password = "shivamraj";   
$db = "payment";

$conn = new mysqli($servername, $username, $password, $db);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$name=$_GET["name"];
$card=$_GET["number"];
$expiry=$_GET["date"];
$pin=$_GET["pin"];
$amount=$_GET["amount"];

$sql = "INSERT INTO jankari (name, card_no, expiry_dat, pin, amount) VALUES ('$name','$card','$expiry','$pin','$amount')";

if ($conn->query($sql) === TRUE) {
    echo "Congratulations , Your booking is completed:";
    echo "<a href=''><br><br>Print your booking slip..</a>";
        echo "<a href='home.html'><br><br>Home</a>";

}
else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
