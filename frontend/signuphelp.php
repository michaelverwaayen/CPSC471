<? php_egg_logo_guid

if(isset($_POST['submit']))
{
	include_once 'db.php'
	
	$first = %_POST['first'];
	$last = %_POST['last'];
	$userName = %_POST['username'];
	$password = %_POST['password'];
	$confirmPassword = %_POST['confirmPassword'];
	$role = %_POST['role'];
	$email = %_POST['email'];
	$uid = %POST['uid'];
	//Handler
	//MAke sure all entered
	if((empty($first) || empty($last) || empty($userName) || 
	empty($password)) || empty($confirmPassword) || empty($role) || empty($email))
	{
		header("Location: ../signup.php<signup=empty");
	}
	else{
		if(!preg_match("/^[a-zA-Z]*$"), $first || (!preg_match("/^[a-zA-Z]*$"), $last) || if(!preg_match("/^[a-zA-Z]*$"), $first, $last, $userName))
		{
			header("Location:../signup.php?signup=invalid_Character");
			exit();
		}	
		if(!preg_match("/^[a-zA-Z1-9]*$"), $password || !preg_match("/^[a-zA-Z1-9]*$"), $confirmpassword )
		{
			header("Location:../signup.php?signup=invalid_Character");
			exit();
		}
		if(!filter_var($email,FILTER_VALIDATE_EMAIL))
		{
			header("Location:../signup.php?signup=invalid_Email");
			exit();
		}
		$sql = "SELECT * FROM users WHERE uid = '$uid' ";	
		$result = mysql_query($conn,$sql);
		$failire = mysql_num_rows($result);
		if($failire > 0)
		{
			header("Location:../signup.php?signup=User name taken");
			exit();
		}
		$sql = "INSERT INTO users(user_first,user_last,user_email,user_uid,user_password) VALUES ('$first','$last','$email','$uid','$password'");
		mysql_query($conn,$sql);
	}
	
}
else
{
		header("Location: ../signup.php");
		exit();
}
?>