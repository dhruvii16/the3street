<?php
include 'connection.php';
$id = $_GET["delofferid"];
$exe = $con->query("delete from offer where id='$id'");
if($exe)
{
	header('location:viewoffer.php');
}
else
{
	echo "Something went wrong.";
}



?>