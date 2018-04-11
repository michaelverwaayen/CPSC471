<?php
$link = mysqli_connect("localhost","root", "", "CPSC471");
if(!$link)
{
	die('Cannot connect'. mysqli_error($link);
	
}
$query = =”SELECT  USER. * FROM USER.HEALTHCARE_SYSTEM_USER AS USER, DOCTOR AS D, DOCTORS_HAVE AS H WHERE $query5=D.hpclearance AND USER.ucredentials=H.ucredentials  AND H.dcredentials =D.dcredentials;”
$result = mysqli_query($link, $query);

if(mysqli_num_rows($result) > 0) 
{
	while($row = mysqli_fetch_assoc($result))
	{
		echo "id: " . $row["uacredential"]. " drug: " . $row["drug"] " Name: " . $row["name"] . "<br>";		
	}
}
else
{
	echo "Doctor has 0 patients";
}


mysqli_close($link);
?>
