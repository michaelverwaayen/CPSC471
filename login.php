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
		header("Location: ../learnphp.php?login=");
	}
	else
	{
		$query = "SELECT * FROM users WHERE ucredentials = '$uid'";
		$result = mysql_query($link,$sql);
		$failire = mysql_num_rows($result);
		if($failure < 1)
		{
				header("Location: ../learnphp.php?login=sorry user or password wrong");
				exit(0);
		}
		else
		{
			if($row = mysql_fetch_assoc($result))
			{
				$check =password_verify($pasword,$row['upassword']);
				if($check == false)
				{
					header("Location: ../learnphp.php?login=sorry user or password wrong");
					exit(0);
				}
				elseif($check == true)
				{
					$SESSION['u_id'] = $row['ucredentials'];
					$SESSION['u_pass'] = $row['upassword'];

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
mysqli_close($link);
?>
