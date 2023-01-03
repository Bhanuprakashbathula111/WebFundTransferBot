<?php
session_start();

include 'config.php';

$fromemail=$_SESSION["email"];
$fromacno = $_GET['fromacno'];
$toemail = $_GET['toemail'];
$toacno = $_GET['toacno'];
$amount = $_GET['amount'];



$sql = "SELECT * FROM bank where acno='$fromacno'  ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
      $_SESSION["fromacno"]=$row["acno"];
      $_SESSION["frombal"]=$row["balance"];
   
  }
} else {
  echo "0 results";
}


$sql1 = "SELECT * FROM bank where acno='$toacno'  ";
$result1 = $conn->query($sql1);

if ($result1->num_rows > 0) {
  // output data of each row
  while($row = $result1->fetch_assoc()) {
      $_SESSION["toacno"]=$row["acno"];
      $_SESSION["tpbal"]=$row["balance"];
   
  }
} else {
  echo "0 results";
}

 echo $_SESSION["fromacno"];
     echo $_SESSION["frombal"];
 echo $_SESSION["toacno"];
     echo $_SESSION["tpbal"];
     
     echo $_SESSION["email"];
     
     $reducebalance= $_SESSION["frombal"]-$amount;
   
   
   $sql3 = " UPDATE bank SET balance='$reducebalance'  WHERE email='$fromemail' and acno='$fromacno' ";
           
           $retval_dis12 = mysqli_query($conn,$sql3); 
           
           
           $addbalance= $_SESSION["tpbal"]+$amount;
   
   
   $sql4 = " UPDATE bank SET balance='$addbalance'  WHERE email='$toemail' and acno='$toacno' ";
           
           $retval_dis222 = mysqli_query($conn,$sql4); 
     
     
     
?>