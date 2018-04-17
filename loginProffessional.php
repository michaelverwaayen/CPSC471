<?php 
$link = mysqli_connect("localhost","root", "root", "CPSC471");
if(!$link)
{
	die('Cannot connect'. mysqli_error($link));
}
if(isset($_POST['submit']))
{
	$username = $_post['username'];
	$password = $_post['password'];
	
	if(empty($uid) || empty($password))
	{
		header("Location: ../signup.php<signup=empty");
	}
	else
	{
		
		$query = "(SELECT * FROM HEALTHCARE_PRO
		WHERE ( NURSE.ncredencials =$username AND NURSE.password = $password AND 				HEALTHCARE_PRO=NURSE.hpclearance ) OR	
		(DOCTORS.dcredencials =$username AND DOCTORS.password = $password AND 				HEALTHCARE_PRO.hpclearance=DOCTORS.hpclearance) OR	
		(PHARMACIST.phcredencials =$username AND PHARMACIST.password = $password AND 				HEALTHCARE_PRO.hpclearance=PHARMACIST.hpclearance ))";

		$result = mysql_query($link,$sql);
		$failire = mysql_num_rows($result);
		if($failure < 1)
		{
				header("Location: ../learnphp.php?login=sorry user or password wrong");
				exit();
		}
		else
		{
			if($row = mysql_fetch_assoc($result))
			{

					$SESSION['username'] = $row['ucredentials'];
					$SESSION['password'] = $row['upassword'];
				//WILL NEED TO CHANGE SOON WHEN ON DB 
					header(("Location: localhost:8080/frontend/loginsuccessfulP.php"));
					exit();
			}
		}
	}
}
else
{
	header("Location: ../learnphp.php?login=");
	exit();
}
mysqli_close($link);
?>
