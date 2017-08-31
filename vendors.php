<?php
    ob_start();
    session_start();
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
    <link rel="stylesheet" href="css/homepage.css">
  
        <link href="datetimepicker/jquery.datetimepicker.css" rel="stylesheet">

    <style>

        .view {
           /* background: url("https://mdbootstrap.com/images/regular/city/img%20(6).jpg")no-repeat center center fixed;*/
             background: url("img/tent2.jpg")no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
            height: 70%;
        }
    </style>

</head>

<body>


<!-- Navbar -->
<nav class="navbar navbar-toggleable-md navbar-dark scrolling-navbar fixed-top">
    <div class="container">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav1" aria-controls="navbarNav1" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#">
            <h2>PARTYVENDOR</h2>
        </a>
        <div class="collapse navbar-collapse" id="navbarNav1">
            <!--Links-->
            <ul class="navbar-nav mr-auto">

                <li class="nav-item">
                        <a class="nav-link" href="#best-features"><b style="font-size: 16px;">Event</b></a>
                </li>

                <li class="nav-item">
                        <a class="nav-link" href="#best-features"><b style="font-size: 16px;">Vendors</b></a>
                </li>

                <li class="nav-item">
                        <a class="nav-link" href="#"><b style="font-size: 16px;">Price</b></a>
                </li>

                
                <li class="nav-item">
                  <a class="nav-link"><h2 style="font-size: 20px;">Welcome: <?php echo $_SESSION['username']?></h2></a>

                            

                            <?php
                                    if(isset($_POST['logout'])){
                                        session_destroy();
                                        header("location:index.php");
                                }
                            ?>  
                </li>

                 <li>
                    <form action="vendors.php" method="POST" role="form">    
                        <button type="submit" name="logout" value="btn_value" class="btn btn-primary">Logout</button>
                    </form>
                </li>
                 
            </ul>
        </div>
    </div>
</nav>     

    
    
    <!--Mask-->
<div class="view hm-black-strong">
    <div class="full-bg-img flex-center">
        <div class="container">
            <div class="row" id="home">

               <!--First column-->
                      
<!--/.First column-->


<!--Second column-->


                          <div class="col-lg-12">
                            <div class="description">
                                <h2 class="h2-responsive wow fadeInLeft">Partyrentals </h2>
                                <hr class="hr-dark">
                                <p class="wow fadeInLeft" data-wow-delay="0.4s">..................................................................................................................................................</p>
                                <br>
                            
                            </div>
                        </div>
<!--/Second column-->

            </div>
        </div>
    </div>
</div>
<!--/.Mask-->

            
        <div class="container">                    
            <div class="row" >
                <div class="col-md-12 col-sm-12 col-xs-12">    
                    <form class="form-inline" role="form">
                            <div class="form"> 
                                   <label for="Country" class="col-md-3 col-sm-3 col-xs-3  control-label"></label><br/>
                                        <p style="text-align:center">Select Vendor</p>
                                         <select class="form-control" id="selecting" style="width:250px;" > 
                                            <option>Choose Photographer</option> 
                                            <option>Photographer</option>
                                            <option>Vediographer</option>
                                            <option>Caterers</option>
                                            <option>Decorators</option>
                                            <option>Musical + Bands</option>
                                            <option>Rental + Photobooth</option>
                                            <option>Wedding MC</option>
                                            <option>Jewellery + Accessories</option>
                                            <option>TReception Venue</option>
                                            <option>Service + Security</option>
                                            <option>Invitation + Print</option>
                                            <option>akes + Confectionaries</option>
                                            <option>Attire + Aso Ebi</option>
                                            <option>See More</option>
                                        </select>  
                            </div>

                            <div class="form"> 
                                   <label for="Event" class="col-md-3 col-sm-3 col-xs-3  control-label"></label><br/>
                                        <p style="text-align:center">Select Event</p>
                                         <select class="form-control" id="selecting" style="width:250px;"> 
                                            <option>Wedding</option> 
                                            <option>Birthday</option>
                                            <option>........</option>
                                            <option>Conference</option>
                                            
                                            
                                        </select>  
                            </div>
                                    
                                <div class="form" > 
                                   <label for="Country" class="col-md-3 col-sm-3 col-xs-3  control-label"></label><br/>
                                    <p style="text-align:center">In What Location</p>
                                        <select class="form-control" id="selecting" style="width:250px;"> 
                                           
                                            <option>Lagos</option>
                                        </select> 
                                </div>
                        
                         
                      
    
                    </form>    
                </div>
            </div>
        </div>  
          
          <br/><br/>
        

    
    <!--Footer-->
<footer class="page-footer center-on-small-only">

    <!--Footer Links-->
    <div class="container-fluid">
                     <h3 id="stay">Stay Connected</h3>
                    <h5 id="stay">Stay with us || Connect with us || Help and Support</h5>
        <hr/>
        <div class="row">

            <!--First column-->
            <div class="col-md-3 offset-md-1">
                <h5 class="title">Partyvendor Event Center</h5>
                <p>Partyvendor Event CenterPartyvendor Event CenterPartyvendor Event CenterPartyvendor Event Center </p>

                <a target="_blank" href="https://mdbootsrap.com/material-design-for-bootsrap/" class="btn btn-default">Link Up With us</a>
            </div>
            <!--/.First column-->

            <hr class="hidden-md-up">

            <!--Second column-->
            <div class="col-md-2 offset-md-1">
                <h5 class="title">Get Started</h5>
                <ul>
                    <li><a href="#!">Login</a></li>
                    <li><a href="#!">Sign Up</a></li>
                    <li><a href="#!">Features</a></li>
                    <li><a href="#!">How it works</a></li>
                </ul>
            </div>
            <!--/.Second column-->





            <hr class="hidden-md-up">

            <!--Third column-->
            <div class="col-md-2">
                <h5 class="title">Company</h5>
                <ul>
                    <li><a href="#!">About Us</a></li>
                    <li><a href="#!"></a>Contact Us</li>
                    <li><a href="#!"></a>Security</li>
                    <li><a href="#!"></a>Tell Us</li>
                </ul>
            </div>
            <!--/.Third column-->

            <hr class="hidden-md-up">

            <!--Fourth column-->
            <div class="col-md-2">
                <h5 class="title">Support</h5>
                <ul>
                    <li><a href="#!">Live</a></li>
                    <li><a href="#!">Chat</a></li>
                    <li><a href="#!">Call Us</a></li>
                    <li><a href="#!">Help Center</a></li>
                </ul>
            </div>
            <!--/.Fourth column-->

        </div>
    </div>
    <!--/.Footer Links-->

    <hr>

    <!--Call to action-->
    <div class="call-to-action">
        <h4>Partyvendor Best Event Center</h4>
        <ul>
            <li>
                <li><a target="_blank" href="https://mdbootstrap.com/material-design-for-bootstrap/" class="btn btn-primary">FACEBOOK</a>
                <li><a target="_blank" href="https://mdbootstrap.com/material-design-for-bootstrap/" class="btn btn-primary">TWITTER</a>
                <li><a target="_blank" href="https://mdbootstrap.com/material-design-for-bootstrap/" class="btn btn-primary">INTAGRAM</a>
                 <li><a target="_blank" href="https://mdbootstrap.com/material-design-for-bootstrap/" class="btn btn-primary">YAHOO</a>
                <li><a target="_blank" href="https://mdbootstrap.com/material-design-for-bootstrap/" class="btn btn-primary">GMAIL</a>
                 <li><a target="_blank" href="https://mdbootstrap.com/material-design-for-bootstrap/" class="btn btn-primary">YOUTUBE</a>
            </li>
        </ul>
    </div>
    <!--/.Call to action-->

    <!--Copyright-->
    <div class="footer-copyright">
        <div class="container-fluid">
            © 2017 Copyright: <a href="https://mdbootstrap.com"> partyvendor.com </a>

        </div>
    </div>
    <!--/.Copyright-->

</footer>
<!--/.Footer-->

  




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


            

                    <script src="datetimepicker/jquery.datetimepicker.full.js"></script>
        <script>
            $(function () {
                $('#datetimepicker1').datetimepicker();
            });
        </script>
</body>

</html>
