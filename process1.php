<?php
  session_start();
require_once("config.php");



$msgg=$_POST['input'];

$msg=strtolower($msgg);

$length=strlen($msg);

$flag=0;
$email=$_SESSION["email"];

$sql="SELECT * FROM bank WHERE email LIKE '$email%' ";
$send=mysqli_query($conn,$sql);



?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>

<style>

.in
{
	 background-color:rgb(64,128,255);
	 color:white;
   padding:10px; 
	 right:0;
	 width:130px;
	 text-align: center;
	 height:auto;
	 border-radius: 5px;
	 margin-left: 120px;
	 margin-bottom: 5px;
	
}

.out
{
    background-color:rgb(241,240,240);
    color:black;
    padding:10px; 
    left:5; 
    width:130px;
    text-align: center;
	  height:auto;
	  border-radius: 15px;
	
}






</style>


<body>


     <div class="in">
     
     <?php echo "$msgg"; ?>

     </div><br>

    <div class="out">


     
     <?php


       function make_links_clickable($text){
                  return preg_replace('!(((f|ht)tp(s)?://)[-a-zA-Zа-яА-Я()0-9@:%_+.~#?&;//=]+)!i', '<br><a href="$1" target="_blank">Click Here</a><br>', $text);
        }


   

        while($row=mysqli_fetch_array($send))
        {
   
   //SELECT `bid`, `name`, `acno`, `ifsc`, `balance`, `email` FROM `bank` WHERE 1
   
          $flag=1;
          $acno=$row['acno'];
          $ifsc=$row['ifsc'];
            $name=$row['name'];
          $balance=$row['balance'];
   

          $result = make_links_clickable($acno);


          if(!empty($title))
          {
                 
              echo "<div style=\"margin-top:10px; margin-bottom:5px;background-color:blue;color:white;\"><b>$title</b></div>";

          }

         
         
         if($msg == "balance")
          {
                 
               echo "<div style=\"margin-top:10px; margin-bottom:5px;background-color:blue;color:white;\"><b>Your balance is : $balance</b></div>";

          }
          
          
           if($msg == "account")
          {
                 
               echo "<div style=\"margin-top:10px; margin-bottom:5px;background-color:blue;color:white;\"><b>Your Account Number  is : $acno</b></div>";

          }

          
         if($msg == "ifsc")
          {
                 
               echo "<div style=\"margin-top:10px; margin-bottom:5px;background-color:blue;color:white;\"><b>Your IFSC Code  is : $ifsc</b></div>";

          }
          
          if($msg == "bankname")
          {
                 
               echo "<div style=\"margin-top:10px; margin-bottom:5px;background-color:blue;color:white;\"><b>Your Bank  is : $name</b></div>";

          }

        //  echo "$result";

         }
         
        //   if($msg !="balance" || $msg !="account" || $msg !="ifsc")
        // {

        // 	 $output="Sorry I have no knowledge of ".$msgg." yet. Type only one keyword without space instead of full sentence. For Emergency Help Call: 01757687942 Or http://ruet.ac.bd";
        // 	 $result = make_links_clickable($name);
        // 	 echo "$result";
          	 
        // }
         

        if($flag==0)
        {

        	 $output="Sorry I have no knowledge of ".$msgg." yet. Type only one keyword without space instead of full sentence. For Emergency Help Call: 01757687942 Or http://ruet.ac.bd";
        	 $result = make_links_clickable($name);
        	 echo "$result";
          	 
        }
         
          


     ?>

  

     </div><br>

</body>
</html>
