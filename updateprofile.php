<?php

include 'config.php';

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$phone= $_POST['phone'];
$pass = $_POST['pass'];
$email = $_POST['email'];

 // SELECT `cid`, `fname`, `lname`, `email`, `phone`, `pass`, `question`, `answer`, `cno`, `status` FROM `customer` WHERE 1

           $sql = " UPDATE customer SET fname='$fname',lname='$lname', phone='$phone', pass='$pass' WHERE email='$email' ";
           
           $retval_dis = mysqli_query($conn,$sql);
        
          echo '<script> alert("Profile updated Successfully")</script>';
              echo "<script type='text/javascript'> document.location = 'myprofile.php';</script>";
       


$conn->close();

?>