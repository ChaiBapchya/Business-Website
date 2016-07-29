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
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="homepage.html">UROworld</a>
            </div>
             <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="about.html">About Us</a>
                    </li>
                    <li>
                        <a href="services.html">Services</a>
                    </li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Our Products <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="portfolio-1-col.html">Uroworld</a>
                            </li>
                            <li>
                                <a href="portfolio-2-col.html">Karlstorz</a>
                            </li>
                            <li>
                                <a href="portfolio-3-col.html">Mindray</a>
                            </li>
                            
                           </ul>
                    </li>
                    <li>
                        <a href="contact.html">Contact Us</a>
                    </li>
                </ul>
               </div>


            </div>
            <!-- /.navbar-collapse -->
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
                    <li><a href="homepage.html">Home</a>
                    </li>
                    <li class="active">Uroworld</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-md-7">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-hover" src=

"
<?php 

$res = $conn->query("Select * from info where name='Bi-polar Loop'");
while($row=$res->fetch_assoc())
    {   
$cell1=$row['image'];
echo $cell1;
}?>
"
                     alt="bipolar loop">
                </a>
            </div>
            <div class="col-md-5">
                <h3>
<?php 

$res = $conn->query("Select * from info where name='Bi-polar Loop'");
while($row=$res->fetch_assoc())
    {   
$cell1=$row['name'];
echo $cell1;
}?>
                </h3>
                <h4></h4>
                <p>
<?php 

$res = $conn->query("Select * from info where name='Bi-polar Loop'");
while($row=$res->fetch_assoc())
    {   
$cell1=$row['description'];
echo $cell1;
}?>

</p>
                <a class="btn btn-primary" href="portfolio-item.html">Place Order</i></a>
            </div>
        </div>
        <!-- /.row -->

        <hr>
        <div class="row">
            <div class="col-md-7">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-hover" src=
"
<?php 

$res = $conn->query("Select * from info where name='Plasma Button Electrode'");
while($row=$res->fetch_assoc())
    {   
$cell1=$row['image'];
echo $cell1;
}?>
"

                     alt="plasma button electrode">
                </a>
            </div>
            <div class="col-md-5">
                <h3>
                    <?php 

$res = $conn->query("Select * from info where name='Plasma Button Electrode'");
while($row=$res->fetch_assoc())
    {   
$cell1=$row['name'];
echo $cell1;
}?>






                </h3>
                <h4></h4>
                <p>
<?php 

$res = $conn->query("Select * from info where name='Plasma Button Electrode'");
while($row=$res->fetch_assoc())
    {   
$cell1=$row['description'];
echo $cell1;
}?>




</p>
                <a class="btn btn-primary" href="portfolio-item.html">Place Order</i></a>
            </div>
        </div>
        <!-- /.row -->

        <hr>
         <!-- Project Three -->
        <div class="row">
            <div class="col-md-7">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-hover" src=

"

<?php 

$res = $conn->query("Select * from info where name='TURP Loop Electrode'");
while($row=$res->fetch_assoc())
    {   
$cell1=$row['image'];
echo $cell1;
}?>

"

                     alt="">
                </a>
            </div>
            <div class="col-md-5">
                <h3>
                    <?php 

$res = $conn->query("Select * from info where name='TURP Loop Electrode'");
while($row=$res->fetch_assoc())
    {   
$cell1=$row['name'];
echo $cell1;
}?>



                </h3>
                <h4></h4>
                <p>

<?php 

$res = $conn->query("Select * from info where name='TURP Loop Electrode'");
while($row=$res->fetch_assoc())
    {   
$cell1=$row['description'];
echo $cell1;
}?>

</p>
                <a class="btn btn-primary" href="portfolio-item.html">Place Order</i></a>
            </div>
        </div>
        <!-- /.row -->

        <hr>
 <!-- Project Four -->
        <div class="row">
            <div class="col-md-7">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-hover" src="
                    <?php 

$res = $conn->query("Select * from info where name='Ureteral Double J Stent'");
while($row=$res->fetch_assoc())
    {   
$cell1=$row['image'];
echo $cell1;
}?>
" alt="">
                </a>
            </div>
            <div class="col-md-5">
                <h3>
                     <?php 

$res = $conn->query("Select * from info where name='Ureteral Double J Stent'");
while($row=$res->fetch_assoc())
    {   
$cell1=$row['name'];
echo $cell1;
}?>

                </h3>
                <h4></h4>
                <p>


<?php 

$res = $conn->query("Select * from info where name='Ureteral Double J Stent'");
while($row=$res->fetch_assoc())
    {   
$cell1=$row['description'];
echo $cell1;
}?>

</p>
                <a class="btn btn-primary" href="portfolio-item.html">Place Order</i></a>
            </div>
        </div>
        <!-- /.row -->

        <hr>
         <!-- Project Five -->
        <div class="row">
            <div class="col-md-7">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-hover" src="
<?php 

$res = $conn->query("Select * from info where name='Urethral Stent'");
while($row=$res->fetch_assoc())
    {   
$cell1=$row['image'];
echo $cell1;
}?>

                    " alt="">
                </a>
            </div>
            <div class="col-md-5">
                <h3>
                     <?php 

$res = $conn->query("Select * from info where name='Urethral Stent'");
while($row=$res->fetch_assoc())
    {   
$cell1=$row['name'];
echo $cell1;
}?>



                </h3>
                <h4></h4>
                <p>
                

<?php 

$res = $conn->query("Select * from info where name='Urethral Stent'");
while($row=$res->fetch_assoc())
    {   
$cell1=$row['description'];
echo $cell1;
}?>


</p>
                <a class="btn btn-primary" href="portfolio-item.html">Place Order</i></a>
            </div>
        </div>
        <!-- /.row -->

        <hr>

<!-- Project Five -->
        <div class="row">
            <div class="col-md-7">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-hover" src="
<?php 

$res = $conn->query("Select * from info where name='Endopyelotomy Stent'");
while($row=$res->fetch_assoc())
    {   
$cell1=$row['image'];
echo $cell1;
}?>


                    " alt="">
                </a>
            </div>
            <div class="col-md-5">
                <h3>
                    
 <?php 

$res = $conn->query("Select * from info where name='Endopyelotomy Stent'");
while($row=$res->fetch_assoc())
    {   
$cell1=$row['name'];
echo $cell1;
}?>


                </h3>
                <h4></h4>
                <p>
<?php 

$res = $conn->query("Select * from info where name='Endopyelotomy Stent'");
while($row=$res->fetch_assoc())
    {   
$cell1=$row['description'];
echo $cell1;
}?>

                   
</p>
                <a class="btn btn-primary" href="portfolio-item.html">Place Order</i></a>
            </div>
        </div>
        <!-- /.row -->

        <hr>



        <!-- Pagination -->
        <div class="row text-center">
            <div class="col-lg-12">
                <ul class="pagination">
                    <li>
                        <a href="#">&laquo;</a>
                    </li>
                    <li class="active">
                        <a href="#">1</a>
                    </li>
                    <li>
                        <a href="#">2</a>
                    </li>
                    <li>
                        <a href="#">3</a>
                    </li>
                    <li>
                        <a href="#">4</a>
                    </li>
                    <li>
                        <a href="#">5</a>
                    </li>
                    <li>
                        <a href="#">&raquo;</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
        </footer>

</div>
 <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
