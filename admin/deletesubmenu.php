<?php
include 'connection.php';
$id = $_GET["delid"];
$exe = $con->query("delete from submenu where id='$id'");
if($exe)
{
	header('location:view.php');
}
else
{
	echo "Something went wrong.";
}



?>