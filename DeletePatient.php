<?php

$link = mysqli_connect("localhost","root", "", "CPSC471");

if(!$link)
{
	die('Unable to connect', mysqli_error($link));
}
$id = $_GET['id'];
$query = "DELETE FROM HEALTHCARE_SYSTEM_USER WHERE id = '$id'";

if(mysqli_query($link, $query)) 
{
	echo "Record deleted";
}
else
{
	echo "Error deleting record: " . mysqli_error($link);	
}

mysqli_close($link);

?>
