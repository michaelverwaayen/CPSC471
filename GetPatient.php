<?php
$link = mysqli_connect("localhost","root", "", "CPSC471");

if(!$link)
{
	die('Unable to connect', mysqli_error($link));
}
?>

	$query2 = SELECT * FROM HEALTHCARE_SYSTEM_USER AS USER WHERE USER.ucredentials = “SELECT USER.ucredentials FROM HEALTHCARE_SYSTEM_USER AS USER WHERE USER. ucredentials = @USERNAME  AND USER.upassword = @PASSWORD”.
	$result = mysqli_query($link, $query2);
	echo "<table border='1'>";
	while($ROW = mysqli_fetch_assoc($result))
	{
		echo "<tr>";
		echo "<td align='center'> Name:" . HEALTCHCARE_SYSTEM_USER.ucredentials . " DrugRecord: " . HEALTHCARE_SYSTEM_USER.drugrecord . " Diag Record: " . HEALTHCARE_SYSTEM_USER.diagrecord . "<br> </td>"; 						
		echo "</tr>";				
					
	}
	echo "</table>;				
mysqli_close($link);
?>

