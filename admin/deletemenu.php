<?php
session_start();
include 'connection.php';
// Check if the user is logged in
if (!isset($_SESSION['email'])) {
    // If not logged in, redirect to the login page
    header("Location: index.php");
    exit;

$id = $_GET["delid"];
$exe = $con->query("delete from mainfood where id='$id'");
if($exe)
{
	header('location:viewsub.php');
}
else
{
	echo "Something went wrong.";
}



?>