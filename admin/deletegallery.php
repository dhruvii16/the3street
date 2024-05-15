<?php
include 'connection.php';
$id = $_GET["delgalleryid"];
$exe = $con->query("delete from gallery where id='$id'");
if($exe)
{
	header('location:viewgallery.php');
}
else
{
	echo "Something went wrong.";
}



?>