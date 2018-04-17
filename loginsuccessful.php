<!DOCTYPE html>
<html>
	<head>
		<link rel = "stylesheet" type="text/css" href="../style.css" >
		<title> HealthCare DB</title>
		<h1> Successful Login </h1>
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
