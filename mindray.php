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
$_SESSION['sesname']='mindray.php';
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
                        <?php if(isset($_SESSION['login'])){ ?><a href="">Hi <?php echo $_SESSION['username'];?></a>
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
                <h1 class="page-header">Mindray
                    <small>Dealers in ultrasound</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="homepage.php">Home</a>
                    </li>
                    <li class="active">Mindray</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->
<!-- Page Content -->
       <!-- Intro Content -->
        <div class="row">
            <div class="col-md-7">
                <img src="
<?php $res = $conn->query("Select * from mindray where name='mindray'");
while($row=$res->fetch_assoc())
	    {   
$cell1=$row['image'];
echo $cell1;
}?>" alt="">
            </div>
            <div class="col-md-5">
                 <?php 

$res = $conn->query("Select * from mindray where name='mindray'");
while($row=$res->fetch_assoc())
    {   
$cell1=$row['description'];
echo $cell1;
}?>
                   </div>
        </div>
        <!-- /.row -->
<div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Products :
                </h1>
            </div>
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4> DC-8 Exp</h4>
                    </div>
                    <div class="panel-body">
                         <a href="mindray1.php">
                    <img class="img-responsive img-hover" src="
<?php 

$res = $conn->query("Select * from mindray where name='DC-8 Exp'");
while($row=$res->fetch_assoc())
    {   
$cell1=$row['image'];
echo $cell1;
}?>
                    " alt="">
                
                        <a href="mindray1.php" class="btn btn-default">Check Details</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4>DC-8</h4>
                    </div>
                    <div class="panel-body">
                      <a href="mindray2.php">
                        <img class="img-responsive img-hover" src="
                        <?php 

$res = $conn->query("Select * from mindray where name='DC-8'");
while($row=$res->fetch_assoc())
    {   
$cell1=$row['image'];
echo $cell1;
}?>" alt="">
                        <a href="mindray2.php" class="btn btn-default">Check Details</a>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4> DC-70</h4>
                    </div>
                    <div class="panel-body">
                      <a href="mindray3.php">
                         <img class="img-responsive img-hover" src="
<?php 

$res = $conn->query("Select * from mindray where name='DC-70'");
while($row=$res->fetch_assoc())
    {   
$cell1=$row['image'];
echo $cell1;
}?>
                         " alt="">
                
                        <a href="mindray3.php" class="btn btn-default">Check Details</a>
                            </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4>DC-7</h4>
                    </div>
                    <div class="panel-body">
                      <a href="mindray4.php">
                      <img class="img-responsive img-hover" src="
<?php 
$res = $conn->query("Select * from mindray where name='DC-7'");
while($row=$res->fetch_assoc())
    {   
$cell1=$row['image'];
echo $cell1;
}
$conn->close();
?>" alt="">  
                        <a href="mindray4.php" class="btn btn-default">Check Details</a>
                    </div>
                </div>
            </div>
    </div>
        <hr>
        <!-- Footer -->
        <footer class="well">
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Baleri Enterprises 2015</p>
                </div>
            </div>
        </footer>
</div>
 <script src="js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
