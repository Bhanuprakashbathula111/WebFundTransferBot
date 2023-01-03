<?php
session_start();

include 'config.php';

$uname = $_POST['email'];
$pass = $_POST['pass'];



$sql = "SELECT email,pass FROM customer where email='$uname' and pass='$pass'  ";
$result = $conn->query($sql);

$_SESSION["email"] = $uname;
if ($result->num_rows > 0) {


  header('Location:index1.php');
} else {

 echo '<script> alert("Invalid Details Or blocked by Admin Please try Again!")</script>';
      echo "<script type='text/javascript'> document.location = 'signin.html';</script>";
}
$conn->close();

?>