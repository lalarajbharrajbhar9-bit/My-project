<?php
$servername = "localhost";
$username = "root";   
$password = "shivamraj";   
$db = "booking";

//create connection
$conn = new mysqli($servername, $username, $password, $db);

//check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$name=$_POST["name"];
$gadi=$_POST["gadi"];
$slot=$_POST["slot"];
$time=$_POST["time"];
// echo "".$veh;
 $sql = "INSERT INTO details ( name, gadi, slot, timing) VALUES ('$name','$gadi','$slot','$time')";
// $sql = "INSERT INTO details values('".$name."','".$vehicle."','".$slot."');";
//  echo "".$sql;
 if ($conn->query($sql) === TRUE) {
    echo " &#127991 Congratulations,Your booking is 50% done . make it 100% Please payment:";
     echo "<a href='payment.html'><br><u>PAYMENT</u></a>";
  }
 else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>