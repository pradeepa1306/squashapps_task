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


$sql_new="INSERT INTO comp_data(logo,email,comp_name,job_title,experience) VALUES('$logo','$email','$comp_name','$job_title','$experience')";

if ($conn->query($sql_new) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql_new . "<br>" . $conn->error;
}

$conn->close();
?>