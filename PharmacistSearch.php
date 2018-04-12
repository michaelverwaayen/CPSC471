<!DOCTYPE HTML>
< html >
<head>
	<title> Search PHARMA</title>
	<meta http-equiv="Content-Type" content = "test/html; charset=utf-8" /> 
</head>
<br>
</html>
<form action="search.php" method="GET">
	<input type="text" name="query" />
	<input type="submit" value="Search" />
</form>

<?php
$pharmacist = $SESSION['username']; // pass in the credentials for the signed-in doctor
$link = mysqli_connect("localhost","root", "", "CPSC471");
if(!$link)
{
	die('Cannot connect'. mysqli_error($link);
	
}
if(isset($_GET["search"]))
{
	$query = $_GET['query'];

	$result = mysql_query("SELECT USER. * FROM USER.HEALTHCARE_SYSTEM_USER AS USER, PHARMACIST AS PH WHERE('USER.name' = '$query') OR ('USER.ucredentials' = '$query') AND 
	USER.ucredentials=PH.dcredentials='$pharmacist";

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
		echo "No patient found for '$query'";
	}
}
mysqli_close($link);
?>
