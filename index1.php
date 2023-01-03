<!DOCTYPE html>
<html>
<head>
  <title>Banking ChatBot</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   


        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="icon" type="image/png" href="img/ruet.png">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
        <script src="js/vendor/jquery-1.12.0.min.js"></script>
</head>

<style>

   .chat
   {
   
     position:fixed;
     bottom:0;
     right:0;
     margin-right: 20px;
     max-width:300px;
     z-index:999;
     box-shadow: 4px 4px 4px 4px;
     border: : 2px solid rgb(22,118,134);
   }



     #sc
     {
      background-color: rgb(22,118,134);
      padding:15px;
      color:white;
      font-size: 16px;
      width:300px;
      height: 45px;


     }

     #panel
     {
       
        background-color: white;
        display: none;
        margin:0;
        width:300px;
        height: 300px;

     }

     #div
     {
        padding:10px;
        height: 240px;
        position: relative;
        overflow-y: auto;
        
     }
  
     input[type=text] 
     {
          width: 100%;
          padding: 12px 20px;
          margin: 8px 0;
          box-sizing: border-box;
     }

     .ou
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
      .stt
      {
         margin-top:5px;
        
      }

  

</style>

 <style>
        .navbar-inverse {
            background-color: #fff;
            border-color: #ffffff;
        }
        
        .navbar-inverse .navbar-nav>.active>a,
        .navbar-inverse .navbar-nav>.active>a:focus,
        .navbar-inverse .navbar-nav>.active>a:hover {
            color: #060606;
            background-color: #ffffff;
        }

        .navbar-inverse .navbar-nav>li>a {
            color: #090909;
        }

        .navbar-inverse .navbar-nav>li>a:focus,
        .navbar-inverse .navbar-nav>li>a:hover {
            color: #0c4ad4;
            background-color: transparent;
        }
    </style>


<body>
    
 <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <img src="images/logo.png" style="width: 70px;margin-top: 15px;" />
                <!-- <a class="navbar-brand" href="#">GSY Services</a> -->
            </div>
            <ul class="nav navbar-nav">
                <li class="active"><a href="index.php">
                        <h2>Banking ChatBot </h2>
                    </a></li>

            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="index1.php" style="margin-top: 30px;font-size: 20px;color: #0c4ad4;">Home</a></li>
                <li><a href="myprofile.php" style="margin-top: 30px;font-size: 20px">My Profile</a></li>
                <li><a href="bankaccounts.php" style="margin-top: 30px;font-size: 20px">Bank Accounts</a></li>
                <li><a href="transfer.php" style="margin-top: 30px;font-size: 20px">Trasfer Now</a></li>
                <li><a href="logout.php" style="margin-top: 30px;margin-right: 100px;font-size: 20px;">Logout</a></li>
            </ul>
        </div>
    </nav>    
    


<div class="container">



<div class="row">


<div class="col-md-12">
    
    <img src="images/bg.png" style="width:100%" />
    
    <h2>Welcome to Banking Chat Bot Application</h2>
    <hr/>
    
    A banking bot project is based on artificial algorithms that analyzes user’s queries and understand user’s message. The system design is for banks use, where users are allowed to ask any bank related questions like loan, account, policy etc. This is an android application. The system recognizes user’s query and understands what the user wants to convey and simultaneously answers them appropriately. The format of user’s questions can be different as there is no specific format for users to ask questions. The built in artificial intelligence system recognizes the requirements of the users and provides suitable answers for the same. It makes use a graphical representation of a person speaking while giving answers as a real person would do.
    
</div>    
</div> 
</div> 

<div class="container">



<div class="row">


<div class="col-sm-5">

</div>

<div class="col-sm-7">





<div class="chat">
<a style="text-decoration:none;" href="#"><div id="sc"><center><img style="float:left;" src="img/ruet.png" width="20px" height="20px"/><b>Banking-ChatBot</b></center></div></a>
<div id="panel">
  

<script>

$(document).ready(function(){

    var i=0;
    var st;

    $("#sc").click(function(){

         
          i++;

          $("#panel").slideToggle();

          if(i==1)
          {
              $('#div').html("<div class=\"ou\"> Hello Guest. Welcome To Banking ChatBot</div><br>");

          }
          

           

        });



});



</script>


<script type="text/javascript">
  
  $(document).ready(function(){

     $("#st").click(function(){

           var str=$("#tt").val();
  
           $("#div").html(str);



     });

  });


</script>

<script>
//wait for page load to initialize script
$(document).ready(function(){

 window.alreadySubmit = false;

  $('#tt').keypress(function(f){

     
     if(f.which == 13 && !alreadySubmit) {
        window.alreadySubmit = true;

    //listen for form submission

    $('form').on('submit', function(e){
      //prevent form from submitting and leaving page
      e.preventDefault();

      // AJAX 
      $.ajax({
            type: "POST", //type of submit
            cache: false, //important or else you might get wrong data returned to you
            url: "process1.php", //destination
            datatype: "html", //expected data format from process.php
            data: $('form').serialize(), //target your form's data and serialize for a POST
            success: function(result) { // data is the var which holds the output of your process.php

                // locate the div with #result and fill it with returned data from process.php
               

                $('#div').append("<div class=\"stt\""+result+"</div>");

                $('#tt').val("");

            }
        });
    });
  }
    
       
  
});

   
});

               
</script>

<div id='div' name="output" >
  
  <div id="div1"></div>


</div>
<br>

<!--<script>
"use strict";
function submitForm(oFormElement)
{
  var xhr = new XMLHttpRequest();
  var display=document.getElementById('div');
  xhr.onload = function(){ display.innerHTML=xhr.responseText; }
  xhr.open (oFormElement.method, oFormElement.action, true);
  xhr.send (new FormData (oFormElement));
  return false;
}
</script>-->
<!--<label for="out">Output</label>
<textarea id='div' class="form-control" name="output" rows="10" cols="50"></textarea><br><br>-->

<div class="form-group">
<form action="process.php" id="form" name="f2" method="POST" >

<input type="textarea" id="tt" name="input" placeholder="Type Your Message" style="position:absolute; bottom:0; height:30px; width:100%; height:50px;" required />


</form>


</div>




</div></div>

</div>

</div>

</div>

</body>
</html>
