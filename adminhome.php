<!DOCTYPE html>
<html lang="en">

<head>
    <title>Banking ChatBot</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
</head>

<body>

   <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <img src="images/logo.png" style="width: 70px;margin-top: 15px;" />
             
            </div>
            <ul class="nav navbar-nav">
                <li class="active"><a href="adminhome.php">
                        <h2>Banking ChatBot </h2>
                    </a></li>

            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="adminhome.php" style="margin-top: 30px;font-size: 20px;">Home</a></li>
                

                <li><a href="logout.php" style="margin-top: 30px;margin-right: 100px;font-size: 20px;">Logout</a></li>
            </ul>
        </div>
    </nav>   

    <div class="container">
        <div class="row">
            
            <div class="col-md-12">
                 <h2 style="text-align: center;">My Bank Details</h2>
                <hr/>
                
                <button class="btn btn-success"><a href="addbankaccount.html" style="color:white">Add Bank Account</a></button>
                <br/>
                 <br/>
                <table class="table table-bordered table-striped">
                           <tr>
                               <th>#Id</th>
                               <th>Email</th>
                               <th>Bank Name</th>
                               <th>Account Number</th>
                               <th>IFSC</th>
                                <th>Balance</th>
                               
                           </tr>
                           
                           <?php
                           session_start();
                           include 'config.php';
                                
                                //SELECT `bid`, `name`, `acno`, `ifsc`, `balance`, `email` FROM `bank` WHERE 1
                                
                                $email=$_SESSION["email"];
                                $sql = "SELECT * FROM bank";
                                $result = mysqli_query($conn, $sql);
                                
                                if (mysqli_num_rows($result) > 0) {
                                  // output data of each row
                                  while($row = mysqli_fetch_assoc($result)) {
                                      
                                      
                                    echo "<tr><td> " . $row["bid"]. " </td><td> " . $row["email"]. " </td><td> " . $row["name"]. " </td><td> " . $row["acno"]. " </td> <td> " . $row["ifsc"]. " </td><td> " . $row["balance"]. "</td>
                                    
                                    </tr>
                                    
                                    
                                    ";
                                  }
                                } else {
                                  echo " <br/> Donnot found any bank account please add";
                                }
                                
                                mysqli_close($conn);
                            
                           
                           ?>
                           
                           
                           
                           
                       </table>
            </div>
            
            
        </div>
    </div>



    <div class="container">
        <div class="row">
            <div class="col-md-12">
                 
        
        <hr/>
            </div>
        </div>
        </div>
        
        
        <div class="row">
            <div class="col-md-4" style="text-align: center;">
<ul style="list-style: none;float: center;">
                    <li style="list-style: none;center: left;padding: 10px;"><a href="#"
                            style="margin-top: 30px;font-size: 20px;"><u>Terms</u></a></li>
                 

                </ul>
            </div>

            <div class="col-md-4" style="text-align: center;">
                <ul style="list-style: none;float: center;">
                 
                    <li style="list-style: none;float: center;padding: 10px;"><a href="#"
                            style="margin-top: 30px;font-size: 20px;"><u>Privacy Policy</u></a></li>
                 

                </ul>
            </div>

            <div class="col-md-4" style="text-align: center;">
<ul style="list-style: none;float: center;">
              
                    <li style="list-style: none;float: center;padding: 10px;"><a href="#"
                            style="margin-top: 30px;font-size: 20px;"><u>Contact Us</u></a></li>

                </ul>
            </div>

        </div>
        <div class="row">
            <div class="col-md-4">

            </div>
            <div class="col-md-4" style="text-align: center;font-size: 14px;">
                Banking Street<br />
                <span class="glyphicon glyphicon-phone"> Call us @ 0866-123-123</span>
                <br />

                Copy Right Bankingchatbot Pvt LTD
<span class="glyphicon glyphicon-envelope"> bankingchatbot@gmail.com</span>
                <br />

            </div>
            <div class="col-md-4">

            </div>
        </div>

    </div>
</body>

</html>