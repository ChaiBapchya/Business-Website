<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Contact Us</title>
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php 
session_start(); 
$host="localhost"; //or the web server
    $username="root";
    $password="";
    $database ="anand";
// Create connection
    $conn = new mysqli($host, $username, $password, $database);
// Check connection
    if ($conn->connect_error) {
        die('Can\'t use' . DB_NAME . ':' . mysql_error());
    }
?>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <a class="navbar-brand" href="homepage.php">Baleri Enterprises</a>
            </div>
             <div >
                <ul class="nav navbar-nav navbar-right">
                <li>
                        <?php if(isset($_SESSION['login'])){ ?><a href="">Hi <?php echo $_SESSION['username']; ?></a>
                        <?php } ?>
                   </li>
                   <li>
                        <?php if((!(isset($_SESSION['login']))) && (!(isset($_SESSION['register'])))){ ?>
                                             <a href="register.php">Register</a> 
                                             <?php } ?>
                    </li>
                    <li>
                        <?php if(!(isset($_SESSION['login']))){ ?>
                                             <a href="login.php">Login</a> 
                                             <?php } ?>
                    </li>
                    <li>
                        <a href="about.php">About Us</a>
                    </li>
                    <li class="dropdown">
                        <a href="" class="dropdown-toggle" data-toggle="dropdown">Our Products <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="ProductUroworld1.php">Uroworld</a>
                            </li>
                            <li>
                                <a href="karlstorz.php">Karlstorz</a>
                            </li>
                            <li>
                                <a href="mindray.php">Mindray</a>
                            </li>
                            
                           </ul>
                    </li>
                   
                    <li>
                        <?php if(isset($_SESSION['login'])){?>
                                             <a href="logout.php">Log Out</a> 
                                             <?php } ?>
                    </li>

            </div>
            
        </div>
        <!-- /.container -->
    </nav>
 <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Contact Us
                                   </h1>
                <ol class="breadcrumb">
                    <li><a href="homepage.php">Home</a>
                    </li>
                    <li class="active">Contact</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->
  <!-- Content Row -->
        <div class="row">
            <!-- Map Column -->
            <div class="col-md-8">
                <!-- Embedded Google Map -->
                <iframe width="100%" height="400px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"src="https://www.google.com/maps/d/embed?mid=z48TEYDfub2M.kvlRYiYHGPWM"></iframe>
    </div>
            <!-- Contact Details Column -->
            <div class="col-md-4">
                <h3>Contact Details</h3>
                <p>
                    201-B,Ackruti Creations, Shraddhanand Road<br>Kumkuwadi,Vile Parle East,Mumbai - 400057<br>India<br>
                </p>
                <p><i class="fa fa-phone"></i> 
                    <abbr title="Phone">P</abbr>: (022) 1234 5678</p>
                <p><i class="fa fa-envelope-o"></i> 
                    <abbr title="Email">E</abbr>: baleri.ganesh@gmail.com</a>
                </p>
                <p><i class="fa fa-clock-o"></i> 
                    <abbr title="Hours">H</abbr>: Monday - Friday: 9:00 AM to 5:00 PM</p>
            </div>
        </div>
        <!-- /.row -->
        </div>
        <!-- /.row -->
        <hr>
        <!-- Footer -->
        <footer class="well">
            <div class="row">
                <div class="footDeep" >
                    <p>Copyright &copy; Baleri Enterprises 2015</p>
                </div>
            </div>
        </footer>
    </div>
    <!-- /.container -->
    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Contact Form JavaScript -->
    <!-- Do not edit these files! In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>
</body>
</html>
