<?php
$servername1 = "localhost";
$username1 = "squashapps";
$password1 = "133196";
$dbname1 = "squashapps";

// Create connection
$conn = new mysqli($servername1, $username1, $password1, $dbname1);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$logo=$_POST['logo']; 
$email=$_POST['email']; 
$comp_name=$_POST['comp_name']; 
$job_title=$_POST['job_title']; 
$experience=$_POST['experience']; 
$sql1="INSERT INTO comp_data(logo,email,comp_name,job_title,experience) VALUES('$logo','$email','$comp_name','$job_title','$experience')";

if ($conn->query($sql1) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql1 . "<br>" . $conn->error;
}

$conn->close();

?>