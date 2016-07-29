<?php session_start(); ?> 
<html>
<head>

 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">


	<title>Login </title>


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
             <div>
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="register.php">Register</a>
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
                    

            </div>
            
        </div>
        <!-- /.container -->
    </nav>

<div class="row" style="padding-top:100px"> 
           <div class="col-md-4">

            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3> Login</h3>
                    </div>
                    <div class="panel-body" style="padding-left:20%">
    



<form action= 'login.php' method = 'post' >
	<p><strong style="padding-right: 15px"> Username :</strong>	
	<input type='text' name='username' placeholder='username' value=
	'<?php 
	if(isset($_POST['username'])) 
	echo htmlspecialchars($_POST['username']);
	?>' 
	 /></p>
	</br></br>
	<p><strong style="padding-right: 15px"> Password :</strong>
	<input type ='password' name='password' placeholder='password' >
	</br></br>
	</p>
	<div style="padding-left: 25%">
	<input name='loginbtn' type='submit' value='LOG IN'>
    
    <button type="button" id="myBtn"> Forgot your password?</button>



	</div>
</form>
</div>
                </div>
            </div>
            <div class="col-md-3" >
                
            </div>
        </div>
<div class="modal fade" id="myModal" role="dialog" style="color:#333" "background-color:#FFFFFF">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4><span class="glyphicon glyphicon-lock"></span> Forgot your Password</h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          <form role="form" action="mailforgot.php" method='post'>
            <div class="form-group" >
              <label for="usrname"> Name :</label>
              <input type="text" class="form-control" id="usrname" placeholder="Enter Your Name">
            </div>
            
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Email id</label>
              
              <input type="text" class="form-control" id="emailid" name="emailid" placeholder="Enter Email">
                
            </div>


            <div class="form-group">
            <input  type="submit" class="btn btn-primary" value='Send Password via Mail'>
                           <!-- <button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Get Password</button> -->
          
        </div>

</form>
</div>

      </div>
      
    </div>
  </div> 
</div>







<?php
$error="";
if(isset($_POST['username']) && isset($_POST['password'])){

 
$us= $_POST['username'];
		$host="localhost"; //or the web server
		$username="root";
		$password="";
		$database ="anand";
		
		$con = new mysqli($host , $username, $password, $database);
		// check connection
		if($con->connect_error)
		{
			trigger_error('DB connection failed: '.
			$con->connect_error, E_USER_ERROR);
		}
		else
			{
				echo "Database connected successfully"."</br>";
			}
		
		$res = $con->query("select * from anand where myname ='$us'");
		echo $us;
		if($res->num_rows==0)
		{
			echo "Invalid Username";
		}
		
		while($row=$res->fetch_assoc())
		{	
			$p = $row['mypass'];
            $e = $row['emailid'];
			if(  $p==$_POST['password'])
			{
                $_SESSION['login']=true;
				$_SESSION['username']=$us;
                $_SESSION['mailid']=$e;
				   echo '<script>window.location.assign("mailer1.php");</script>';
                
		}
			else
			{	
		$error.="Invalid Password";
				echo "<script>
alert(\"$error\"); 
</script>";
			}	
		
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
<script>
$(document).ready(function(){
    $("#myBtn").click(function(){
        $("#myModal").modal();
    });

});
</script>
</body>
</html>