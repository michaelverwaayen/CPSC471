<?php
$link = mysqli_connect("localhost","root", "", "CPSC471");
if(!$link)
{
	die('Unable to connect', mysqli_error($link));
}
$query5= "SELECT PRO.hpclearence  FROM HEALTHCARE_PROFECINALS AS PRO, DOCTORS AS D, PHARMACIST AS PH,NURSE AS N, PHYSIOTHERAPIST AS PY
WHERE ( N.ncredencials =@USERNAME AND N.password = @PASSWORD AND 				PRO.hpclearance=N.hpclearance ) OR	
	(D.dcredencials =@USERNAME AND D.password = @PASSWORD AND 				PRO.hpclearance=D.hpclearance) OR	
	(PH.phcredencials =@USERNAME AND PH.password = @PASSWORD AND 				PRO.hpclearance=PH.hpclearance ) OR 
	(PY.pycredencials =@USERNAME AND PY.password = @PASSWORD AND 				PRO.hpclearance=PY.hpclearance );"

$query = ="SELECT  USER.drugrecord FROM HEALTHCARE_SYSTEM_USER AS USER, NURSE AS N, NURSE_TAKECARE AS T WHERE $query5=N.hpclearance AND USER.ucredentials=T.ucredentials  AND T.ncredentials =N.ncredentials;"
$result = mysqli_query($link, $query);
if( mysqli_num_rows($result) > 0 )
{
	//then u wanna show drug record with while loop 
	echo "<table border='1'>"; 
	while($row = mysqli_fetch_assoc($result))
	{
		echo "<tr>"; 
		echo "<td align='center'> id: " . $row["uacredential"] . "Drugs " . $row["drugrecord"] . "<br> </td>";
		echo "<tr>"; 
	}
	echo "</table>"; 
}
else 
{
	echo "You are currently not staffing this patient..."
}

mysqli_close($link);
?>
