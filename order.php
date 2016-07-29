<?php
session_start();
if(!(isset($_SESSION['login'])))
{
echo "<script type='text/javascript'>alert('Please login in');</script>";
   echo '<script>window.location.assign("login.php");</script>';
}



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
	

if(isset($_POST['Bi-polar-Loop']))
{
$name='Bi-polar Loop';
$table='info';
echo "<script type='text/javascript'>alert('$name');</script>";
orderplace($name,$conn,$table);
}
if(isset($_POST['Plasma-Button-Electrode']))
{
$name='Plasma Button Electrode';
$table='info';
echo "<script type='text/javascript'>alert('$name');</script>";
orderplace($name,$conn,$table);
}
if(isset($_POST['TURP-Loop-Electrode']))
{
$name='TURP Loop Electrode';
$table='info';
echo "<script type='text/javascript'>alert('$name');</script>";
orderplace($name,$conn,$table);
}
if(isset($_POST['Ureteral-Double-J-Stent']))
{
$name='Ureteral Double J Stent';
$table='info';
echo "<script type='text/javascript'>alert('$name');</script>";
orderplace($name,$conn,$table);
}
if(isset($_POST['Urethral-Stent']))
{
$name='Urethral Stent';
$table='info';
echo "<script type='text/javascript'>alert('$name');</script>";
orderplace($name,$conn,$table);
}
if(isset($_POST['Endopyelotomy-Stent']))
{
$name='Endopyelotomy Stent';
$table='info';
echo "<script type='text/javascript'>alert('$name');</script>";
orderplace($name,$conn,$table);
}
if(isset($_POST['Ureteral-Balloon-Dilator']))
{
$name='Ureteral Balloon Dilator';
$table='info';
echo "<script type='text/javascript'>alert('$name');</script>";
orderplace($name,$conn,$table);
}
if(isset($_POST['Amplatz-Renal-Dilator-Set']))
{
$name='Amplatz Renal Dilator Set';
$table='info';
echo "<script type='text/javascript'>alert('$name');</script>";
orderplace($name,$conn,$table);
}
if(isset($_POST['Fascial-Dilator-Set']))
{
$name='Fascial Dilator Set';
$table='info';
echo "<script type='text/javascript'>alert('$name');</script>";
orderplace($name,$conn,$table);
}
if(isset($_POST['Ureteral-Dilator-Set']))
{
$name='Ureteral Dilator Set';
$table='info';
echo "<script type='text/javascript'>alert('$name');</script>";
orderplace($name,$conn,$table);
}
if(isset($_POST['Urethral-Dilator-Set']))
{
$name='Urethral Dilator Set';
$table='info';
echo "<script type='text/javascript'>alert('$name');</script>";
orderplace($name,$conn,$table);
}
if(isset($_POST['Nottingham-One-Step-Dilator']))
{
$name='Nottingham One Step Dilator';
$table='info';
echo "<script type='text/javascript'>alert('$name');</script>";
orderplace($name,$conn,$table);
}
if(isset($_POST['Initial-Puncture-Needle']))
{
$name='Initial Puncture Needle';
$table='info';
echo "<script type='text/javascript'>alert('$name');</script>";
orderplace($name,$conn,$table);
}
if(isset($_POST['Filiform-Urethral-Dilator']))
{
$name='Filiform Urethral Dilator';
$table='info';
echo "<script type='text/javascript'>alert('$name');</script>";
orderplace($name,$conn,$table);
}
if(isset($_POST['PCN-Drainage-Set']))
{
$name='PCN Drainage Set';
$table='info';
echo "<script type='text/javascript'>alert('$name');</script>";
orderplace($name,$conn,$table);
}
if(isset($_POST['Ureteral-Double-J-Stent-Open-Distal-Tip']))
{
$name='Ureteral Double J Stent Open Distal Tip';
$table='info';
echo "<script type='text/javascript'>alert('$name');</script>";
orderplace($name,$conn,$table);
}
if(isset($_POST['Metal-Dilator']))
{
$name='Metal Dilator';
$table='info';
echo "<script type='text/javascript'>alert('$name');</script>";
orderplace($name,$conn,$table);
}
if(isset($_POST['Screw-Dilator']))
{
$name='Screw Dilator';
$table='info';
echo "<script type='text/javascript'>alert('$name');</script>";
orderplace($name,$conn,$table);
}
if(isset($_POST['Ureteral-Catheter']))
{
$name='Ureteral Catheter';
$table='info';
echo "<script type='text/javascript'>alert('$name');</script>";
orderplace($name,$conn,$table);
}
if(isset($_POST['Dual-Lumen-Catheter']))
{
$name='Dual Lumen Catheter';
$table='info';
echo "<script type='text/javascript'>alert('$name');</script>";
orderplace($name,$conn,$table);
}
if(isset($_POST['Biopsy-Gun']))
{
$name='Biopsy Gun';
$table='info';
echo "<script type='text/javascript'>alert('$name');</script>";
orderplace($name,$conn,$table);
}
if(isset($_POST['Cysto-Catheter']))
{
$name='Cysto Catheter';
$table='info';
echo "<script type='text/javascript'>alert('$name');</script>";
orderplace($name,$conn,$table);
}
if(isset($_POST['Bladder-Evacuator']))
{
$name='Bladder Evacuator';
$table='info';
echo "<script type='text/javascript'>alert('$name');</script>";
orderplace($name,$conn,$table);
}
if(isset($_POST['PCN-Catheter']))
{
$name='PCN Catheter';
$table='info';
echo "<script type='text/javascript'>alert('$name');</script>";
orderplace($name,$conn,$table);
}
if(isset($_POST['PCN-Direct-Puncture-Set']))
{
$name='PCN Direct Puncture Set';
$table='info';
echo "<script type='text/javascript'>alert('$name');</script>";
orderplace($name,$conn,$table);
}
if(isset($_POST['Malecot-Direct-Puncture-Set']))
{
$name='Malecot Direct Puncture Set';
$table='info';
echo "<script type='text/javascript'>alert('$name');</script>";
orderplace($name,$conn,$table);
}
if(isset($_POST['PCN-Malecot-Catheter']))
{
$name='PCN Malecot Catheter';
$table='info';
echo "<script type='text/javascript'>alert('$name');</script>";
orderplace($name,$conn,$table);
}
if(isset($_POST['PCN-Malecot-Set']))
{
$name='PCN Malecot Set';
$table='info';
echo "<script type='text/javascript'>alert('$name');</script>";
orderplace($name,$conn,$table);
}
if(isset($_POST['Cysto-urethroscope-sheath']))
{
$name='Cysto-urethroscope-sheath';
$table='karlo';
echo "<script type='text/javascript'>alert('$name');</script>";
orderplace($name,$conn,$table);
}
if(isset($_POST['Surgical-Forceps']))
{
$name='Surgical Forceps';
$table='karlo';
echo "<script type='text/javascript'>alert('$name');</script>";
orderplace($name,$conn,$table);
}
if(isset($_POST['Optical-Forceps']))
{
$name='Optical Forceps';
$table='karlo';
echo "<script type='text/javascript'>alert('$name');</script>";
orderplace($name,$conn,$table);
}
if(isset($_POST['Urethral-Sheath']))
{
$name='Urethral Sheath';
$table='karlo';
echo "<script type='text/javascript'>alert('$name');</script>";
orderplace($name,$conn,$table);
}
if(isset($_POST['Visual-Obturators-Cystoscope-Adaptor']))
{
$name='Visual Obturators, Cystoscope Adaptor';
$table='karlo';
echo "<script type='text/javascript'>alert('$name');</script>";
orderplace($name,$conn,$table);
}
if(isset($_POST['FLEX-X2-URETHEROSCOPE']))
{
$name='FLEX X2 URETHEROSCOPE';
$table='karlo';
echo "<script type='text/javascript'>alert('$name');</script>";
orderplace($name,$conn,$table);
}
if(isset($_POST['MINI-PERC-(-Mini-Nephroscope-)']))
{
$name='MINI PERC ( Mini Nephroscope )';
$table='karlo';
echo "<script type='text/javascript'>alert('$name');</script>";
orderplace($name,$conn,$table);
}
if(isset($_POST['PCNL-(-Universal-Nephroscope-)']))
{
$name='PCNL ( Universal Nephroscope )';
$table='karlo';
echo "<script type='text/javascript'>alert('$name');</script>";
orderplace($name,$conn,$table);
}
if(isset($_POST['DC-8-Expm1']))
{
$name='DC-8 Expm1';
$table='mindray';
echo "<script type='text/javascript'>alert('$name');</script>";
orderplace($name,$conn,$table);
}
if(isset($_POST['DC-8m2']))
{
$name='DC-8m2';
$table='mindray';
echo "<script type='text/javascript'>alert('$name');</script>";
orderplace($name,$conn,$table);
}

if(isset($_POST['DC-70m3']))
{
$name='DC-70m3';
$table='mindray';
echo "<script type='text/javascript'>alert('$name');</script>";
orderplace($name,$conn,$table);
}

if(isset($_POST['DC-7m4']))
{
$name='DC-7m4';
$table='mindray';
echo "<script type='text/javascript'>alert('$name');</script>";
orderplace($name,$conn,$table);
}



function orderplace($name,$conn,$table)
{
$x= "Quantity available at the moment";  
$res = $conn->query("Select * from ".$table." where name='$name'");
while($row=$res->fetch_assoc())
    {   
$cell1=$row['quantity'];
$x .= $cell1;
}
 
$res = $conn->query("Select * from ".$table." where name='$name'");
while($row=$res->fetch_assoc())
    {   
$cell1=$row['price'];
$price=$row['price'];
$x.="\\n";
$x.=$cell1;
}

$x.=" is the price.Place an order?";

   echo '<script type="text/javascript">alert("' .$x. '");</script>';


$conn->query("update ".$table." set quantity=quantity-1 where name='$name'");

$res = $conn->query("Select * from ".$table." where name='$name'");

while($row=$res->fetch_assoc())
    {   
		$cell1=$row['quantity'];
	}

	$final1=$cell1."is the Quantity left.Congratulations,Order is Placed. ";
	$_SESSION["product"]=$name;
	$_SESSION["price"]=$price;
	echo '<script type="text/javascript">alert("'.$final1.'");</script>';

    
     echo '<script>window.location.assign("mailorderplace.php");</script>';
     //header('location:homepage.php');

}
?>