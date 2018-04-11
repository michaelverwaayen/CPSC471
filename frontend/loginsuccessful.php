<!DOCTYPE html>
<html>
	<head>
		<title> HealthCare </title>
		<h1> Log in successful </h1>
	</head>
</html>
<?php
$link = mysqli_connect("localhost","root", "", "CPSC471");
if(!$link)
{
	die('Cannot connect'. mysqli_error($link);
	
}
echo "Information we have about you (the patient) <br>";
include ('GetPatient.php');	    
	    
	    

mysqli_close($link);
?>
