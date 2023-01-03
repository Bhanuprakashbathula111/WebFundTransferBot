<?php
session_start();
include 'config.php';

$fromemail=$_SESSION["email"];
$fromacno = $_GET['fromacno'];
$toemail = $_GET['toemail'];
$toacno = $_GET['toacno'];
$amount = $_GET['amount'];

$d=date('d/m/y');


$con=mysqli_connect($hostname, $username, $password,$dbname);
mysqli_query ($con,"set character_set_results='utf8'");


$query_json = "SELECT * from bank where acno='$toacno' and email='$toemail'";
            $result = mysqli_query($con,$query_json);
            $row = mysqli_fetch_array($result);
            if(!$row)
            {
  echo '<script> alert("Customer Account and Email Does not Exists please try again")</script>';
      echo "<script type='text/javascript'> document.location = 'transfer.php';</script>";
      
      
      
      
}else{
    
    
$sql123 = "SELECT * FROM bank where acno='$fromacno'  ";
$result123 = $conn->query($sql123);

if ($result123->num_rows > 0) {
  // output data of each row
  while($row = $result123->fetch_assoc()) {
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

//  echo $_SESSION["fromacno"];
//      echo $_SESSION["frombal"];
//  echo $_SESSION["toacno"];
//      echo $_SESSION["tpbal"];
     
//      echo $_SESSION["email"];
     
     $reducebalance= $_SESSION["frombal"]-$amount;
   
   
   $sql3 = " UPDATE bank SET balance='$reducebalance'  WHERE email='$fromemail' and acno='$fromacno' ";
           
           $retval_dis12 = mysqli_query($conn,$sql3); 
           
           
           $addbalance= $_SESSION["tpbal"]+$amount;
   
   
   $sql4 = " UPDATE bank SET balance='$addbalance'  WHERE email='$toemail' and acno='$toacno' ";
           
           $retval_dis222 = mysqli_query($conn,$sql4); 
     
    
    
//SELECT `tid`, `fromemail`, `fromacno`, `toemail`, `toacno`, `amount`, `dat` FROM `transfer` WHERE 1       
$query_dis="INSERT INTO transfer (fromemail,fromacno, toemail,toacno, amount,dat)
VALUES ('$fromemail', '$fromacno', '$toemail', '$toacno','$amount','$d')";
//echo $query_dis; 

$retval_dis = mysqli_query($con,$query_dis);

mysqli_close($con);
 echo '<script> alert("Amount Transfered Successfully")</script>';
      echo "<script type='text/javascript'> document.location = 'index1.php';</script>";
    
     
      
}
?>
