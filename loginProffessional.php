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
		$query = “SELECT PRO.hpclearence  FROM HEALTHCARE_PROFECINALS AS PRO, DOCTORS AS D, PHARMACIST AS PH,NURSE AS N, PHYSIOTHERAPIST AS PY
		WHERE ( N.ncredencials =@USERNAME AND N.password = @PASSWORD AND 				PRO.hpclearance=N.hpclearance ) OR	
		(D.dcredencials =@USERNAME AND D.password = @PASSWORD AND 				PRO.hpclearance=D.hpclearance) OR	
		(PH.phcredencials =@USERNAME AND PH.password = @PASSWORD AND 				PRO.hpclearance=PH.hpclearance ) OR 
		(PY.pycredencials =@USERNAME AND PY.password = @PASSWORD AND 				PRO.hpclearance=PY.hpclearance );”

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

					$SESSION['u_id'] = $row['ucredentials'];
					$SESSION['u_pass'] = $row['upassword'];
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