<?php
session_start();
if(isset($_POST['emailid']))
  {
$email=$_POST["emailid"];
//echo $email;
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

  
$res = $conn->query("Select * from anand where emailid='$email'");
while($row=$res->fetch_assoc())
    {   
    $uname=$row['myname'];
    $upass=$row['mypass'];
    $ustreet=$row['street'];
    $ucity=$row['city'];
    $ustate=$row['state'];
    $upin=$row['pincode'];
    //echo $uname." ".$upass;
  }


//Load PHPMailer dependencies
require_once 'PHPMailerAutoload.php';
require_once 'class.phpmailer.php';
require_once 'class.smtp.php';

/* CONFIGURATION */
$crendentials = array(
    'email'     => 'comps2017@gmail.com',    //Your GMail adress
    'password'  => 'spcomps2017'               //Your GMail password
    );

/* SPECIFIC TO GMAIL SMTP */ 
$smtp = array(

'host' => 'smtp.gmail.com',
'port' => 587,
'username' => $crendentials['email'],
'password' => $crendentials['password'],
'secure' => 'tls' //SSL or TLS

);

/* TO, SUBJECT, CONTENT */
$to         = $_POST['emailid']; //The 'To' field
$subject    = 'Forgotten Password';

$content    = 'You forgot your password.<br>Your account details are:<br> You name is '.$uname." <br> Your password is ".$upass."<br>Your street is ".$ustreet."<br>Your city is ".$ucity."<br>Your state is ".$ustate."<br>Your pincode is ".$upin;



$mailer = new PHPMailer();

//SMTP Configuration
$mailer->isSMTP();
$mailer->SMTPAuth   = true; //We need to authenticate
$mailer->Host       = $smtp['host'];
$mailer->Port       = $smtp['port'];
$mailer->Username   = $smtp['username'];
$mailer->Password   = $smtp['password'];
$mailer->SMTPSecure = $smtp['secure']; 

//Now, send mail :
//From - To :
$mailer->From       = $crendentials['email'];
$mailer->FromName   = 'BALERI ENTERPRISES'; //Optional
$mailer->addAddress($to);  // Add a recipient

//Subject - Body :
$mailer->Subject        = $subject;
$mailer->Body           = $content;
$mailer->isHTML(true); //Mail body contains HTML tags
  header("Location:homepage.php");
//Check if mail is sent :
if(!$mailer->send()) {
    echo 'Error sending mail : ' . $mailer->ErrorInfo;
} else {
  header("Location:homepage.php");
    //echo '<script>window.location.assign("login.php");</script>';
}
}

?>