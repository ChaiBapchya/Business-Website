<!DOCTYPE html>
<html lang="en">
	<head>

	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta name="description" content="">
	    <meta name="author" content="">
	    
	    <title>About Us</title>

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
	             <div>
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
	                        <a href="contact.php">Contact Us</a>
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


	    <!-- Page Content -->
	    <div class="container">

	        <!-- Page Heading/Breadcrumbs -->
	        <div class="row">
	            <div class="col-lg-12">
	                <h1 class="page-header">About us
	                    <small></small>
	                </h1>
	                <ol class="breadcrumb">
	                    <li><a href="homepage.php">Home</a>
	                    </li>
	                    <li class="active">About</li>
	                </ol>
	            </div>
	        </div>
	        <!-- /.row -->

	        <div class="row">
	            <div class="col-md-2">
	                </div>
	            <div class="col-md-8">
	                <h2>About Us </h2>
	                <p>Since our inception in 2008, we “Baleri Enterprises Pvt. Ltd.” are committed towards Manufacturing, Exporting and Supplying premium quality IVF Disposable, Urology Disposable, Stone Retrieval Product, Biliary Plastic Stent, Inflation Device, Hernia Mesh, Sclerotherapy Needle, Endoscopic Ultrasound Needle, Disposable Laparoscopic Grasper, Disposable Laparoscopic Scissor, Hemorrhoidal Multi Band Ligator, etc. These are manufactured with high precision with the use of qualitative raw material and the latest technology under the guidance of our veteran professional in accordance with the industry set standard. In order to manufacture these products, we only use well tested raw material which we source from the genuine vendors of the market. Being a quality driven firm, we make sure that the products offered by us are strictly checked against numerous parameters of quality by our experts. Due to safe usage, dimensional accuracy, corrosion resistance, easy to fit and reliability, these are broadly demanded in the global market.</p>
	<p>
	Our manufacturing unit is located at Pune (Maharashtra, India) and has modern facility for manufacturing quality products. Spread across a wide area, we have segregated our infrastructure into different units like manufacturing, quality control, R & D, warehousing & packaging unit, etc. Well-equipped with the latest machinery and technology, these units assist us in meeting bulk and urgent requirements of our clients in the most efficient manner. Using the expertise of our in-house Research & Development, we are continually working on new solutions to produce new products. Further, we continually strive to develop ideas that have one purpose in mind - Yield Improvement. Our continuous investment into Research and Development ensure that we will remain at the forefront of our markets for the future.</p>


	                           </div>
	            <div class="col-md-2">
	                </div>
	        </div>
	        <!-- /.row -->

	        <div class="row">
	            <div class="col-lg-12">
	                
	            </div>
	            <div class="col-md-2">

	            </div>
	            <div class="col-md-8">
	                <div class="panel panel-default">
	                    <div class="panel-heading">
	                        <h3> Company Profile</h3>
	                    </div>
	                    <div class="panel-body">
	                       
	                       <p>
	                        Nature of Business :
	    Exporter<br>
	Additional Business :
	    
	Manufacturer <br>
	Supplier<br>
	Company CEO :
	    Nitesh Baleri <br>
	Year of Establishment :
	    2008<br>
	Ownership Type :
	    Private Limited Company <br>
	                    </div>
	                </div>
	            </div>
	            <div class="col-md-2">
	                
	            </div>
	        </div>

	 <div class="row">
	            <div class="col-lg-12">
	                
	            </div>
	            <div class="col-md-2">

	            </div>
	            <div class="col-md-8">
	                <div class="panel panel-default">
	                    <div class="panel-heading">
	                        <h3> Our Team</h3>
	                    </div>
	                    <div class="panel-body">
	                       
	                       <p>
	                        We have appointed a skilled team of professionals who have immense industry experience to carry out entire business process in an efficient manner. We recruit professionals after conducting stringent hiring procedures and analyzing their skills, dedication and determination towards work. With an immense experience in the domain, our team members understand the requirements of our clients and serve them accordingly. Moreover, they work in close tandem with each other to achieve pre-determined organizational objectives.
	                        </p>
	                    </div>
	                </div>
	            </div>
	            <div class="col-md-2">
	                
	            </div>
	        </div>

	 <div class="row">
	            <div class="col-lg-12">
	                
	            </div>
	            <div class="col-md-2">

	            </div>
	            <div class="col-md-8">
	                <div class="panel panel-default">
	                    <div class="panel-heading">
	                        <h3> Why Us?</h3>
	                    </div>
	                    <div class="panel-body">
	                       
	                       <p>
	                        Since our inception, we have been renowned in the industry for our ethical business policies and transparent dealings.<br>

	Some of other factors, owing to which, we are regarded as the foremost entity in this domain are:
	<br>
	State-of-the-art infrastructural facility<br>
	Highly experienced team of professionals<br>
	Strict medical industry quality standards<br>
	Client centric approach<br>
	Timely delivery of clients’ orders<br>
	Competitive pricing structure<br>
	Vast distribution network<br></p>
	                    </div>
	                </div>
	            </div>
	            <div class="col-md-2">
	                
	            </div>
	        </div>



	 <div class="row">
	            <div class="col-lg-12">
	                
	            </div>
	            <div class="col-md-2">

	            </div>
	            <div class="col-md-8">
	                <div class="panel panel-default">
	                    <div class="panel-heading">
	                        <h3> Our infastructure</h3>
	                    </div>
	                    <div class="panel-body">
	                       
	                       <p>
	                        Our offered range of products is designed and manufactured with the help of the latest machines that is installed at our infrastructure. We have divided our infrastructure into various units like production, procuring and quality control. Each section is manned with the skilled professionals who have expertise in their respective domains. With the support of our advanced infrastructure unit, we are able to fulfil the bulk orders of the client in within promised time frame in an efficient manner
	                    </p>
	                    </div>
	                </div>
	            </div>
	            <div class="col-md-2">
	                
	            </div>
	        </div>

	<div class="row">
	            <div class="col-lg-12">
	                
	            </div>
	            <div class="col-md-2">

	            </div>
	            <div class="col-md-8">
	                <div class="panel panel-default">
	                    <div class="panel-heading">
	                        <h3> Contact Us </h3>
	                    </div>
	                    <div class="panel-body">
	                       
	                       <p>
	                        
	                        <h4>Contact Details</h4>
	                <p>
	                    201-B,Ackruti Creations, Shraddhanand Road<br>Kumkuwadi,Vile Parle East,Mumbai - 400057<br>India<br>
	                </p>
	                 <a href="contact.php" class="btn btn-default">More Details</a>
	                    </p>
	                    </div>
	                </div>
	            </div>
	            <div class="col-md-2">
	                
	            </div>
	        </div>
	        <!-- Footer -->
	        <footer class="well">
	            <div class="row">
	                <div class="col-lg-12">
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

	</body>	

</html>