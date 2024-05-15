<?php

$con = new mysqli("localhost","root", "", "the3rdstreet");
$errno =$con->connect_errno;
if($errno!=0)
{
	echo $con->connect_error;
	exit;
}
?>