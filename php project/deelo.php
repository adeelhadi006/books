<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
 
  $name = $_POST['name'];
  $age = $_POST['age'];
  $contact=$_POST['contact'];
  $email=$_POST['email'];
  $gender = $_POST['gender'];
  $detail=$_POST['detail'];
}



$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password);



// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
 
  //  echo "<br>Connection are successful";



$name=$_POST['name'] ; 
$age=  $_POST['age'];
$contact=$_POST['contact'];
$email=$_POST['email'];
$gender=$_POST['gender'];

$detail=$_POST['detail'];


//  $sql= "INSERT INTO `phpdatabase`.`phpdatabasetrip` ( `name`, `age`, `contact`, `email`, `gender`, `detail`) VALUES ('$name', '$age', '$contact', '$email', '$gender', '$detail')";
$sql="INSERT INTO `phpdatabase`.`phpdatabasetrip` (`name`, `age`, `contact`, `email`, `gender`, `detail`) VALUES ('$name', '$age', '$contact', '$email', '$gender', '$detail')";
 
echo $sql;
 if($conn->query($sql)==true)
 {
   echo " Infomation Successfully Added";
   

 }
 else{
   echo "ERROR: $sql<br> $conn->error";

 }
 $conn->close();

?>