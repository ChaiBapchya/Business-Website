<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>UroWorld</title>

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
    $_SESSION['sesname']='karlstorz.php';
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
                <h1 class="page-header">Karlstorz
                    <small>The World of endoscopy</small>
                </h1>
                <ol class="breadcrumb">

                    <li><a href="homepage.php">Home</a>
                    </li>
                    <li class="active">Karlstorz</li>
                </ol>
                
				 <div class="row">
            <div class="col-md-7">
                <img src="
<?php 

$res = $conn->query("Select * from karlo where name='mainbody'");
while($row=$res->fetch_assoc())
    {   
$cell1=$row['image'];
echo $cell1;
}?>

                " alt="">
            </div>
            <div class="col-md-5">
                 <?php 

$res = $conn->query("Select * from karlo where name='mainbody'");
while($row=$res->fetch_assoc())
    {   
$cell1=$row['description'];
echo $cell1;
}?>

			  
			  </div>
        </div>
				
				
				
              
            </div>
        </div>
        <!-- /.row -->

        <!-- Content Row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel-group" id="accordion">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                    
 <?php 
$res = $conn->query("Select * from karlo where name='Cysto-urethroscope-sheath'");
while($row=$res->fetch_assoc())
    {   
$cell1=$row['name'];
echo $cell1;
}?>
                                </a>
                            </h4>
                        </div>
                         <div id="collapseOne" class="panel-collapse collapse">
                            <div class="panel-body">
                                <!-- /.row -->
        <div class="row">
            <div class="col-md-7">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-hover" src="

<?php 

$res = $conn->query("Select * from karlo where name='Cysto-urethroscope-sheath'");
while($row=$res->fetch_assoc())
    {   
$cell1=$row['image'];
echo $cell1;
}?>
                    " alt="bipolar loop">
                </a>
            </div>
            <div class="col-md-5">
                <?php 

$res = $conn->query("Select * from karlo where name='Cysto-urethroscope-sheath'");
while($row=$res->fetch_assoc())
    {   
$cell1=$row['description'];
echo $cell1;
}?>
<br>            
<form action="order.php" method='post'>
    <input  type="submit" class="btn btn-primary" name='Cysto-urethroscope-sheath' value='Place Order'>
</form>
   
            </div>

        </div>
        <!-- /.row -->

        <hr>
                            </div>
                        </div>
                    </div>


 <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                    <?php 
$res = $conn->query("Select * from karlo where name='Surgical Forceps'");
while($row=$res->fetch_assoc())
    {   
$cell1=$row['name'];
echo $cell1;
}?>
 
                                </a>
                            </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse">
                            <div class="panel-body">
                               <div class="row">
            <div class="col-md-7">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-hover" src="
<?php 

$res = $conn->query("Select * from karlo where name='Surgical Forceps'");
while($row=$res->fetch_assoc())
    {   
$cell1=$row['image'];
echo $cell1;
}?>

                    " alt="Surgical Forceps">
                </a>
            </div>
            <div class="col-md-5">
                 <?php 

$res = $conn->query("Select * from karlo where name='Surgical Forceps'");
while($row=$res->fetch_assoc())
    {   
$cell1=$row['description'];
echo $cell1;
}
?>
<br>            
<form action="order.php" method='post'>
    <input  type="submit" class="btn btn-primary" name='Surgical-Forceps' value='Place Order'>
</form>

            </div>
        </div>
        <!-- /.row -->

        <hr>
                            </div>
                        </div>
                    </div>
                    <!-- /.panel -->

                   
 <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseThree"> <?php 
$res = $conn->query("Select * from karlo where name='Optical Forceps'");
while($row=$res->fetch_assoc())
    {   
$cell1=$row['name'];
echo $cell1;
}?>
</a>
                            </h4>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse">
                            <div class="panel-body">
                               <div class="row">
            <div class="col-md-7">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-hover" src="
<?php 

$res = $conn->query("Select * from karlo where name='Optical Forceps'");
while($row=$res->fetch_assoc())
    {   
$cell1=$row['image'];
echo $cell1;
}?>

                    " alt="Optical Forceps">
                </a>
            </div>
            <div class="col-md-5">
                  <?php 

$res = $conn->query("Select * from karlo where name='Optical Forceps'");
while($row=$res->fetch_assoc())
    {   
$cell1=$row['description'];
echo $cell1;
}?>

<br>            
<form action="order.php" method='post'>
    <input  type="submit" class="btn btn-primary" name='Optical-Forceps' value='Place Order'>
</form>
   
            </div>
        </div>
        <!-- /.row -->

        <hr>
                            </div>
                        </div>
                    </div>
                    <!-- /.panel -->
                   

 <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapsefour"> <?php 
$res = $conn->query("Select * from karlo where name='Urethral Sheath'");
while($row=$res->fetch_assoc())
    {   
$cell1=$row['name'];
echo $cell1;
}?>
</a>
                            </h4>
                        </div>
                        <div id="collapsefour" class="panel-collapse collapse">
                            <div class="panel-body">
                               <div class="row">
            <div class="col-md-5">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-hover" src="<?php 

$res = $conn->query("Select * from karlo where name='Urethral Sheath'");
while($row=$res->fetch_assoc())
    {   
$cell1=$row['image'];
echo $cell1;
}?>" alt="Urethral Sheath">
                </a>
            </div>
            <div class="col-md-7">
                 <?php 

$res = $conn->query("Select * from karlo where name='Urethral Sheath'");
while($row=$res->fetch_assoc())
    {   
$cell1=$row['description'];
echo $cell1;
}?>
   
<br>            
<form action="order.php" method='post'>
    <input  type="submit" class="btn btn-primary" name='Urethral-Sheath' value='Place Order'>
</form>
   
            </div>
        </div>
        <!-- /.row -->

        <hr>
                            </div>
                        </div>
                    </div>
                    <!-- /.panel -->
                   


<div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapsefive">
                                     <?php 
$res = $conn->query("Select * from karlo where name='Visual Obturators, Cystoscope Adaptor'");
while($row=$res->fetch_assoc())
    {   
$cell1=$row['name'];
echo $cell1;
}?>

                                </a>
                            </h4>
                        </div>
                        <div id="collapsefive" class="panel-collapse collapse">
                            <div class="panel-body">
                               <div class="row">
            <div class="col-md-5">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-hover" src="
<?php 

$res = $conn->query("Select * from karlo where name='Visual Obturators, Cystoscope Adaptor'");
while($row=$res->fetch_assoc())
    {   
$cell1=$row['image'];
echo $cell1;
}?>
                    ">
                </a>
            </div>
            <div class="col-md-7">
                <?php 

$res = $conn->query("Select * from karlo where name='Visual Obturators, Cystoscope Adaptor'");
while($row=$res->fetch_assoc())
    {   
$cell1=$row['description'];
echo $cell1;
}?>
   
  <br>            
<form action="order.php" method='post'>
    <input  type="submit" class="btn btn-primary" name='Visual-Obturators-Cystoscope-Adaptor' value='Place Order'>
</form>
                
            </div>
        </div>
        <!-- /.row -->

        <hr>
                            </div>
                        </div>
                    </div>
                    <!-- /.panel -->
                   
<div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse6">
                                     <?php 
$res = $conn->query("Select * from karlo where name='FLEX X2 URETHEROSCOPE'");
while($row=$res->fetch_assoc())
    {   
$cell1=$row['name'];
echo $cell1;
}?>

                                </a>
                            </h4>
                        </div>
                        <div id="collapse6" class="panel-collapse collapse">
                            <div class="panel-body">
                               <div class="row">
            <div class="col-md-7">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-hover" src="
<?php 

$res = $conn->query("Select * from karlo where name='FLEX X2 URETHEROSCOPE'");
while($row=$res->fetch_assoc())
    {   
$cell1=$row['image'];
echo $cell1;
}?>
                    " alt="FLEX X2 URETHEROSCOPE">
                </a>
            </div>
            <div class="col-md-5">
                  <?php 

$res = $conn->query("Select * from karlo where name='FLEX X2 URETHEROSCOPE'");
while($row=$res->fetch_assoc())
    {   
$cell1=$row['description'];
echo $cell1;
}?>
<br>            
<form action="order.php" method='post'>
    <input  type="submit" class="btn btn-primary" name='FLEX-X2-URETHEROSCOPE' value='Place Order'>

</form>

            </div>
        </div>
        <!-- /.row -->

        <hr>
                            </div>
                        </div>
                    </div>
                    <!-- /.panel -->
                   


<div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse7"> <?php 
$res = $conn->query("Select * from karlo where name='MINI PERC ( Mini Nephroscope )'");
while($row=$res->fetch_assoc())
    {   
$cell1=$row['name'];
echo $cell1;
}?>
</a>
                            </h4>
                        </div>
                        <div id="collapse7" class="panel-collapse collapse">
                            <div class="panel-body">
                               <div class="row">
            <div class="col-md-5">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-hover" src="<?php 

$res = $conn->query("Select * from karlo where name='MINI PERC ( Mini Nephroscope )'");
while($row=$res->fetch_assoc())
    {   
$cell1=$row['image'];
echo $cell1;
}?>" alt="MINI PERC ( Mini Nephroscope )">
                </a>
            </div>
            <div class="col-md-7">
                 <?php 

$res = $conn->query("Select * from karlo where name='MINI PERC ( Mini Nephroscope )'");
while($row=$res->fetch_assoc())
    {   
$cell1=$row['description'];
echo $cell1;
}?>
<br>            
<form action="order.php" method='post'>
    <input  type="submit" class="btn btn-primary" name='MINI-PERC-(-Mini-Nephroscope-)' value='Place Order'>
</form>

            </div>
        </div>
        <!-- /.row -->

        <hr>
                            </div>
                        </div>
                    </div>
                    <!-- /.panel -->
                   
<div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapse8">
                                 <?php 
$res = $conn->query("Select * from karlo where name='PCNL ( Universal Nephroscope )'");
while($row=$res->fetch_assoc())
    {   
$cell1=$row['name'];
echo $cell1;
}?>

</a>
                            </h4>
                        </div>
                        <div id="collapse8" class="panel-collapse collapse">
                            <div class="panel-body">
                               <div class="row">
            <div class="col-md-7">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-hover" src="
                    <?php 

$res = $conn->query("Select * from karlo where name='PCNL ( Universal Nephroscope )'");
while($row=$res->fetch_assoc())
    {   
$cell1=$row['image'];
echo $cell1;
}?>
" alt="FLEX X2 URETHEROSCOPE">
                </a>
            </div>
            <div class="col-md-5">
            <?php 

$res = $conn->query("Select * from karlo where name='PCNL ( Universal Nephroscope )'");
while($row=$res->fetch_assoc())
    {   
$cell1=$row['description'];
echo $cell1;
}
$conn->close();

?>

<br>            
<form action="order.php" method='post'>
    <input  type="submit" class="btn btn-primary" name='PCNL-(-Universal-Nephroscope-)' value='Place Order'>
</form>


                
</p>
               
            </div>
        </div>
        <!-- /.row -->

        <hr>
                            </div>
                        </div>
                    </div>
                    <!-- /.panel -->
</div>
                <!-- /.panel-group -->
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <footer class="well">
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Baleri Enterprises 2015s</p>
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