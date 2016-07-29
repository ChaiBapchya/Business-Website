<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>UROworld</title>

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
    $_SESSION['sesname']='ProductUroworld2.php';
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
                </ul>
               </div>


            </div>
            
        </div>
    </nav>
        
        <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Uroworld
                    <small>Urology products</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="homepage.php">Home</a>
                    </li>
                    <li class="active">Uroworld</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-md-7">
                
                    <img class="img-responsive img-hover" src=

"
<?php 

$res = $conn->query("Select * from info where name='Bladder Evacuator'");
while($row=$res->fetch_assoc())
    {   
$cell1=$row['image'];
echo $cell1;
}?>
"
                     alt="bipolar loop">
                
            </div>
            <div class="col-md-5">
                <h3>
<?php 

$res = $conn->query("Select * from info where name='Bladder Evacuator'");
while($row=$res->fetch_assoc())
    {   
$cell1=$row['name'];
echo $cell1;
}?>
                </h3>
                <h4></h4>
                <p>
<?php 

$res = $conn->query("Select * from info where name='Bladder Evacuator'");
while($row=$res->fetch_assoc())
    {   
$cell1=$row['description'];
$new_str = mb_convert_encoding($cell1, 'UTF-8', 'HTML-ENTITIES');
echo $new_str;

}?>

</p>
             <form action="order.php" method='post'>
    <input  type="submit" class="btn btn-primary" name='Bladder-Evacuator' value='Place Order'>
</form>    
            </div>
        </div>
        <!-- /.row -->

        <hr>
        <div class="row">
            <div class="col-md-7">
                
                    <img class="img-responsive img-hover" src=
"
<?php 

$res = $conn->query("Select * from info where name='PCN Catheter'");
while($row=$res->fetch_assoc())
    {   
$cell1=$row['image'];
echo $cell1;
}?>
"

                     alt="plasma button electrode">
                
            </div>
            <div class="col-md-5">
                <h3>
                    <?php 

$res = $conn->query("Select * from info where name='PCN Catheter'");
while($row=$res->fetch_assoc())
    {   
$cell1=$row['name'];
echo $cell1;
}?>






                </h3>
                <h4></h4>
                <p>
<?php 

$res = $conn->query("Select * from info where name='PCN Catheter'");
while($row=$res->fetch_assoc())
    {   
$cell1=$row['description'];
$new_str = mb_convert_encoding($cell1, 'UTF-8', 'HTML-ENTITIES');
echo $new_str;
}?>




</p>
      <form action="order.php" method='post'>
    <input  type="submit" class="btn btn-primary" name='PCN-Catheter' value='Place Order'>
</form>
            </div>
        </div>
        <!-- /.row -->

        <hr>
         <!-- Project Three -->
        <div class="row">
            <div class="col-md-7">
                
                    <img class="img-responsive img-hover" src=

"

<?php 

$res = $conn->query("Select * from info where name='PCN Direct Puncture Set'");
while($row=$res->fetch_assoc())
    {   
$cell1=$row['image'];
echo $cell1;
}?>

"

                     alt="">
                
            </div>
            <div class="col-md-5">
                <h3>
                    <?php 

$res = $conn->query("Select * from info where name='PCN Direct Puncture Set'");
while($row=$res->fetch_assoc())
    {   
$cell1=$row['name'];
echo $cell1;
}?>



                </h3>
                <h4></h4>
                <p>

<?php 

$res = $conn->query("Select * from info where name='PCN Direct Puncture Set'");
while($row=$res->fetch_assoc())
    {   
$cell1=$row['description'];
echo $cell1;
}?>

</p>
                 <form action="order.php" method='post'>
    <input  type="submit" class="btn btn-primary" name='PCN-Direct-Puncture-Set' value='Place Order'>
</form>
            </div>
        </div>
        <!-- /.row -->

        <hr>
 <!-- Project Four -->
        <div class="row">
            <div class="col-md-7">
                
                    <img class="img-responsive img-hover" src="
                    <?php 

$res = $conn->query("Select * from info where name='Malecot Direct Puncture Set'");
while($row=$res->fetch_assoc())
    {   
$cell1=$row['image'];
echo $cell1;
}?>
" alt="">
                
            </div>
            <div class="col-md-5">
                <h3>
                     <?php 

$res = $conn->query("Select * from info where name='Malecot Direct Puncture Set'");
while($row=$res->fetch_assoc())
    {   
$cell1=$row['name'];
echo $cell1;
}?>

                </h3>
                <h4></h4>
                <p>


<?php 

$res = $conn->query("Select * from info where name='Malecot Direct Puncture Set'");
while($row=$res->fetch_assoc())
    {   
$cell1=$row['description'];
echo $cell1;
}?>

</p>
                 <form action="order.php" method='post'>
    <input  type="submit" class="btn btn-primary" name='Malecot-Direct-Puncture-Set' value='Place Order'>
</form>
            </div>
        </div>
        <!-- /.row -->

        <hr>
         <!-- Project Five -->
        <div class="row">
            <div class="col-md-7">
                
                    <img class="img-responsive img-hover" src="
<?php 

$res = $conn->query("Select * from info where name='PCN Malecot Catheter'");
while($row=$res->fetch_assoc())
    {   
$cell1=$row['image'];
echo $cell1;
}?>

                    " alt="">
                
            </div>
            <div class="col-md-5">
                <h3>
                     <?php 

$res = $conn->query("Select * from info where name='PCN Malecot Catheter'");
while($row=$res->fetch_assoc())
    {   
$cell1=$row['name'];
echo $cell1;
}?>



                </h3>
                <h4></h4>
                <p>
                

<?php 

$res = $conn->query("Select * from info where name='PCN Malecot Catheter'");
while($row=$res->fetch_assoc())
    {   
$cell1=$row['description'];
echo $cell1;
}?>


</p>
                <form action="order.php" method='post'>
    <input  type="submit" class="btn btn-primary" name='PCN-Malecot-Catheter' value='Place Order'>
</form>
            </div>
        </div>
        <!-- /.row -->

        <hr>

<!-- Project Five -->
        <div class="row">
            <div class="col-md-7">
                
                    <img class="img-responsive img-hover" src="
<?php 

$res = $conn->query("Select * from info where name='PCN Malecot Set'");
while($row=$res->fetch_assoc())
    {   
$cell1=$row['image'];
echo $cell1;
}?>


                    " alt="">
                
            </div>
            <div class="col-md-5">
                <h3>
                    
 <?php 

$res = $conn->query("Select * from info where name='PCN Malecot Set'");
while($row=$res->fetch_assoc())
    {   
$cell1=$row['name'];
echo $cell1;
}?>


                </h3>
                <h4></h4>
                <p>
<?php 

$res = $conn->query("Select * from info where name='PCN Malecot Set'");
while($row=$res->fetch_assoc())
    {   
$cell1=$row['description'];
echo $cell1;
}?>

                   
</p>
       <form action="order.php" method='post'>
    <input  type="submit" class="btn btn-primary" name='PCN-Malecot-Set' value='Place Order'>
</form>
            </div>
        </div>
        <!-- /.row -->

        <hr>



        <!-- Pagination -->
        <div class="row text-center">
            <div class="col-lg-12">
                <ul class="pagination">
                    <li>
                        <a href="ProductUroworld1.php">&laquo;</a>
                    </li>
                    <li >
                        <a href="ProductUroworld1.php">1</a>
                    </li>
                    <li class="active">
                        <a href="#">2</a>
                    </li>
                    <li>
                        <a href="ProductUroworld3.php">3</a>
                    </li>
                    <li>
                        <a href="ProductUroworld4.php">4</a>
                    </li>
                    <li>
                        <a href="ProductUroworld5.php">5</a>
                    </li>
                    <li>
                        <a href="ProductUroworld3.php">&raquo;</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /.row -->

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
