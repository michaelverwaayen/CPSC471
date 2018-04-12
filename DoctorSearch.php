<?php
$query = $_GET['query']; 
$doctor = $SESSION['username']; // pass in the credentials for the signed-in doctor

// get query from the frontend

$link = mysqli_connect("localhost","root", "", "CPSC471");
if(!$link)
{
	die('Cannot connect'. mysqli_error($link));
	
}

$query = htmlspecialchars($query); 
$query = mysql_real_escape_string($query);

// make sure no funny business is going on

mysql_select_db("DB NAME HERE") or die(mysql_error());

$result = mysql_query("USER.* FROM USER.HEALTHCARE_SYSTEM_USER AS USER, DOCTOR AS D, DOCTORS_HAVE AS H
            WHERE (`USER.name`='$query') OR (`USER.ucredentials`='$query') AND USER.ucredentials=H.ucredentials AND H.dcredentials =D.dcredentials AND D.dcredentials='$doctor'") or die(mysql_error());
			
// search for user's name or ID, and check that the signed-in doctor has that patient assigned to them
			
if(mysqli_num_rows($result) > 0) 
{
	echo "<table border = '1' > ";
	while($row = mysqli_fetch_assoc($result))
	{
		echo "<tr>";
		echo "<td align='center'> id: " . $row["uacredential"]. " drug: " . $row["drug"]. " Name: " . $row["name"] . "<br> </td>";		
		echo "</tr>";
	}
	echo "</table> ";
}
else
{
	echo "No patient found for '$query'";
}


mysqli_close($link);
?>
