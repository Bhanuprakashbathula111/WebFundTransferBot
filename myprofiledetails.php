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
             <div class="col-md-4"></div>
            <div class="col-md-4">
                 <h2 style="text-align: center;">My Profile</h2>
                
             <?php
                           session_start();
                           include 'config.php';
                                
                                
                                $email=$_SESSION["email"];
                                $sql = "SELECT * FROM customer where email='$email'";
                                $result = mysqli_query($conn, $sql);
                                
                                if (mysqli_num_rows($result) > 0) {
                                  // output data of each row
                                  while($row = mysqli_fetch_assoc($result)) {
                                      
                                      
                                    echo "
                    
                                                <form method='POST' action='updateprofile.php'>
                                                
                                                 <div class='form-group'>
                                                        <label>Customer Id</label>
                
                                                <input type='text' class='form-control' name='id' value='" . $row["cid"] . "' hidden readonly>
                   </div>
                
                                                    <div class='form-group'>
                                                        <label>First Name</label>
                                                        <input type='text' class='form-control' name='fname' value='" . $row["fname"] . "' required>
                                                      
                                                    </div>
                                                    
                                                    <div class='form-group'>
                                                        <label>Last Name</label>
                                                        <input type='text' class='form-control' name='lname' value='" . $row["lname"] . "' required>
                                                      
                                                    </div>

                                                     <div class='form-group'>
                                                        <label>Email</label>
                                                        <input type='text' class='form-control' name='email' value='" . $row["email"] . "' required readonly>
                                                      
                                                    </div>
                                                 
                                                     <div class='form-group'>
                                                        <label>Phone</label>
                                                        <input type='text' class='form-control' name='phone' value='" . $row["phone"] . "' required>
                                                      
                                                    </div>
                                                       
                                                    
                                                   
                                                     <div class='form-group'>
                                                        <label>Password</label>
                                                        <input type='password' class='form-control' name='pass' value='" . $row["pass"] . "' required>
                                                      
                                                    </div>
                                                   
                                                    <button class='btn btn-primary form-control'>Update </button>
                                                </form>
                    
                    
                                    
                                    ";
                                  }
                                } else {
                                  echo "Something went wrong";
                                }
                                
                                mysqli_close($conn);
                            
                           
                           ?>
                           
                    
            </div>
            <div class="col-md-4"></div>
            
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