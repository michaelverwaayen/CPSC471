<?php
$link = mysqli_connect("localhost","root", "", "CPSC471");

if(!$link)
{
	die('Cannot connect'. mysqli_error($link);
	
}

if(isset($_POST['submit']))
{
	$uid = $_post['uid'];
	$password = $_post['password'];
	
	if(empty($uid) || empty($password))
	{
		
	}
	else
	{
		$query = “SELECT USER.ucredentials FROM HEALTHCARE_SYSTEM_USER AS USER WHERE USER. ucredentials = @USERNAME  AND USER.upassword = @PASSWORD”
		$result = mysqli_query($link,$query);
		$failure = mysqli_num_rows($result);
		if($failure < 1)
		{
				header("Location: ../learnphp.php?login=sorry user or password wrong");
				exit(0);
		}
		else
		{
			if($row = mysqli_fetch_assoc($result))
			{
				$check =password_verify($password,$row['@PASSWORD']);
				if($check == false)
				{
					header("Location: ../learnphp.php?login=sorry user or password wrong");
					exit(0);
				}
				elseif($check == true)
				{
					$SESSION['u_id'] = $row['ucredentials'];
					$SESSION['u_first'] = $row['@Name'];
				}
				else{
					header("Location: ../learnphp.php?login=sorry user or password wrong");
					exit(0);	
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
}
