<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "wintips";

// Create connection
$connect = new mysqli($servername, $username, $password, $dbname);
if(!empty($_POST)){
    //$phone=mysqli_real_escape_string($connect,$_POST['phone']);
  //$password=mysqli_real_escape_string($connect,$_POST['password']);
    //$query="SELECT * FROM users WHERE phone='$phone' AND password='$password'";
    $query="SELECT * FROM user WHERE phone='".$_POST['phone']."' AND password='".$_POST['password']. "' ";
    $result=mysqli_query($connect,$query);
    if(mysqli_num_rows($result)>0){
        //$_SESSION['phone']=$phone;
        echo"login successful";
        //header("location:index.php");
    }else{
        echo"wrong credentials";
    }
}
?>