<?php
$link = mysqli_connect("localhost","root", "", "CPSC471");

if(!$link)
{
	die('Cannot connect'. mysqli_error($link);
	
}

if(isset($_POST['submit']))
{
	include db.php;
	
	$uid = $_post['uid'];
	$password = $_post['password'];
	
	if(empty($uid) || empty($password))
	{
		
	}
	else
	{
		$sql = "SELECT * FROM users WHERE user_uid = '$uid'";
		$result = mysqli_query($conn,$sql);
		$failire = mysqli_num_rows($result);
		if($failure < 1)
		{
				header("Location: ../learnphp.php?login=sorry user or password wrong");
				exit(0);
		}
		else
		{
			if($row = mysqli_fetch_assoc($result))
			{
				$check =password_verify($pasword,$row['user_pwd']);
				if($check == false)
				{
					header("Location: ../learnphp.php?login=sorry user or password wrong");
					exit(0);
				}
				elseif($check == true)
				{
					$SESSION['u_id'] = $row['user_id'];
					$SESSION['u_first'] = $row['user_first'];
					$SESSION['u_last'] = $row['user_last'];
					$SESSION['u_email'] = $row['user_email'];
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
}
