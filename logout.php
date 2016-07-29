<?php
session_start();
if(session_destroy()) // Destroying All Sessions
{
header("Location: homepage.php"); // Redirecting To Home Page
}
?>