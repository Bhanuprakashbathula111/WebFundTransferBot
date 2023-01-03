<?php
session_start();
include 'config.php';
$name = $_GET['name'];
$acno = $_GET['acno'];
$ifsc = $_GET['ifsc'];
$bal = $_GET['bal'];


 $email=$_GET["email"];



//SELECT `bid`, `name`, `acno`, `ifsc`, `balance`, `email` FROM `bank` WHERE 1

$con=mysqli_connect($hostname, $username, $password,$dbname);
mysqli_query ($con,"set character_set_results='utf8'");
$query_json = "SELECT * from bank where email='$email' and acno='$acno'";
            $result = mysqli_query($con,$query_json);
            $row = mysqli_fetch_array($result);
            if(!$row)
            {
    
$query_dis="INSERT INTO bank (name,acno,email,ifsc,balance)
VALUES ('$name', '$acno', '$email', '$ifsc','$bal')";
//echo $query_dis; 

$retval_dis = mysqli_query($con,$query_dis);

mysqli_close($con);
 echo '<script> alert("Account Added Successfully")</script>';
      echo "<script type='text/javascript'> document.location = 'adminhome.php';</script>";
}else{
      echo '<script> alert("Bank Account exists please add Different one again")</script>';
      echo "<script type='text/javascript'> document.location = 'addbankaccount.html';</script>";
}
?>
