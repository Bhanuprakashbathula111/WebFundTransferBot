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
                <!-- <a class="navbar-brand" href="#">GSY Services</a> -->
            </div>
            <ul class="nav navbar-nav">
                <li class="active"><a href="index.php">
                        <h2>Banking ChatBot </h2>
                    </a></li>

            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="index1.php" style="margin-top: 30px;font-size: 20px;">Home</a></li>
                <li><a href="myprofile.php" style="margin-top: 30px;font-size: 20px;color: #0c4ad4">My Profile</a></li>
                <li><a href="bankaccounts.php" style="margin-top: 30px;font-size: 20px">Bank Accounts</a></li>

                <li><a href="logout.php" style="margin-top: 30px;margin-right: 100px;font-size: 20px;">Logout</a></li>
            </ul>
        </div>
    </nav>   
    <div class="container">
        <div class="row">

            <div class="col-md-4" ></div>

            <div class="col-md-4" >

                <h2 style="text-align: center;margin-top: 10px;">Fund Transfer</h2>
                <form method="GET" action="send.php" enctype="multipart/form-data">   
                
                   <div class="form-group row">
                       
                       
                        <div class="col-xs-12">
                           
                          <label>From</label>
                           <?php
                            session_start();
                           include 'config.php';
                           //SELECT `class_id`, `class_name` FROM `class` WHERE 1
                           $email=$_SESSION["email"];
                      
                            $member_result = $conn->query('select * from bank');
                            ?><select name="fromacno" id="fromacno" class="form-control">
                            <option value="">Select Bank</option>
                            	<?php
                            	if ($member_result->num_rows > 0) {
                            		// output data of each row
                            		while($row = $member_result->fetch_assoc()) {
                            		?>
                            			<option value="<?php echo $row["acno"]; ?>"><?php echo $row["acno"]; ?></option>
                            			<?php
                            		}
                            	}
                            	?>
                            </select>
                       </div>
                       
                         <div class="col-xs-12">
                          <label style="text-align: left;">Recipient Email</label>
                           <input class="form-control" id="toemail" name="toemail" type="text" placeholder="Enter  Account Number" required>
                       </div>

                         <div class="col-xs-12">
                          <label style="text-align: left;">Recipient Account Number</label>
                           <input class="form-control" id="toacno" name="toacno" type="text" placeholder="Enter  Account Number" required>
                       </div>


                       <div class="col-xs-12">
                          <label style="text-align: left;">Amount</label>
                           <input class="form-control" id="amount" name="amount" type="number" placeholder="Enter transfer Amount" required>
                       </div>
                       
                        
                        
                      
                   </div>

                  
                        
                        <div class="form-group row">

                       <div class="col-xs-12">
                        <button class="btn btn-info" style="text-align:center">Save</button>
                       </div>
                        </div>

            
              

             </form>
           
            </div>


            <div class="col-md-2" ></div>

        </div>
    </div>



    <div class="container-fluid">

        <hr/>
       
        <div class="row">

            <div class="col-md-12">
                <hr />
                <p style="text-align: center;">Copy Rights All rights Reserved
                    <h3 style="text-align: center;">Banking ChatBot Team</h3>
                </p>
                
            </div>
        </div>

</body>

</html>