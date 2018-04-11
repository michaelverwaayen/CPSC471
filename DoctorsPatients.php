<?php
$link = mysqli_connect("localhost","root", "", "CPSC471");
if(!$link)
{
	die('Cannot connect'. mysqli_error($link);
	
}
$query5 = “SELECT PRO.hpclearence  FROM HEALTHCARE_PROFECINALS AS PRO, DOCTORS AS D, PHARMACIST AS PH,NURSE AS N, PHYSIOTHERAPIST AS PY
WHERE ( N.ncredencials =@USERNAME AND N.password = @PASSWORD AND 				PRO.hpclearance=N.hpclearance ) OR	
	(D.dcredencials =@USERNAME AND D.password = @PASSWORD AND 				PRO.hpclearance=D.hpclearance) OR	
	(PH.phcredencials =@USERNAME AND PH.password = @PASSWORD AND 				PRO.hpclearance=PH.hpclearance ) OR 
	(PY.pycredencials =@USERNAME AND PY.password = @PASSWORD AND 				PRO.hpclearance=PY.hpclearance );”

$query = =”SELECT  USER. * FROM USER.HEALTHCARE_SYSTEM_USER AS USER, DOCTOR AS D, DOCTORS_HAVE AS H WHERE $query5=D.hpclearance AND USER.ucredentials=H.ucredentials  AND H.dcredentials =D.dcredentials;”
$result = mysqli_query($link, $query);

if(mysqli_num_rows($result) > 0) 
{
	echo "<table border = '1' > "
	while($row = mysqli_fetch_assoc($result))
	{
		echo "<tr>";
		echo "<td align='center'> id: " . $row["uacredential"]. " drug: " . $row["drug"] " Name: " . $row["name"] . "<br> </td>";		
		echo "</tr>";
	}
	echo "</table> "
}
else
{
	echo "Doctor has 0 patients";
}


mysqli_close($link);
?>
