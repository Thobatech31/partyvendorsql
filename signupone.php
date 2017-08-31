<?php
ob_start();
require('configdb.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Partyvendor</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.css" rel="stylesheet">




<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>



        <link href="datetimepicker/jquery.datetimepicker.css" rel="stylesheet">

           
        






    <link rel="stylesheet" href="css/homepage.css">
    
    <style>
                .view {
           /* background: url("https://mdbootstrap.com/images/regular/city/img%20(6).jpg")no-repeat center center fixed;*/
             background: url("img/activities33.jpg")no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }


        
    </style>

    
    
 
</head>

<body>


    


    
    
    <!--Mask-->
<div class="view hm-black-strong">
    <div class="full-bg-img flex-center">
        <div class="container">
            <div class="row">

               <!--First column-->
                    <div class="col-md-3">
                    </div>
                       
<!--/.First column-->
<!--Second column-->
                        <div class="col-md-6">
                            <!--Form-->         
                                    <!--Body-->
                    
                                 <form action="signupone.php" method="POST">

                                    <div class="card wow fadeInRight">
                                        <div class="card-block">
                                                    <!--Header--><br/><br/>
                                                <div class="text-center">
                                                        <h3><i class="fa fa-user"></i> Signup with:</h3>
                                                        <a href="" class="btn-floating btn-fb btn-small">
                                                                <span class="fa-stack fa-lg" style="color:blue;">
                                                                    <i class="fa fa-circle fa-stack-2x"></i>
                                                                    <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                                                                </span>
                                                        </a>
                                                        <a href="" class="btn-floating btn-tw btn-small">
                                                                <span class="fa-stack fa-lg" style="color:blue;" >
                                                                    <i class="fa fa-circle fa-stack-2x"></i>
                                                                    <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                                                                </span>
                                                        </a>
                                                        <a href="" class="btn-floating btn-gplus btn-small">
                                                                <span class="fa-stack fa-lg" style="color:blue;" >
                                                                    <i class="fa fa-circle fa-stack-2x"></i>
                                                                    <i class="fa fa-linkedin fa-stack-1x fa-inverse"></i>
                                                                </span>
                                                        </a>
                                                        <a href="" class="btn-floating btn-li btn-small">
                                                                <span class="fa-stack fa-lg" style="color:blue;" >
                                                                    <i class="fa fa-circle fa-stack-2x"></i>
                                                                    <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                                                                </span>
                                                        </a>
                                                        <a href="" class="btn-floating btn-git btn-small">
                                                                <span class="fa-stack fa-lg" style="color:blue;" >
                                                                    <i class="fa fa-circle fa-stack-2x"></i>
                                                                    <i class="fa fa-instagram fa-stack-1x fa-inverse"></i>
                                                                </span>
                                                        </a>
                                                        <hr>
                                                        <h3>or:</h3>
                                                </div>
                                                <!--First row-->
                                                <div class="row">
                                                    <!--First column-->
                                                    <div class="col-md-6">
                                                        <div class="md-form form-sm">
                                                            <i class="fa fa-user prefix"></i>
                                                            <input type="text" name="firstname" id="firstname" class="form-control validate" value="<?php echo isset($_POST['firstname'])? $_POST['firstname']: ''; ?>">
                                                            <label for="firstname" data-error="wrong" data-success="right">Your Firstname</label>
                                                        </div>
                                                    </div>

                                                    <!--Second column-->
                                                    <div class="col-md-6">
                                                        <div class="md-form form-sm">
                                                            <i class="fa fa-user prefix"></i>
                                                            <input type="text" name="lastname"  id="lastname" class="form-control validate" value="<?php echo isset($_POST['lastname'])? $_POST['lastname']: ''; ?>">
                                                            <label for="lastname" data-error="wrong" data-success="right">Your Lastname</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--/.First row-->

                                                <!--Second row-->
                                                <div class="row">
                                                    
                                                    <div class="col-md-12">
                                                        <div class="md-form form-sm">
                                                            <i class="fa fa-user prefix"></i>
                                                            <input type="text" name="username" id="username" class="form-control validate" value="<?php echo isset($_POST['username'])? $_POST['username']: ''; ?>">
                                                            <label for="username" data-error="wrong" data-success="right">Your Username</label>
                                                        </div>
                                                    </div>        
                                                </div>
                                                <!--/.Second row-->

                                                <div class="row">
                                                    
                                                    <div class="col-md-12">
                                                        <div class="md-form form-sm">
                                                            <i class="fa fa-envelope prefix"></i>
                                                            <input type="email" name="email" id="email" class="form-control validate" value="<?php echo isset($_POST['email'])? $_POST['email']:''; ?>">
                                                            <label for="email" data-error="wrong" data-success="right">Your Email Address</label>
                                                        </div>
                                                    </div>        
                                                </div>

                                                

                                                <div class="row">
                                                    
                                                    <div class="col-md-12">
                                                        <div class="md-form form-sm">
                                                            <i class="fa fa-phone prefix"></i>
                                                            <input type="text" name="phone_no" maxlength="11" id="phone_no" class="form-control validate" value="<?php echo isset($_POST['phone_no'])? $_POST['phone_no']: ''; ?>">
                                                            <label for="phoneno" data-error="wrong" data-success="right">Your Phone Number</label>
                                                        </div>
                                                    </div>        
                                                </div>


                                                                                           <!--/.First row-->

                                              


                                                 <div class="row">
                                                    
                                                    <div class="col-md-12">
                                                        <div class="md-form form-sm">
                                                            <i class="fa fa-lock prefix"></i>
                                                            <input type="password" name="password" id="password" class="form-control validate" >
                                                            <label for="password" data-error="wrong" data-success="right">Your Password</label>
                                                        </div>
                                                    </div>        
                                                </div>

                                                 <div class="row">
                                                    
                                                    <div class="col-md-12">
                                                        <div class="md-form form-sm">
                                                            <i class="fa fa-lock prefix"></i>
                                                            <input type="password" name="confirm_password" id="password" class="form-control validate" >
                                                            <label for="confirm_password" data-error="wrong" data-success="right">Your Confirm_Password</label>
                                                        </div>
                                                    </div>        
                                                </div>

                                                    <div class="text-center">
                                                        <button class="btn btn-primary btn-small" type="submit" name="register_button" style="width:150px;">Register</button>
                                                       
                                                        <a href="index.php"><button type="button" class="btn btn-primary btn-small" style="width:150px;">Login</button></a>
                                                        <hr>
                                                        <fieldset class="form-group">
                                                            <input type="checkbox" id="checkbox1">
                                                            <label for="checkbox1">Subscribe me to the newsletter</label>
                                                        </fieldset>
                                                    </div>

                                            </div>
                                        </div>
                                                <!--/.Third row-->
                                </form>


      
                            <!--/.Form-->
                     </div>

                        <?php
                        //To check wether the form has been submitted when clicking the register button
                            if(isset($_POST['register_button'])){
                                $firstname=$_POST['firstname'];
                                $lastname=$_POST['lastname'];
                                $username=$_POST['username'];
                                $email=$_POST['email'];
                                $phone_no=$_POST['phone_no'];
                                $password=$_POST['password'];
                                $confirm_password=$_POST['confirm_password'];
                                    $datetime = date("Y-m-d H:i:s");

                            //To check wehteher the all the FORM field is is NOT EMPTY
                                if(!empty($firstname) && !empty($lastname) && !empty($username) && !empty($email) && !empty($phone_no) && !empty($password) &&!empty($confirm_password)){
                                
                                //To check if the type in email format is correct ornoot
                                    if(preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]{0,5}+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/", $_POST['email'])){
                                        
                                    //To check if the two password matches
                                            if($password==$confirm_password){

                                                if(isset($_POST['username'])){
                                                    $query="SELECT * FROM vendorreg WHERE username='$username'";
                                                    $query_run=mysqli_query($mysqli,$query);
                                                        if(mysqli_num_rows($query_run)>0){
                                                            echo "<script type='text/javascript'>alert('Username Already Taken')</script>";

                                                                }else{
                                                                $query="SELECT * FROM vendorreg WHERE phone_no='$phone_no'";
                                                                $query_run=mysqli_query($mysqli,$query);

                                                                    if(mysqli_num_rows($query_run)>0){
                                                                        echo "<script type='text/javascript'>alert('Phone Already Taken')</script>";
                                                                    }else{

                                                                        $query="SELECT * FROM vendorreg WHERE email='$email'";
                                                                        $query_run=mysqli_query($mysqli,$query);

                                                                            if(mysqli_num_rows($query_run)>0){

                                                                                echo "<script type='text/javascript'>alert('Email Already Taken')</script>";

                                                                            } else{

                                                                            $query="INSERT INTO vendorreg (firstname,lastname,username,email,phone_no,password,datetime) VALUES ('$firstname','$lastname','$username','$email','$phone_no','$password','$datetime')";
                                                                            $query_run=mysqli_query($mysqli,$query);

                                                                                if($query_run){

                                                                                    $to=$email;
                                                                                    $subject="Confirmation form partyvendor to $username";
                                                                                    
                                                                                    $message="please click the link below to verify your account";
                                                                                    $message .="http://www.paryvendor.com";
                                                                                    

                                                                                    $sentmail = mail($to, $subject, $message);

                                                                                        if($sentmail){
                                                                                            echo "<script>alert('verification send to your email address')</script>";
                                                                                        }else{
                                                                                            echo "<script>alert('nothing send to your email addres')</script>";
                                                                                        }
                                                                                }else{

                                                                                }
                                                                            }
                                                                    }

                                                                }                                    
                                                }else{
                                                    // text here.........................
                                                    }

                                            }else{
                                                echo "<script type='text/javascript'>alert('Password Does Not Match')</script>";
                                            }
                                    }else{
                                      echo "<script type='text/javascript'>alert('Email not Correct')</script>";  
                                    }

                                }else{
                                    echo "<script type='text/javascript'>alert('All Field Are Required')</script>";
                                }
                            }else{
                                
                            }
                        ?>
<!--/Second column-->

                    
                    <div class="col-md-3">
                    </div>


            </div>
        </div>
    </div>
</div>
<!--/.Mask-->

             
  




  <script type="text/javascript" src="http://code.jquery.com/jquery-2.1.2.min.js"></script>
  <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>
    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/tether.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>

    <script type="text/javascript" src="js/dropdown.js"></script>


    
    

            

          
</body>

</html>
