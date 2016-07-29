<?php session_start(); ?> 
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> Baleri Enterprises </title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">


</head>
<body>
<?php 
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
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill" style="float:right">
                    <img src="pictures\IMG_20150922_221628450.jpg" hspace="230" width ="64.3%" height="300px" alt="Flower">


                </div>
               
            </div>
            <div class="item">
                <div class="fill" >  
                        <img src="pictures\karlstorz.jpg" hspace='300' width ="57.3%" height="300px" alt="Flower">

                </div>
                
            </div>
            <div class="item">
                <div class="fill">


<img src="pictures\mindray-logo.jpg" hspace='300' width ="57.3%" height="300px" alt="Flower">

                </div>
                
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>
<div class="container">

        
        <div class="row">
            <div class="col-lg-12">
                <div class="page-header">
                <h2 >
                    Welcome to Baleri Enterprises Pvt.Ltd.
                </h2>
                <h4>-the world of urological products</h4>
            </div>
        </div>
         <div class="row">
            <!-- Sidebar Column -->

            <div class="col-md-3">

                 
                <div class="list-group">
                    <h4>List of Products</h4>
                    <a href="ProductUroworld1.php" class="list-group-item">Bi-polar Loop</a>
                    <a href="ProductUroworld2.php" class="list-group-item">Bladder Evaculatar</a>
                    <a href="ProductUroworld3.php" class="list-group-item">Ureteral Balloon Dilator</a>
                    <a href="ProductUroworld4.php" class="list-group-item">Metal Dilator</a>
                    <a href="ProductUroworld5.php" class="list-group-item">Initial Puncture Needle</a>
                    <a href="karlstorz.php" class="list-group-item">Cystoscope-Urethroscope Sheaths</a>
                    <a href="karlstorz.php" class="list-group-item">Surgical Forceps</a>
                    <a href="karlstorz.php" class="list-group-item">Optical Forceps</a>
                    <a href="karlstorz.php" class="list-group-item">Urethral Sheath</a>
                    <a href="karlstorz.php" class="list-group-item">Visual Obturators, Cystoscope Adaptor</a>
                    <a href="karlstorz.php" class="list-group-item">FLEX X2 URETHEROSCOPE</a>
                    <a href="karlstorz.php" class="list-group-item">MINI PERC ( Mini Nephroscope )</a>
                    <a href="karlstorz.php" class="list-group-item">PCNL ( Universal Nephroscope )</a>
                    <a href="mindray1.php" class="list-group-item">DC-8 Exp</a>
                    <a href="mindray2.php" class="list-group-item">DC-8</a>
                    <a href="mindray3.php" class="list-group-item">DC-70</a>
                    <a href="mindray4.php" class="list-group-item">DC-7</a>
                     
                </div>
            </div>
            <div class="col-md-9">
            <div class="row">
            <div class="col-md-2">
                </div>
            <div class="col-md-8">
                <h2>About Us </h2>
                <p>Since our inception in 2008, we “Baleri Enterprises Pvt. Ltd.” are committed towards Manufacturing, Exporting and Supplying premium quality IVF Disposable, Urology Disposable, Stone Retrieval Product, Biliary Plastic Stent, Inflation Device, Hernia Mesh, Sclerotherapy Needle, Endoscopic Ultrasound Needle, Disposable Laparoscopic Grasper, Disposable Laparoscopic Scissor, Hemorrhoidal Multi Band Ligator, etc. These are manufactured with high precision with the use of qualitative raw material and the latest technology under the guidance of our veteran professional in accordance with the industry set standard. In order to manufacture these products, we only use well tested raw material which we source from the genuine vendors of the market. Being a quality driven firm, we make sure that the products offered by us are strictly checked against numerous parameters of quality by our experts. Due to safe usage, dimensional accuracy, corrosion resistance, easy to fit and reliability, these are broadly demanded in the global market.</p><br>
                <a href="about.php" class="btn btn-default">Read More</a>


                           </div>
            <div class="col-md-2">
                </div>
        </div>
            
        </div>
        
        <hr>
         <div class="row">

            <div class="col-lg-12">
                <h3 class="page-header"> Some of the products</h3>
            </div>

            <div class="col-sm-3 col-xs-6">
                <a href="ProductUroworld1.php">
                    <img class="img-responsive img-hover img-related" src="<?php 

$res = $conn->query("Select * from info where name='Bi-polar Loop'");
while($row=$res->fetch_assoc())
        {   
$cell1=$row['image'];
echo $cell1;
}?>" alt="">
                </a>
            </div>

            <div class="col-sm-3 col-xs-6">
                <a href="ProductUroworld2.php">
                    <img class="img-responsive img-hover img-related" src="<?php 

$res = $conn->query("Select * from info where name='Bladder Evacuator'");
while($row=$res->fetch_assoc())
        {   
$cell1=$row['image'];
echo $cell1;
}?>" alt="">
                </a>
            </div>

            <div class="col-sm-3 col-xs-6">
                <a href="ProductUroworld3.php">
                    <img class="img-responsive img-hover img-related" src="<?php 

$res = $conn->query("Select * from info where name='Ureteral Balloon Dilator'");
while($row=$res->fetch_assoc())
        {   
$cell1=$row['image'];
echo $cell1;
}?>" alt="">
                </a>
            </div>

            <div class="col-sm-3 col-xs-6">
                <a href="ProductUroworld4.php">
                    <img class="img-responsive img-hover img-related" src="<?php 

$res = $conn->query("Select * from info where name='Dual Lumen Catheter'");
while($row=$res->fetch_assoc())
        {   
$cell1=$row['image'];
echo $cell1;
}

?>" alt=""

>
                </a>
            </div>
</div>

        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <footer class="well">
            <div class="row">
                <div class="col-lg-12" >
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

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 2500 //changes the speed
    })
    </script>

</body>

</html>