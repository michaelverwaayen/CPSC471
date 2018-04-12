<!DOCTYPE html>
<html>
	<head>
		<title> HealthCare </title>
		<h1> Log in Proffessional </h1>
	</head>
</html>
<?php
$link = mysqli_connect("localhost","root", "", "CPSC471");
if(!$link)
{
	die('Unable to connect'. mysqli_error($link));
}
$query5 = "SELECT PRO.hpclearence  FROM HEALTHCARE_PROFECINALS AS PRO, DOCTORS AS D, PHARMACIST AS PH,NURSE AS N, PHYSIOTHERAPIST AS PY
WHERE ( N.ncredencials =@USERNAME AND N.password = @PASSWORD AND PRO.hpclearance=N.hpclearance ) OR	
	(D.dcredencials =@USERNAME AND D.password = @PASSWORD AND PRO.hpclearance=D.hpclearance) OR	
	(PH.phcredencials =@USERNAME AND PH.password = @PASSWORD AND PRO.hpclearance=PH.hpclearance ) OR 
	(PY.pycredencials =@USERNAME AND PY.password = @PASSWORD AND PRO.hpclearance=PY.hpclearance )";

if($N.credentials == $SESSION['username'])
{
	echo "NURSE TABLE <br>";
	include('NurseLogin.php');
}

if($D.credentials == $SESSION['username'])
{

	echo "DOCTOR TABLE <br>";
	include('DoctorPatients.php');
}

if($PH.credentials == $SESSION['username'])
{
	echo "PHARMACIST TABLE <br>";
	include('PharmacistLogin');
}



?>
