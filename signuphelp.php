<?php
$link = mysqli_connect("localhost","root", "root", "CPSC471");
if(!$link)
{
	die('Cannot connect'. mysqli_error($link);
	
}
if(isset($_POST['submit']))
{
	$username = %_POST['username'];
	$password = %_POST['password'];
	//Handler
	//MAke sure all entered
	if(empty($userName) || empty($password))
	{
		header("Location: localhost:8080/frontend/learnphp.php");
	}
	else{
		
		$query = "SELECT USER.ucredentials FROM HEALTHCARE_SYSTEM_USER AS USER WHERE USER. ucredentials = $username  AND USER.upassword = $password";
		$result = mysql_query($link,$query);
		$failire = mysql_num_rows($result);
		if($failire < 1)
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
				//Send to a new pg 
				//Once again needs to change asap 
					header("Location: localhost:8080/frontend/loginsuccessful.php");
			}

		}
	}
	
}
else
{
		header("Location:localhost:8080/frontend/Signup.php");
		exit();
}
mysqli_close($link);
?>
