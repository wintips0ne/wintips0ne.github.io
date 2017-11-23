<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "wintips";

// Create connection
$connect = new mysqli($servername, $username, $password, $dbname);
if (!empty($_POST)) {
  $output='';
  $email=mysqli_real_escape_string($connect,$_POST['email']);
  $phone=mysqli_real_escape_string($connect,$_POST['phone']);
  $password=mysqli_real_escape_string($connect,$_POST['password']);
   $password=sha1($password);
  $query="INSERT INTO users(email,phone,password) VALUES ('$email','$phone','$password')";
if(mysqli_query($connect,$query)){
  echo "<div class='alert alert-success'><i>successfully registered</i></div>";
}
}

?>