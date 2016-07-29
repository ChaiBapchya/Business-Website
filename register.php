<?php session_start(); ?> 
<html>
<head><meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">


	<title>Register</title>

 <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <a class="navbar-brand" href="homepage.php">Baleri Enterprises</a>
            </div>
             <div >
                <ul class="nav navbar-nav navbar-right">
                <li>
                        <a href="login.php">Login</a>
                    </li>
                    
                    <li>
                        <a href="about.php">About Us</a>
                    </li>
                   
                    <li class="dropdown">
                        <a href="" class="dropdown-toggle" data-toggle="dropdown">Our Products <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="ProductUroworld.php">Uroworld</a>
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
                    

            </div>
           
        </div>
        <!-- /.container -->
    </nav>

<div class="row" style="padding-top:100px"> 
           <div class="col-md-4">

            </div>
            <div class="col-md-5">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3> Register Here</h3>
                    </div>
                    <div class="panel-body">

<form action= '' method = 'post' >
<div style="padding-left:20%">
    <p><strong style="padding-right: 15px"> Username :</strong>
	<input type ='text' name='username' id='username' placeholder='username'
	value=
	'<?php 
	 
	if(isset($_POST['username'])&&preg_match('/^[A-z]+$/',$_POST['username'])) 
	echo htmlspecialchars($_POST['username']);
	?>' 
	
	>
	</p>
	</br></br>

	<p><strong style="padding-right: 15px"> Password :</strong>
	<input type ='password' name='password' placeholder='password' 
	>
	</strong></p>
	</br></br>

	<p><strong style="padding-right: 30px"> Email-Id :</strong>
	<input type ='email' name='emailid' placeholder='emailid'
value=
	'<?php 
	if(isset($_POST['emailid'])) 
	echo htmlspecialchars($_POST['emailid']);
	?>' 
		>
		</strong></p>
	</br></br>

	<p><strong style="padding-right: 5px"> Street name :</strong>
	<input type ='text' name='street' placeholder='street' 
	value=
	'<?php 
	if(isset($_POST['street'])&&preg_match('/^[A-z]+$/',$_POST['street'])) 
	echo htmlspecialchars($_POST['street']);
	?>' 
	></strong></p>
	</br></br>
	
	<p><strong style="padding-right: 55px"> City :</strong>
	<select name='city'
	value='none' selected='selected' 
	>
	
  <option value="Mumbai" <?php if(isset($_POST['city'])&&$_POST['city'] == 'Mumbai') { ?> selected <?php } ?>>Mumbai</option>
  <option value="Chennai"<?php if(isset($_POST['city'])&&$_POST['city'] == 'Chennai') { ?> selected <?php } ?>>Chennai</option>
  <option value="Delhi"<?php if(isset($_POST['city'])&&$_POST['city'] == 'Delhi') { ?> selected <?php } ?>>Delhi</option>
  <option value="Kolkata"<?php if(isset($_POST['city'])&&$_POST['city'] == 'Kolkata') { ?> selected <?php } ?>>Kolkata</option>
</select></strong></p>
	</br></br>

	<p><strong style="padding-right: 45px">State :</strong>
	<select name='state'
	value='none' selected='selected' >
  <option value="Maharashtra"<?php if(isset($_POST['state'])&&$_POST['state'] == 'Maharashtra') { ?> selected <?php } ?>>Maharashtra</option>
  <option value="Gujarat"<?php if(isset($_POST['state'])&&$_POST['state'] == 'Gujarat') { ?> selected <?php } ?>>Gujarat</option>
  <option value="Kerala"<?php if(isset($_POST['state'])&&$_POST['state'] == 'Kerala') { ?> selected <?php } ?>>Kerala</option>
  <option value="Rajasthan"<?php if(isset($_POST['state'])&&$_POST['state'] == 'Rajasthan') { ?> selected <?php } ?>>Rajasthan</option>
</select></strong></p>
	</br></br>

	<p><strong style="padding-right: 25px"> Country :</strong>
	<input type ='text' name='country' placeholder='country' value='India'>
	</br></br></strong></p>
	
	<p><strong style="padding-right: 25px"> Pincode :</strong>
	<input type ='text' name='pincode' placeholder='pincode'
	value=
	'<?php 
	if(isset($_POST['pincode'])) 
	echo htmlspecialchars($_POST['pincode']);
	?>' 
	></strong></p>
	</br></br>
	
	<div style="padding-left:30%">
	<input name='loginbtn' type='submit' value='Register'>
</div>
</div>
</form>

 </div>
                </div>
            </div>
            <div class="col-md-3" >
                
            </div>
        </div>
        <?php
if(isset($_POST['username'])&&isset($_POST['emailid'])&&isset($_POST['password'])&&isset($_POST['street'])&&isset($_POST['city'])&&isset($_POST['state'])&&isset($_POST['country'])&&isset($_POST['pincode']))
{
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
$us=$_POST['username'];
$eid=$_POST['emailid'];
$pas=$_POST['password'];
$add=$_POST['street'];
$city=$_POST['city'];
$state=$_POST['state'];
$country=$_POST['country'];
$pincode=$_POST['pincode'];
$error="";
$valid=1;
if(!preg_match('/^[A-z]+$/',$us))
{
	$error.="invalid username \\n";
	$valid=false;
}
if(!preg_match('/^[A-z]+$/',$add))
{
	$error.="invalid street \\n";
	$valid=false;
}
if(!preg_match('/^[A-z]+$/',$city))
{
	$error.="invalid city \\n";
	$valid=false;
}
if(!preg_match('/^[A-z]+$/',$state))
{
	$error.="invalid state \\n";
	$valid=false;
}

if(!preg_match('/^[A-z]+$/',$country))
{
	$error.="invalid country \\n";
	$valid=false;
}
if(!preg_match('/^[0-9]{6}$/',$pincode))
{
	$error.="invalid pincode \\n";
	$valid=false;
}
if($valid == 1) {
	$sql = 	"INSERT INTO anand (myname,mypass,emailid,street,city,state,country,pincode) VALUES ('$us','$pas','$eid','$add','$city','$state','$country','$pincode')";
$valid=true;

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$res = $conn->query("select * from anand");
		if($res->num_rows==0)
		{
			echo "Database is empty";
		}
}else {
	echo "<script>alert(\"$error\");</script>";
}
$conn->close();
if($valid)
{
 $_SESSION['register'] = $valid;
 $_SESSION['mailid']= $eid;
 $_SESSION['username']=$us;
 echo "<script>alert('Registered successfully');</script>";
  }
if($valid)
{
	echo '<script>window.location.assign("mailregister.php");</script>';
	
}
}

?>
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

    <!-- Script to Activate the Carousel -->

</body>

</html>