<?php

include 'config.php';
$fname = $_GET['fname'];
$lname = $_GET['lname'];
$email = $_GET['email'];
$phone = $_GET['phone'];
$pass = $_GET['pass'];
$add = $_GET['add'];
$qus = $_GET['qus'];
$ans = $_GET['ans'];



//SELECT `id`, `fname`, `lname`, `phone`, `email`, `pass`, `address`, `qus`, `ans`, `status`, `cardno`, `mon`, `year`, `cvv` FROM `user` WHERE 1

$con=mysqli_connect($hostname, $username, $password,$dbname);
mysqli_query ($con,"set character_set_results='utf8'");
$query_json = "SELECT * from customer where email='$email'";
            $result = mysqli_query($con,$query_json);
            $row = mysqli_fetch_array($result);
            if(!$row)
            {
    
$query_dis="INSERT INTO customer (fname,lname, email,phone, pass,address,qus,ans)
VALUES ('$fname', '$lname', '$email', '$phone','$pass','$add','$qus','$ans')";
//echo $query_dis; 

$retval_dis = mysqli_query($con,$query_dis);

mysqli_close($con);
 echo '<script> alert("Customer Registerd Successfully")</script>';
      echo "<script type='text/javascript'> document.location = 'signin.html';</script>";
}else{
      echo '<script> alert("Customer exists please try again")</script>';
      echo "<script type='text/javascript'> document.location = 'singup.html';</script>";
}
?>
