<?php
$servername = "localhost";
$username = "squashapps";
$password = "133196";
$dbname = "squashapps";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$name=$_POST['name'];
$gender=$_POST['gender'];
$country=$_POST['country'];
$state=$_POST['state'];
$phone=$_POST['phone']; 
$country_code=$_POST['country_code']; 

$sql = "INSERT INTO user_data(name,gender,country,state,phone,country_code,) VALUES('$name','$gender','$country','$state','$phone','$country_code')";


if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>