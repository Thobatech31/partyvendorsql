<?php
    ob_start(); // it is use to cancel any other OUTPUT that might cause HEADER() not to display
    session_start();
    require('configdb.php');
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
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
<body><!-- Navbar -->
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
                    <li class="nav-item ">
                        <a class="nav-link" href="index.php"><b>Home</b> <span class="sr-only">(current)</span></a>
                    </li>
           
                    
                    <li class="nav-item">
                        <a class="nav-link" href="#best-features"><b>Blog</b></a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#Gallery"><b>Gallery</b></a>
                    </li>

                     <li class="nav-item">
                        <a class="nav-link" href="#Locations"><b>Locations</b></a>
                    </li>

                     <li class="nav-item">
                        <a class="nav-link" href="#testimonials"><b>Testimony</b></a>
                    </li>


                     <li class="dropdown" id="dropdown"> 
                             <a class="dropdown-toggle" data-toggle="dropdown" href="#"><b>Vendors <span class="caret"></span></b> </a> 
                             <ul class="dropdown-menu"> 

                             	 <div id="wrapper">
                					<table>			
                    					<tr>
                         					<td><p class="dropdownoptions">
                         							<strong>RENTALS AND SHOPS </strong><br/>
                         							<a href="#">Venue </a><br/>
                        							<a>Favours + Gifts</a><br/>
                        							<a>Photobooth</a><br/>
                        							<a>Service + Security</a><br/>
                        							<a>Transportation</a><br/>
                        							<a>Invitation + Print</a><br/>
                        							<a>Cakes + Confectionaries</a><br/>
                        							<a>Attire + Aso Ebi</a><br/>
                        							<a>See More</a><br/>
                        						</p>
                        					</td>
                        			
                        					<td><p class="dropdownoptions">
                        							<strong>SERVICE PROVIDED </strong><br/>	
                        							<a href="photogra.php">Photographer </a><br/>
                        							<a href="vediographer.php">Vediographer</a><br/>
                        							<a>Decorators</a><br/>
                        							<a href="caterers.php">Caterers</a><br/>
                        							<a>Chocolatiers</a><br/>
                        							<a>Wedding MC</a><br/>
                        							<a href="eventplanner.php">Planners</a><br/>
                        							<a href="tuxedos.php">Tuxedos</a><br/>
                        							<a>See More</a><br/>
                        						</p>
                        					</td>
                        

                         					<td><p class="dropdownoptions">
                         						<strong>ENTERTAINMENT </strong><br/>
                         						<a href="#">Djs </a><br/>
                        							<a>Guitarist</a><br/>
                        							<a>Mc</a><br/>
                        							<a>Pianoist</a><br/>
                        							<a>Guitarist</a><br/>
                        							<a href="artist.php">Artist</a><br/>
                        							<a>Musician + Bands</a><br/>
                        		
                        							<a>See More</a><br/>
                        						</p></td>
                        
                    					</tr>
                   
                					</table>
            					</div>
                              </ul>
                     </li>  
                
                    

                    
                     <li><a href="signupone.php" target="_blank"  class="btn btn-primary">Sign Up</a></li>
                        <li><a target="_blank" href="https://mdbootstrap.com/material-design-for-bootstrap/" class="btn btn-primary">Contact</a></li>
                    

                   
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
                        <div class="col-lg-6">
                                <div class="description">
                                    <h2 class="h2-responsive wow fadeInLeft">PartyVendor </h2>
                                    <hr class="hr-dark">
                                    <p class="wow fadeInLeft" data-wow-delay="0.4s">Partyvendors is your every event marketplace. We're here to help you celebrate all of life's special moments.</p>
                                    <br>
                                    <a class="btn btn-primary wow fadeInLeft" data-wow-delay="0.7s">Learn more</a>
                                </div>
                            </div>
    <!--/.First column-->

    <!--Second column-->
                        <div class="col-lg-6">
                            <form action="index.php" method="POST" role="form">
                                <!--Form-->
                                <div class="card wow fadeInRight">
                                    <div class="card-block">
                                        <!--Header-->
                                        <div class="text-center">
                                            <h3><i class="fa fa-user"></i> Login with:</h3>
                                            <a href="" class="btn-floating btn-fb btn-small">
                                                    <span class="fa-stack fa-lg" style="color:blue;">
                                                        <i class="fa fa-circle fa-stack-2x"></i>
                                                        <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                                                    </span>
                                            </a>
                                            <a href="#" class="btn-floating btn-tw btn-small">
                                                    <span class="fa-stack fa-lg" style="color:blue;">
                                                        <i class="fa fa-circle fa-stack-2x"></i>
                                                        <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                                                    </span>
                                            </a>
                                            <a href="#" class="btn-floating btn-gplus btn-small">
                                                    <span class="fa-stack fa-lg" style="color:blue;">
                                                        <i class="fa fa-circle fa-stack-2x"></i>
                                                        <i class="fa fa-linkedin fa-stack-1x fa-inverse"></i>
                                                    </span>
                                            </a>
                                            <a href="#" class="btn-floating btn-li btn-small">
                                                    <span class="fa-stack fa-lg" style="color:blue;">
                                                        <i class="fa fa-circle fa-stack-2x"></i>
                                                        <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                                                    </span>
                                            </a>
                                            <a href="" class="btn-floating btn-git btn-small">
                                                    <span class="fa-stack fa-lg" style="color:blue;">
                                                        <i class="fa fa-circle fa-stack-2x"></i>
                                                        <i class="fa fa-instagram fa-stack-1x fa-inverse"></i>
                                                    </span>
                                            </a>
                                            <hr>
                                            <h3>or:</h3>

                                            <?php
                                                if (isset($_POST['login_button'])) {
                                                    $username=$_POST['username'];
                                                    $password=$_POST['password'];

                                                    $query="SELECT * FROM vendorreg WHERE username='$username'";
                                                    $query_run=mysqli_query($mysqli,$query);
                                                        if(mysqli_num_rows($query_run)==0){

                                                            echo "<strong style='color:red;'>Wrong Username</strong>";

                                                        }else{

                                                        }

                                                    $query="SELECT * FROM vendorreg WHERE password='$password'";
                                                    $query_run=mysqli_query($mysqli,$query);

                                                        if(mysqli_num_rows($query_run)==0){
                                                            echo "<strong style='color:red;'>Wrong Password</strong>";

                                                        }else{
                                                                $query="SELECT * FROM vendorreg WHERE username='$username' AND password='$password'";
                                                                    $query_run=mysqli_query($mysqli,$query);
                                                                        if(mysqli_num_rows($query_run)>0){
                                                                            $_SESSION['username']=$username;
                                                                             header("Location:vendors.php");
                                                        }else{

                                                        }
                                                        }
                                                    # code...
                                                }
                                            ?>
                                        </div>


                                    <div class="row">
                                        <div class="col-md-3">
                                        </div>

                                        <div class="col-md-6" style="text-align: center;">
                                        
                                        </div>
                                        <div class="col-md-3">
                                        </div>
                                    </div>

                                        <!--Body-->
                                        <div class="md-form">
                                            <i class="fa fa-envelope prefix"></i>
                                            <input type="text" id="username" name="username" value="<?php echo isset($_POST['username'])? $_POST['username']: '';?>" class="form-control" required/>
                                            <label for="username">Your Username</label>
                                        </div>

                                        <div class="md-form">
                                            <i class="fa fa-lock prefix"></i>
                                            <input type="password" id="password"  name="password" class="form-control" required/>
                                            <label for="password">Password</label>
                                        </div>

                                       

                                        <div class="text-center">
                                            <button type="submit" name="login_button"  class="btn btn-primary btn-lg">Login in</button>
                                            <hr>
                                            <fieldset class="form-group">
                                                <input type="checkbox" id="checkbox1">
                                                <label for="checkbox1">Subscribe me to the newsletter</label>
                                            </fieldset>
                                        </div>

                                    </div>
                                </div>
                                <!--/.Form-->
                            </form>

                            
                        </div>
                
    <!--/Second column-->

                </div>
            </div>
        </div>
    </div>
    <!--/.Mask-->
    <div class="container">
        <div class="divider-new">
            <h2 class="h2-responsive wow fadeInDown">Select Venues and Vendors</h2>
        </div>

        <?php
            if (isset($_POST['submit'])) {
                $redirection=$_POST['vendors'];
                switch ($redirection) {

                    case 'choose':
                    header("location:index.php");
                        # code...
                        break;

                    case 'photographer':
                    header("location:photogra.php");
                        # code...
                        break;

                        case 'vediographer':
                    header("location:Vediographer.php");
                        # code...
                        break;

                        case 'Caterers':
                    header("location:caterers.php");
                        # code...
                        break;

                        case 'tuxedos':
                        header("location:tuxedos.php");
                        break;

                        case 'entertainer':
                        header("location:entertainer.php");

                        case 'artist':
                    header("location:artist.php");
                        # code...
                        break;

                        case 'Rental':
                    header("location:partyrental.php");
                        # code...
                        break;
                    
                    default:
                        
                        break;
                }
                # code...
            }
            
        ?>

        <div class="container">                    
            <div class="row" >
                <div class="col-md-12 col-sm-12 col-xs-12">    
                    <form class="form-inline" role="form" action="index.php" method="POST">
                            <div class="form"> 
                                   <label for="Country" class="col-md-5 col-sm-5 col-xs-5  control-label" ></label><br/>
                                        <p style="text-align:center">Am Looking For</p>
                                        <select class="form-control"  name="vendors" style="width:300px;">
                                            <option value="choose">Choose Vendor</option> 
                                            <option value="artist">Artist</option>
                                            <option value="Caterers">Caterers</option>
                                            <option value="tuxedos">Tuxedos</option>
                                            <option value="photographer">Photographer</option> 
                                            <option value="vediographer">Vediographers</option>
                                             <option value="entertainer">Entertainer</option>
                                            
                                            <option value="Rental">Rental + Photobooth</option>
                                            <option value="weddingmc">Wedding MC</option>
                                            <option value="Jewellery">Jewellery + Accessories</option>
                                            <option value="reception">Reception Venue</option>
                                            <option value="">Invitation + Print</option>
                                            <option value="">Cakes + Confectionaries</option>
                                            <option value="">Attire + Aso Ebi</option>
                                            <option>See More</option>
                                        </select> 
                                </div>
                                    
                                <div class="form" > 
                                   <label for="Country" class="col-md-5 col-sm-5 col-xs-5  control-label"></label><br/>
                                    <p style="text-align:center">In What Location</p>
                                        <select class="form-control" style="width:300px;" name="location">
                                            <option>Choose a Location</option> 
                                            <option value="lagos">Lagos</option>
                                            <option value="ondo">Ondo</option>
                                            <option value"Ekiti">Ekiti</option>
                                        </select>
                                </div>
                        
                         
                       
        
 
                       
                          <div class="form-group"> 
                                <div class="col-sm-offset-2 col-sm-2"> 
                                         <button type="submit" class="btn btn-primary" name="submit" style="margin-top: 50px;">Search</button>
                                </div> 
                        </div> 
                    </form>    
                </div>
            </div>
        </div>  
          
    </div>
    <!--Main container-->
    <div class="container">

        <div class="divider-new">
            <h2 class="h2-responsive wow fadeInDown">Vendor By Category</h2>
        </div>

        <div class="container" >
            <div class="row">
                <div class="col-md-3 col-sm-11 col-xs-11" >
                     <!--Card-->
                        <div class="card" >

                            <!--Card image-->
                            <div class="view overlay hm-white-slight" >
                                
                              
                                 <a href="photographer.html">
                                    <span class="fa-stack fa-lg" id="categoryicons">
                                        <i class="fa fa-circle fa-stack-2x"></i>
                                        <i class="fa fa-camera fa-stack-1x fa-inverse" id="coloricons"></i>
                                    </span>
                                </a>
                                      
                            </div>
                            <!--/.Card image-->

                            <!--Card content-->
                            <div class="card-block">
                                <!--Title-->
                                
                                <p class="card-text">
                                    A few clicks and you'll find great wedding,birthday and party photography now!
                                </p>


                                <a class="btn btn-primary" id="categoryphotographer2" href="photogra.php">Photographer</a>
                              
                            </div>
                            <!--/.Card content-->
                        </div>
                        <!--/.Card-->
                </div>



                 <div class="col-md-3 col-sm-11 col-xs-11" >
                     <!--Card-->
                        <div class="card" >

                            <!--Card image-->
                            <div class="view overlay hm-white-slight" >
                                
                              
                                 <a href="caterer.html">
                                    <span class="fa-stack fa-lg" id="categoryicons">
                                        <i class="fa fa-circle fa-stack-2x"></i>
                                        <i class="fa fa-group fa-stack-1x fa-inverse" id="coloricons"></i>
                                    </span>
                                </a>
                                      
                            </div>
                            <!--/.Card image-->

                            <!--Card content-->
                            <div class="card-block">
                                <!--Title-->
                                
                                <p class="card-text">
                                    A few clicks and you'll find great any kinds of event caterer now!
                                </p>


                                <a class="btn btn-primary" id="categorycaterers2" href="caterers.php">Caterer</a>
                              
                            </div>
                            <!--/.Card content-->
                        </div>
                        <!--/.Card-->  
                </div>


                 <div class="col-md-3 col-sm-11 col-xs-11" >
                     <!--Card-->
                        <div class="card" >

                            <!--Card image-->
                            <div class="view overlay hm-white-slight" >
                                
                              
                                 <a href="photographer.html">
                                    <span class="fa-stack fa-lg" id="categoryicons">
                                        <i class="fa fa-circle fa-stack-2x"></i>
                                        <i class="fa fa-camera fa-stack-1x fa-inverse" id="coloricons"></i>
                                    </span>
                                </a>
                                      
                            </div>
                            <!--/.Card image-->

                            <!--Card content-->
                            <div class="card-block">
                                <!--Title-->
                                
                                <p class="card-text">
                                    A few clicks and you'll find great any kinds of event Vediographers now!
                                </p>


                                <a class="btn btn-primary" id="categoryphotographer2" href="vediographer.php">Vediographer</a>
                              
                            </div>
                            <!--/.Card content-->
                        </div>
                        <!--/.Card-->     
            </div>

             <div class="col-md-3 col-sm-11 col-xs-11" >
                     <!--Card-->
                        <div class="card" >

                            <!--Card image-->
                            <div class="view overlay hm-white-slight" >
                          
                                 <a href="partyrental.html">
                                    <span class="fa-stack fa-lg" id="categoryicons">
                                        <i class="fa fa-circle fa-stack-2x"></i>
                                        <i class="fa fa-ship fa-stack-1x fa-inverse" id="coloricons"></i>
                                    </span>
                                </a>
                                      
                            </div>
                            <!--/.Card image-->

                            <!--Card content-->
                            <div class="card-block">
                                <!--Title-->
                                
                                <p class="card-text">
                                    A few clicks and you'll find great any kinds of event Party Rentals now!
                                </p>


                                <a class="btn btn-primary" id="categoryphotographer2" href="partyrental.php">Party Rentals</a>
                              
                            </div>
                            <!--/.Card content-->
                        </div>
                        <!--/.Card-->
            </div>
            </div>
        </div>



  


        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-11 col-xs-11">
                    <div class="card">
                        <div class="view overlay hm-white-slight">
                            <a href="venue.html">
                                <span class="fa-stack fa-lg" id="categoryicons">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-sitemap fa-stack-1x fa-inverse" id="coloricons"></i>
                                </span>
                            </a>
                        </div>

                        <div class="card-block">
                            <p class="card-text">A few clicks and you'll find great any kinds of event Venue now!</p>

                            <a class="btn btn-primary" id="categorycaterers2" href="venues.php">Venues</a>
                        </div>
                    </div>
                </div> 



                <div class="col-md-3 col-sm-11 col-xs-11">
                    <div class="card">
                        <div class="view overlay hm-white-slight">
                            <a href="Entertainer.html">
                                <span class="fa-stack fa-lg" id="categoryicons">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-microphone fa-stack-1x fa-inverse" id="coloricons"></i>
                                </span>
                            </a>
                        </div>

                        <div class="card-block">
                            <p class="card-text">A few clicks and you'll find great any kinds of event Entertainers now!</p>

                            <a class="btn btn-primary" id="categorycaterers2" href="artist.php">Artists</a>
                        </div>
                    </div>
                </div>



                <div class="col-md-3 col-sm-11 col-xs-11">
                    <div class="card">
                        <div class="card">
                            <div class="view overlay hm-white-slight">
                                <a href="tuxedos.html">
                                    <span class="fa-stack fa-lg" id="categoryicons">
                                        <i class="fa fa-circle fa-stack-2x"></i>
                                        <i class="fa fa-male fa-stack-1x fa-inverse" id="coloricons"></i>
                                    </span>
                                </a>
                            </div>

                            <div class="card-block">
                                <p class="card-text">A few clicks and you'll find great any kinds of event Tuxedos now!</p>

                            <a class="btn btn-primary" id="categorycaterers2" href="tuxephpphp">Tuxedos</a>
                            </div>
                        </div>
                    </div>
                </div>


                 <div class="col-md-3 col-sm-11 col-xs-11">
                    <div class="card">
                        <div class="card">
                            <div class="view overlay hm-white-slight">
                                <a href="eventplanner.html">
                                    <span class="fa-stack fa-lg" id="categoryicons">
                                        <i class="fa fa-circle fa-stack-2x"></i>
                                        <i class="fa fa-cogs fa-stack-1x fa-inverse" id="coloricons"></i>
                                    </span>
                                </a>
                            </div>

                            <div class="card-block">
                                <p class="card-text">A few clicks and you'll find great any kinds of event Event Planner now!</p>

                            <a class="btn btn-primary" id="categoryphotographer2" href="eventplanner.php">Event Planner</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
    </div>



      <div class="divider-new">
            <h2 class="h2-responsive wow fadeInDown">What Is Partyvendor?</h2>
    </div>
        
        <div class="container">
           <div class="row">
                 <div class="col-md-2 col-sm-2 col-xs-2">
                </div>
                         
                <div class="col-md-8 col-sm-8 col-xs-8">
                    <p id="partyvendor">Partyvendors is your every event marketplace. We're here to help you celebrate all of life's special moments.</p><br/>
                 </div>
                <div class="col-md-2 col-sm-2 col-xs-2">
                 </div>   
            </div>   
        </div>
       
    
    
    
                                         <!--Start your project here-->                            
        <div class="container">
            <div class="row">
                    <div class="col-md-4">

                        <!--Card-->
                        <div class="card">

                            <!--Card image-->
                            <div class="view overlay hm-white-slight">
                                <img src="img/wedcatering33.jpg" id="containerimage" class="img-fluid" alt="">
                                <a>
                                    <div class="mask"></div>
                                </a>
                            </div>
                            <!--/.Card image-->

                            <!--Card content-->
                            <div class="card-block">
                                <!--Title-->
                                <h4 class="card-title">Caterer</h4>
                                <!--Text-->
                                <p class="card-text">caterers are essential for every ceremony and event. Choosing  your wedding, birthday and any kinds of event caterer, however, can be a time-consuming process. Here you'll save an enormous amount of time by searching our vast database. A few clicks and you'll find great any kinds of event caterer now</p>
                                
                                <a class="btn btn-primary" id="partyvendorcard">Read More</a>
                              
                            </div>
                            <!--/.Card content-->
                            <br/>
                        </div>
                        <!--/.Card-->

                    </div>

                     <div class="col-md-4">

                        <!--Card-->
                        <div class="card">

                            <!--Card image-->
                            <div class="view overlay hm-white-slight">
                                <img src="img/vediographer5.jpg" id="containerimage" class="img-fluid" alt="">
                                <a>
                                    <div class="mask"></div>
                                </a>
                            </div>
                            <!--/.Card image-->

                            <!--Card content-->
                            <div class="card-block">
                                <!--Title-->
                                <h4 class="card-title">Photographer</h4>
                                <!--Text-->
                                <p class="card-text">Wedding photographers are essential for every ceremony and reception. Choosing a wedding photographer, however, can be a time-consuming process. Here you'll save an enormous amount of time by searching our vast database. A few clicks and you'll find great wedding,birthday and party photography now!</p>
                                <a class="btn btn-primary" id="partyvendorcard">Read More</a>
                            </div>
                            <!--/.Card content-->
                                    <br/>
                        </div>
                        <!--/.Card-->

                    </div>

                     <div class="col-md-4">

                        <!--Card-->
                        <div class="card">

                            <!--Card image-->
                            <div class="view overlay hm-white-slight">
                                <img src="img/venue101.jpg" id="containerimage" class="img-fluid" alt="">
                                <a>
                                <div class="mask"></div>
                                </a>
                            </div>
                            <!--/.Card image-->

                            <!--Card content-->
                            <div class="card-block">
                                <!--Title-->
                                <h4 class="card-title">Event Venue</h4>
                                <!--Text-->
                                <p class="card-text">A special, memorable occasion such as weddings, deserves an elegant venue. The partyvendor event center is the most elegant address for weddings and events in Ikeja, Lagos etc. With a banquet hall that can accomodate up to 300 guests, this center is the perfect choice for a perfect day.</p>
                                <a class="btn btn-primary" id="partyvendorcard">Read More</a>
                            </div>
                            <!--/.Card content-->
                                <br/>
                        </div>
                        <!--/.Card-->

                    </div>
            </div>
        </div>
        <!--/Start your project here-->

    <!--Section: Examples of use-->

        <div class="divider-new">
            <h2 class="h2-responsive wow fadeInDown">Why is it so great?</h2>
        </div>
    
    
    <section id="examples-of-use">
        <div class="container">

            <div class="row">
                   
                    <p class="testimonials">Partyvendors is your every event marketplace. We're here to help you celebrate all of life's special moments.Partyvendors is your every event marketplace. We're here to help you celebrate all of life's special moments.</p>
                <div class="col-md-12">
                    <!--Carousel Wrapper--><br/>
                    <div id="carousel-example-2" class="carousel slide carousel-fade no-flex wow fadeIn" data-pause="4.5s" data-ride="carousel">
                        <!--Indicators-->
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-2" data-slide-to="1"></li>
                            <li data-target="#carousel-example-2" data-slide-to="2"></li>
                        </ol>
                        <!--/.Indicators-->

                        <!--Slides-->
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active">
                                <img class="img-fluid" src="img/birthday2.jpg" alt="First slide">
                                <div class="carousel-caption">
                                    <h3>Wedding</h3>
                                    <p>Lekki,Lagos</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="img-fluid" src="img/birthday11.jpg" alt="Second slide">
                                <div class="carousel-caption">
                                    <h3>Birthday</h3>
                                    <p>Maryland,Lagos</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="img-fluid" src="img/club1.jpg" alt="Third slide">
                                <div class="carousel-caption">
                                    <h3>Engagement</h3>
                                    <p>Ikeja,Lagos</p>
                                </div>
                            </div>
                        </div>
                        <!--/.Slides-->

                        <!--Controls-->
                        <a class="left carousel-control" href="#carousel-example-2" role="button" data-slide="prev">
                            <span class="icon-prev" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-2" role="button" data-slide="next">
                            <span class="icon-next" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                        <!--/.Controls-->
                    </div>
                    <!--/.Carousel Wrapper-->
                </div>
                <!--/Second column-->
            </div>
        </div>
    </section>
    <!--/Section: Examples of use-->


    

        <div class="divider-new" id="testimonials">
            <h2 class="h2-responsive wow fadeInDown">Testimonials</h2>
        </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12">

                         <!--Carousel Wrapper-->
                    <div id="multi-item-example" class="carousel slide carousel-multi-item wow fadeIn" data-ride="carousel" data-pause="4.5s">


                        <!--Indicators-->
                        <ol class="carousel-indicators">
                            <li data-target="#multi-item-example" data-slide-to="0" class="active"></li>
                            <li data-target="#multi-item-example" data-slide-to="1"></li>
                            <li data-target="#multi-item-example" data-slide-to="2"></li>
                        </ol>
                        <!--/.Indicators-->

                        <!--Slides-->
                        <div class="carousel-inner" role="listbox">

                            <!--First slide-->
                            <div class="carousel-item active">

                                <div class="col-md-4">
                                    <!--Card-->
                                    <div class="card testimonial-card">



                                        <!--Avatar-->
                                        <div class="avatar"><img src="img/weddinghair16.jpg" id="testimonialsimage" class="img-circle img-responsive">
                                        </div>

                                        <div class="card-block">
                                            <!--Name-->
                                            <h4 class="card-title">hazard</h4>
                                            <hr>
                                            <!--Quotation-->
                                            <p class="testimonials"><i class="fa fa-quote-left"></i>Partyvendors is your every event marketplace. Partyvendors is your every event marketplace. Partyvendors is your every event marketplace. </p>
                                        </div>

                                    </div>
                                    <!--/.Card-->
                                </div>

                                <div class="col-md-4 hidden-sm-down">
                                    <!--Card-->
                                    <div class="card testimonial-card">

                                        <!--Bacground color-->
                                        <div class="card-up green darken-2">
                                        </div>

                                        <!--Avatar-->
                                        <div class="avatar"><img src="img/weddinghair16.jpg" id="testimonialsimage" class="img-circle img-responsive">
                                        </div>

                                        <div class="card-block">
                                            <!--Name-->
                                            <h4 class="card-title">william</h4>
                                            <hr>
                                            <!--Quotation-->
                                            <p class="testimonials"><i class="fa fa-quote-left"></i>Partyvendors is your every event marketplace. Partyvendors is your every event marketplace. Partyvendors is your every event marketplace. </p>
                                        </div>

                                    </div>
                                    <!--/.Card-->
                                </div>

                                <div class="col-md-4 hidden-sm-down">
                                    <!--Card-->
                                    <div class="card testimonial-card">

                                        <!--Bacground color-->
                                        <div class="card-up  green darken-4">
                                        </div>

                                        <!--Avatar-->
                                        <div class="avatar"><img src="img/weddinghair16.jpg" id="testimonialsimage" class="img-circle img-responsive">
                                        </div>

                                        <div class="card-block">
                                            <!--Name-->
                                            <h4 class="card-title">pedro</h4>
                                            <hr>
                                            <!--Quotation-->
                                            <p class="testimonials"><i class="fa fa-quote-left"></i>Partyvendors is your every event marketplace. Partyvendors is your every event marketplace. Partyvendors is your every event marketplace. </p>
                                        </div>

                                    </div>
                                    <!--/.Card-->
                                </div>

                            </div>
                            <!--/.First slide-->

                            <!--Second slide-->
                            <div class="carousel-item">

                                <div class="col-md-4">
                                    <!--Card-->
                                    <div class="card testimonial-card">

                                        <!--Bacground color-->
                                        <div class="card-up blue lighten-1">
                                        </div>

                                        <!--Avatar-->
                                        <div class="avatar"><img src="img/weddinghair16.jpg" id="testimonialsimage" class="img-circle img-responsive">
                                        </div>

                                        <div class="card-block">
                                            <!--Name-->
                                            <h4 class="card-title">kante</h4>
                                            <hr>
                                            <!--Quotation-->
                                            <p class="testimonials"><i class="fa fa-quote-left"></i>Partyvendors is your every event marketplace. Partyvendors is your every event marketplace. Partyvendors is your every event marketplace. </p>
                                        </div>

                                    </div>
                                    <!--/.Card-->
                                </div>

                                <div class="col-md-4 hidden-sm-down">
                                    <!--Card-->
                                    <div class="card testimonial-card">

                                        <!--Bacground color-->
                                        <div class="card-up blue darken-2">
                                        </div>

                                        <!--Avatar-->
                                        <div class="avatar"><img src="img/weddinghair16.jpg" id="testimonialsimage" class="img-circle img-responsive">
                                        </div>

                                        <div class="card-block">
                                            <!--Name-->
                                            <h4 class="card-title">moses</h4>
                                            <hr>
                                            <!--Quotation-->
                                            <p class="testimonials"><i class="fa fa-quote-left"></i>Partyvendors is your every event marketplace. Partyvendors is your every event marketplace. Partyvendors is your every event marketplace. </p>
                                        </div>

                                    </div>
                                    <!--/.Card-->
                                </div>

                                <div class="col-md-4 hidden-sm-down">
                                    <!--Card-->
                                    <div class="card testimonial-card">

                                        <!--Bacground color-->
                                        <div class="card-up blue darken-4">
                                        </div>

                                        <!--Avatar-->
                                        <div class="avatar"><img src="img/weddinghair16.jpg" id="testimonialsimage" class="img-circle img-responsive">
                                        </div>

                                        <div class="card-block">
                                            <!--Name-->
                                            <h4 class="card-title">terry</h4>
                                            <hr>
                                            <!--Quotation-->
                                            <p class="testimonials"><i class="fa fa-quote-left"></i>Partyvendors is your every event marketplace. Partyvendors is your every event marketplace. Partyvendors is your every event marketplace. </p>
                                        </div>

                                    </div>
                                    <!--/.Card-->
                                </div>

                            </div>
                            <!--/.Second slide-->

                            <!--Third slide-->
                            <div class="carousel-item">

                                <div class="col-md-4">
                                    <!--Card-->
                                    <div class="card testimonial-card">

                                        <!--Bacground color-->
                                        <div class="card-up indigo lighten-1">
                                        </div>

                                        <!--Avatar-->
                                        <div class="avatar"><img src="img/weddinghair16.jpg" id="testimonialsimage" class="img-circle img-responsive">
                                        </div>

                                        <div class="card-block">
                                            <!--Name-->
                                            <h4 class="card-title">costa</h4>
                                            <hr>
                                            <!--Quotation-->
                                            <p class="testimonials"><i class="fa fa-quote-left"></i>Partyvendors is your every event marketplace. Partyvendors is your every event marketplace. Partyvendors is your every event marketplace. </p>
                                        </div>

                                    </div>
                                    <!--/.Card-->
                                </div>

                                <div class="col-md-4 hidden-sm-down">
                                    <!--Card-->
                                    <div class="card testimonial-card">

                                        <!--Bacground color-->
                                        <div class="card-up indigo darken-1">
                                        </div>

                                        <!--Avatar-->
                                        <div class="avatar"><img src="img/weddinghair16.jpg" id="testimonialsimage" class="img-circle img-responsive">
                                        </div>

                                        <div class="card-block">
                                            <!--Name-->
                                            <h4 class="card-title">coutious</h4>
                                            <hr>
                                            <!--Quotation-->
                                            <p class="testimonials"><i class="fa fa-quote-left"></i>Partyvendors is your every event marketplace. Partyvendors is your every event marketplace. Partyvendors is your every event marketplace. </p>
                                        </div>

                                    </div>
                                    <!--/.Card-->
                                </div>

                                <div class="col-md-4 hidden-sm-down">
                                    <!--Card-->
                                    <div class="card testimonial-card">

                                        <!--Bacground color-->
                                        <div class="card-up indigo darken-4">
                                        </div>

                                        <!--Avatar-->
                                        <div class="avatar"><img src="img/weddinghair16.jpg" id="testimonialsimage" class="img-circle img-responsive">
                                        </div>

                                        <div class="card-block">
                                            <!--Name-->
                                            <h4 class="card-title">matic</h4>
                                            <hr>
                                            <!--Quotation-->
                                            <p class="testimonials"><i class="fa fa-quote-left"></i>Partyvendors is your every event marketplace. Partyvendors is your every event marketplace. Partyvendors is your every event marketplace. </p>
                                        </div>

                                    </div>
                                    <!--/.Card-->
                                </div>

                            </div>
                            <!--/.Third slide-->

                        </div>
                        <!--/.Slides-->

                 </div>


            </div>
         </div>           <!--/.Carousel Wrapper-->
    </div>


        <div class="divider-new" id="Gallery">
            <h2 class="h2-responsive wow fadeInDown">Galleries</h2>
        </div>
    <div class="container">
            <div class="row">
                    <div class="col-md-2">

                        <!--Card-->
                        <div class="card">

                            <!--Card image-->
                            <div class="view overlay hm-white-slight">
                                <img src="img/wedcatering33.jpg" id="containerimage" class="img-fluid" alt="">
                                <a>
                                    <div class="mask"></div>
                                </a>
                            </div>
                            <!--/.Card image-->

                            
                            <br/>
                        </div>
                        <!--/.Card-->

                    </div>

                     <div class="col-md-2">

                        <!--Card-->
                        <div class="card">

                            <!--Card image-->
                            <div class="view overlay hm-white-slight">
                                <img src="img/vediographer5.jpg" id="containerimage" class="img-fluid" alt="">
                                <a>
                                    <div class="mask"></div>
                                </a>
                            </div>
                            <!--/.Card image-->

                           
                                    <br/>
                        </div>
                        <!--/.Card-->

                    </div>

                     <div class="col-md-2">

                        <!--Card-->
                        <div class="card">

                            <!--Card image-->
                            <div class="view overlay hm-white-slight">
                                <img src="img/venue101.jpg" id="containerimage" class="img-fluid" alt="">
                                <a>
                                <div class="mask"></div>
                                </a>
                            </div>
                            <!--/.Card image-->

                           
                                <br/>
                        </div>
                        <!--/.Card-->

                    </div>

                         <div class="col-md-2">

                        <!--Card-->
                        <div class="card">

                            <!--Card image-->
                            <div class="view overlay hm-white-slight">
                                <img src="img/venue101.jpg" id="containerimage" class="img-fluid" alt="">
                                <a>
                                <div class="mask"></div>
                                </a>
                            </div>
                            <!--/.Card image-->

                           
                                <br/>
                        </div>
                        <!--/.Card-->

                    </div>

                         <div class="col-md-2">

                        <!--Card-->
                        <div class="card">

                            <!--Card image-->
                            <div class="view overlay hm-white-slight">
                                <img src="img/venue101.jpg" id="containerimage" class="img-fluid" alt="">
                                <a>
                                <div class="mask"></div>
                                </a>
                            </div>
                            <!--/.Card image-->

                           
                                <br/>
                        </div>
                        <!--/.Card-->

                    </div>

                         <div class="col-md-2">

                        <!--Card-->
                        <div class="card">

                            <!--Card image-->
                            <div class="view overlay hm-white-slight">
                                <img src="img/venue101.jpg" id="containerimage" class="img-fluid" alt="">
                                <a>
                                <div class="mask"></div>
                                </a>
                            </div>
                            <!--/.Card image-->

                           
                                <br/>
                        </div>
                        <!--/.Card-->

                    </div>
            </div>
    </div>

    <div class="container">
            <div class="row">
                    <div class="col-md-2">

                        <!--Card-->
                        <div class="card">

                            <!--Card image-->
                            <div class="view overlay hm-white-slight">
                                <img src="img/wedcatering33.jpg" id="containerimage" class="img-fluid" alt="">
                                <a>
                                    <div class="mask"></div>
                                </a>
                            </div>
                            <!--/.Card image-->

                            
                            <br/>
                        </div>
                        <!--/.Card-->

                    </div>

                     <div class="col-md-2">

                        <!--Card-->
                        <div class="card">

                            <!--Card image-->
                            <div class="view overlay hm-white-slight">
                                <img src="img/vediographer5.jpg" id="containerimage" class="img-fluid" alt="">
                                <a>
                                    <div class="mask"></div>
                                </a>
                            </div>
                            <!--/.Card image-->

                           
                                    <br/>
                        </div>
                        <!--/.Card-->

                    </div>

                     <div class="col-md-2">

                        <!--Card-->
                        <div class="card">

                            <!--Card image-->
                            <div class="view overlay hm-white-slight">
                                <img src="img/venue101.jpg" id="containerimage" class="img-fluid" alt="">
                                <a>
                                <div class="mask"></div>
                                </a>
                            </div>
                            <!--/.Card image-->

                           
                                <br/>
                        </div>
                        <!--/.Card-->

                    </div>

                         <div class="col-md-2">

                        <!--Card-->
                        <div class="card">

                            <!--Card image-->
                            <div class="view overlay hm-white-slight">
                                <img src="img/venue101.jpg" id="containerimage" class="img-fluid" alt="">
                                <a>
                                <div class="mask"></div>
                                </a>
                            </div>
                            <!--/.Card image-->

                           
                                <br/>
                        </div>
                        <!--/.Card-->

                    </div>

                         <div class="col-md-2">

                        <!--Card-->
                        <div class="card">

                            <!--Card image-->
                            <div class="view overlay hm-white-slight">
                                <img src="img/venue101.jpg" id="containerimage" class="img-fluid" alt="">
                                <a>
                                <div class="mask"></div>
                                </a>
                            </div>
                            <!--/.Card image-->

                           
                                <br/>
                        </div>
                        <!--/.Card-->

                    </div>

                         <div class="col-md-2">

                        <!--Card-->
                        <div class="card">

                            <!--Card image-->
                            <div class="view overlay hm-white-slight">
                                <img src="img/venue101.jpg" id="containerimage" class="img-fluid" alt="">
                                <a>
                                <div class="mask"></div>
                                </a>
                            </div>
                            <!--/.Card image-->

                           
                                <br/>
                        </div>
                        <!--/.Card-->

                    </div>
            </div>
    </div>

    <div class="container">
            <div class="row">
                    <div class="col-md-2">

                        <!--Card-->
                        <div class="card">

                            <!--Card image-->
                            <div class="view overlay hm-white-slight">
                                <img src="img/wedcatering33.jpg" id="containerimage" class="img-fluid" alt="">
                                <a>
                                    <div class="mask"></div>
                                </a>
                            </div>
                            <!--/.Card image-->

                            
                            <br/>
                        </div>
                        <!--/.Card-->

                    </div>

                     <div class="col-md-2">

                        <!--Card-->
                        <div class="card">

                            <!--Card image-->
                            <div class="view overlay hm-white-slight">
                                <img src="img/vediographer5.jpg" id="containerimage" class="img-fluid" alt="">
                                <a>
                                    <div class="mask"></div>
                                </a>
                            </div>
                            <!--/.Card image-->

                           
                                    <br/>
                        </div>
                        <!--/.Card-->

                    </div>

                     <div class="col-md-2">

                        <!--Card-->
                        <div class="card">

                            <!--Card image-->
                            <div class="view overlay hm-white-slight">
                                <img src="img/venue101.jpg" id="containerimage" class="img-fluid" alt="">
                                <a>
                                <div class="mask"></div>
                                </a>
                            </div>
                            <!--/.Card image-->

                           
                                <br/>
                        </div>
                        <!--/.Card-->

                    </div>

                         <div class="col-md-2">

                        <!--Card-->
                        <div class="card">

                            <!--Card image-->
                            <div class="view overlay hm-white-slight">
                                <img src="img/venue101.jpg" id="containerimage" class="img-fluid" alt="">
                                <a>
                                <div class="mask"></div>
                                </a>
                            </div>
                            <!--/.Card image-->

                           
                                <br/>
                        </div>
                        <!--/.Card-->

                    </div>

                         <div class="col-md-2">

                        <!--Card-->
                        <div class="card">

                            <!--Card image-->
                            <div class="view overlay hm-white-slight">
                                <img src="img/venue101.jpg" id="containerimage" class="img-fluid" alt="">
                                <a>
                                <div class="mask"></div>
                                </a>
                            </div>
                            <!--/.Card image-->

                           
                                <br/>
                        </div>
                        <!--/.Card-->

                    </div>

                         <div class="col-md-2">

                        <!--Card-->
                        <div class="card">

                            <!--Card image-->
                            <div class="view overlay hm-white-slight">
                                <img src="img/venue101.jpg" id="containerimage" class="img-fluid" alt="">
                                <a>
                                <div class="mask"></div>
                                </a>
                            </div>
                            <!--/.Card image-->

                           
                                <br/>
                        </div>
                        <!--/.Card-->

                    </div>
            </div>
    </div>


    <div class="divider-new">
            <h2 class="h2-responsive">Vendor By Category</h2>
    </div> 

    <div class="container">
        <div class="row" style="text-align: center;">
            <div class="col-md-3 col-sm-3 col-xs-3">
                <a href="photographer.php"> <h6>Photographer</h6></a>
            </div>
            

            <div class="col-md-3 col-sm-3 col-xs-3">
                 <a href="Vediographer.php"> <h6>Vediographer</h6></a>
            </div>

            <div class="col-md-3 col-sm-3 col-xs-3">
                 <a href="Caterers.html"> <h6>Caterer</h6></a>
            </div>

            <div class="col-md-3 col-sm-3 col-xs-3">
                 <a href="venues.php"> <h6>Venue</h6></a>
            </div>
        </div>
    <hr/>

        <div class="row" style="text-align: center;">
            <div class="col-md-3 col-sm-3 col-xs-3">
                 <a href="tuxedos.php"> <h6>Tuxedos</h6></a>
            </div>
            

            <div class="col-md-3 col-sm-3 col-xs-3">
                 <a href="#"> <h6>Entertainers</h6></a>
            </div>

            <div class="col-md-3 col-sm-3 col-xs-3">
                 <a href="partyrental.php"> <h6>Partyrental</h6></a>
            </div>

            <div class="col-md-3 col-sm-3 col-xs-3">
                 <a href="eventplanner.php"> <h6>Eventplanner</h6></a>
            </div>
        </div>
    <hr/>


        <div class="row" style="text-align: center;">
            <div class="col-md-3 col-sm-3 col-xs-3">
                 <a href="#"> <h6>Decorators</h6></a>
            </div>
            

            <div class="col-md-3 col-sm-3 col-xs-3">
                 <a href="#"> <h6>Musical + Bands</h6></a>
            </div>

            <div class="col-md-3 col-sm-3 col-xs-3">
                 <a href="artist.html"> <h6>Artist + Djs</h6></a>
            </div>

            <div class="col-md-3 col-sm-3 col-xs-3">
                 <a href="#"> <h6>Service + Security </h6></a>
            </div>
        </div>
    </div>

  
               

    <div class="divider-new" id="Locations">
        <h2 class="h2-responsive">Vendor By Key Locations</h2>
    </div> 

    <div class="container">
        <div class="row" style="text-align: center;">
            <div class="col-md-3 col-sm-3 col-xs-3">
                <a href="#"> <h6>Abuja, Nigeria</h6></a>
            </div>
            

            <div class="col-md-3 col-sm-3 col-xs-3">
                 <a href="#"> <h6>Lagos, Nigeria</h6></a>
            </div>

            <div class="col-md-3 col-sm-3 col-xs-3">
                 <a href="#"> <h6>Abia, Nigeria</h6></a>
            </div>

            <div class="col-md-3 col-sm-3 col-xs-3">
                 <a href="#"> <h6>Ado, Nigeria</h6></a>
            </div>
        </div>
    <hr/>

        <div class="row" style="text-align: center;">
            <div class="col-md-3 col-sm-3 col-xs-3">
                 <a href="#"> <h6>Akure, Nigeria</h6></a>
            </div>
            

            <div class="col-md-3 col-sm-3 col-xs-3">
                 <a href="#"> <h6>Anambra, Nigeria</h6></a>
            </div>

            <div class="col-md-3 col-sm-3 col-xs-3">
                 <a href="#"> <h6>Ilorin, Nigeria</h6></a>
            </div>

            <div class="col-md-3 col-sm-3 col-xs-3">
                 <a href="#"> <h6>Kogi, Nigeria</h6></a>
            </div>
        </div>
    <hr/>


        <div class="row" style="text-align: center;">
            <div class="col-md-3 col-sm-3 col-xs-3">
                 <a href="#"> <h6>Port-Harcourt, Nigeria</h6></a>
            </div>
            

            <div class="col-md-3 col-sm-3 col-xs-3">
                 <a href="#"> <h6>Imo, Nigeria</h6></a>
            </div>

            <div class="col-md-3 col-sm-3 col-xs-3">
                 <a href="#"> <h6>Kaduna, Nigeria</h6></a>
            </div>

            <div class="col-md-3 col-sm-3 col-xs-3">
                 <a href="#"> <h6>River, Nigeria</h6></a>
            </div>
        </div>

    <hr/>
        <div class="row" style="text-align: center;">
            <div class="col-md-3 col-sm-3 col-xs-3">
                 <a href="#"> <h6>Lokoja, Nigeria</h6></a>
            </div>
            

            <div class="col-md-3 col-sm-3 col-xs-3">
                 <a href="#"> <h6>Adamawa, Nigeria</h6></a>
            </div>

            <div class="col-md-3 col-sm-3 col-xs-3">
                 <a href="#"> <h6>Bauchi, Nigeria</h6></a>
            </div>

            <div class="col-md-3 col-sm-3 col-xs-3">
                 <a href="#"> <h6>Lagos, Nigeria</h6></a>
            </div>
        </div>
    </div>   
               

                <div class="divider-new">
                    <h2 class="h2-responsive">Our Partners</h2>
                </div>

                <!--Section: Contact-->
                <section id="contact">
                   <div class="container">
                        <div class="row" style="text-align: center;">
                                <div class="col-md-3 col-sm-12 col-xs-12">
                                    <img src="img/agitator.jpg" class="img-thumbnail" id="partner" onmouseover="this.src='img/agitator1.jpg'" onmouseout="this.src='img/agitator.jpg'">
                                </div>
                                <div class="col-md-3 col-sm-12 col-xs-12">
                                    <img src="img/microsoft.jpg" class="img-thumbnail" id="partner" onmouseover="this.src='img/microsoft1.jpg'" onmouseout="this.src='img/microsoft.jpg'">
                                </div>
                                <div class="col-md-3 col-sm-12 col-xs-12">
                                    <img src="img/siso.jpg" class="img-thumbnail" id="partner" onmouseout="this.src='img/siso.jpg'" onmouseover="this.src='img/siso1.jpg'">
                                </div>
                                <div class="col-md-3 col-sm-12 col-xs-12">
                                    <img src="img/oracle.jpg" class="img-thumbnail" id="partner" onmouseover="this.src='img/oracle1.jpg'" onmouseout="this.src='img/oracle.jpg'">
                                </div>
                        </div>
                   </div>

                    <br/>

                   <div class="container">
                        <div class="row" style="text-align: center;">
                                <div class="col-md-3 col-sm-12 col-xs-12">
                                    <img src="img/ibm.jpg" class="img-thumbnail" id="partner" onmouseover="this.src='img/ibm1.jpg'" onmouseout="this.src='img/ibm.jpg'">
                                </div>
                                <div class="col-md-3 col-sm-12 col-xs-12">
                                    <img src="img/huawei.jpg" class="img-thumbnail" id="partner" onmouseover="this.src='img/huawei1.jpg'" onmouseout="this.src='img/huawei.jpg'">
                                </div>
                                <div class="col-md-3 col-sm-12 col-xs-12">
                                    <img src="img/gov.jpg" class="img-thumbnail" id="partner" onmouseover="this.src='img/gov1.jpg'" onmouseout="this.src='img/gov.jpg'">
                                </div>
                                <div class="col-md-3 col-sm-12 col-xs-12">
                                    <img src="img/firs1.jpg" class="img-thumbnail" id="partner" onmouseover="this.src='img/firs.jpg'" onmouseout="this.src='img/firs1.jpg'">
                                </div>
                        </div>
                   </div>
                </section>
                <!--Section: Contact-->

         
            <!--/Main container-->


    
  
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
                        <a target="_blank" href="https://mdbootstrap.com/material-design-for-bootstrap/" class="btn btn-primary">FACEBOOK</a>
                        <a target="_blank" href="https://mdbootstrap.com/material-design-for-bootstrap/" class="btn btn-primary">TWITTER</a>
                        <a target="_blank" href="https://mdbootstrap.com/material-design-for-bootstrap/" class="btn btn-primary">INTAGRAM</a>
                         <a target="_blank" href="https://mdbootstrap.com/material-design-for-bootstrap/" class="btn btn-primary">YAHOO</a>
                        <a target="_blank" href="https://mdbootstrap.com/material-design-for-bootstrap/" class="btn btn-primary">GMAIL</a>
                         <a target="_blank" href="https://mdbootstrap.com/material-design-for-bootstrap/" class="btn btn-primary">YOUTUBE</a>
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
