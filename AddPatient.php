<?php
$link = mysqli_connect("localhost","root", "", "CPSC471");

if(!$link)
{
	die('Unable to connect', mysqli_error($link));
}

$query = "SELECT user.saname FROM HEALTHCARE_SYSTEM_ADMIN AS user WHERE user.saname = @uadmincred AND user.apassword = @upasword;".
$query2 = "INSERT INTO HEALTHCARE_SYSTEM_USER VALUES ( @uacredentials,@drug_,@record,@diagrarecord, @physio_cred, @name,@date,@type,@equipment,@upassword FROM HEALTHCARE_SYSTEM_USER AS users WHERE NOT IN (HEALTHCARE_SYSTEM_USER.ucrednetials = @username AND @acred != null);".
if(mysqli_query($link,$query) === TRUE)
{
	if(mysqli_query($link,$query2)  === TRUE)
	{
		echo "NEW RECORD CREATED SUCCESSFULLY ";
		
	}
	else
	{
		
		echo "ERROR:" . $query2 . "<br>" . $link -> error;
	}
	
}
else
{
	echo "ERROR: root pass or user incorreect";
	
}
mysqli_close($link);
//https://www.w3schools.com/php/php_mysql_insert.asp
?>

