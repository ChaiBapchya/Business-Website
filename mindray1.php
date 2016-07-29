<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Mindray</title>

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
$_SESSION['sesname']='mindray1.php';
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
                </ul>
               </div>


            </div>
            
        </div>
    </nav>
        
        <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">DC-8 Exp
                    <small>Ultrasound system</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="homepage.php">Home</a>
                    </li>
                    <li><a href="mindray.php">Mindray</a></li>
                    <li class="active">DC-8 Exp</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->
<!-- Page Content -->
       <!-- Intro Content -->
        <div class="row">
            <div class="col-md-7">
                  <img src="
<?php 

$res = $conn->query("Select * from mindray where name='DC-8 Expm1'");
while($row=$res->fetch_assoc())
        {   
$cell1=$row['image'];
echo $cell1;
}?>
                " alt="">
            </div>
            <div class="col-md-5">
               <?php 

$res = $conn->query("Select * from mindray where name='DC-8 Expm1'");
while($row=$res->fetch_assoc())
    {   
$cell1=$row['description'];
echo $cell1;
}?>

<br>            
<form action="order.php" method='post'>
    <input  type="submit" class="btn btn-primary" name='DC-8-Expm1' value='Place Order'>
</form>
</div></div>
        <!-- /.row -->
        <!-- Service Tabs -->
        <!-- Service Tabs -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header"></h2>
            </div>
            <div class="col-lg-12">

                <ul id="myTab" class="nav nav-tabs nav-justified">
                    <li class="active"><a href="#service-one" data-toggle="tab"> Overview</a>
                    </li>
                    <li class=""><a href="#service-two" data-toggle="tab"> Clinical Images</a>
                    </li>
                    <li class=""><a href="#service-three" data-toggle="tab"> Transducer</a>
                    </li>
                    <li class=""><a href="#service-four" data-toggle="tab"> Supporting Materials</a>
                    </li>
                </ul>
   <div id="myTabContent" class="tab-content">
                    <div class="tab-pane fade active in" id="service-one">
                       
   <?php 

$res = $conn->query("Select * from mindray where name='m1overviewp1'");
while($row=$res->fetch_assoc())
    {   
$cell1=$row['description'];
echo $cell1;
}?>

 <img  src="
 <?php 

$res = $conn->query("Select * from mindray where name='m1overviewp1'");
while($row=$res->fetch_assoc())
        {   
$cell1=$row['image'];
echo $cell1;
}?>" alt="">
                   
  <?php 

$res = $conn->query("Select * from mindray where name='m1overviewp2'");
while($row=$res->fetch_assoc())
    {   
$cell1=$row['description'];
echo $cell1;
}?>
                    </div>
                    <div class="tab-pane fade" id="service-two">
                        <h4>Clinical image</h4>
                        <img class="img-responsive" src="<?php 

$res = $conn->query("Select * from mindray where name='m1clinicalimage'");
while($row=$res->fetch_assoc())
        {   
$cell1=$row['image'];
echo $cell1;
}?>" alt="">
                         </div>
                    <div class="tab-pane fade" id="service-three">
                        <h4>Transducer</h4>
                        <p>
                        <img class="img-responsive" src="<?php 

$res = $conn->query("Select * from mindray where name='m1SP5-1E'");
while($row=$res->fetch_assoc())
        {   
$cell1=$row['image'];
echo $cell1;
}?>" alt="">
                         SP5-1E</p>
                         <br>
                         <p>
                        <img class="img-responsive" src="<?php 

$res = $conn->query("Select * from mindray where name='m1P7-3E'");
while($row=$res->fetch_assoc())
        {   
$cell1=$row['image'];
echo $cell1;
}?>" alt="">
                         P7-3E</p>
                         <br>
<p>
                        <img class="img-responsive" src="<?php 

$res = $conn->query("Select * from mindray where name='m1P10-4E'");
while($row=$res->fetch_assoc())
        {   
$cell1=$row['image'];
echo $cell1;
}?>" alt="">
                         P10-4E</p>
 <br>
 <p>
                        <img class="img-responsive" src="<?php 

$res = $conn->query("Select * from mindray where name='m1P7-3TE'");
while($row=$res->fetch_assoc())
        {   
$cell1=$row['image'];
echo $cell1;
}?>" alt="">
                         P7-3TE</p>
<br>
 <p>
                        <img class="img-responsive" src="<?php 

$res = $conn->query("Select * from mindray where name='m1CW2s'");
while($row=$res->fetch_assoc())
        {   
$cell1=$row['image'];
echo $cell1;
}?>" alt="">
                         CW2s</p>
<br>


                     </div>
                    <div class="tab-pane fade" id="service-four">
                        <h4>Mindray DC-8 Diagnostic Ultrasound System</h4>
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/Mhz-Kskcki8" frameborder="0" allowfullscreen></iframe>
                    </div>
                    </div>
                </div>
            
        </div>



    </div>
    <!-- /.container -->
    <hr>

        <!-- Footer -->
        <footer class="well">
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Baleri Enterprises 2015</p>
                </div>
            </div>
        </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
