<? php_egg_logo_guid
$link = mysqli_connect("localhost","root", "", "CPSC471");
if(!$link)
{
	die('Cannot connect'. mysqli_error($link);
	
}
if(isset($_POST['submit']))
{
	$userName = %_POST['username'];
	$password = %_POST['password'];
	//Handler
	//MAke sure all entered
	if(empty($userName) || empty($password))
	{
		header("Location: ../signup.php<signup=empty");
	}
	else{
		
		$query = SELECT USER.ucredentials FROM HEALTHCARE_SYSTEM_USER AS USER WHERE USER. ucredentials = @USERNAME  AND USER.upassword = @PASSWORD”;
		$result = mysql_query($link,$query);
		$failire = mysql_num_rows($result);
		if($failire < 1)
		{
			header("Location:../signup.php?signup=Something went wrong ");
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
					header("Location: file:///C:/Users/Mike/Desktop/CPSC/457A4/loginsuccessful.php");
			}

		}
	}
	
}
else
{
		header("Location: ../signup.php");
		exit();
}
mysqli_close($link);
?>
