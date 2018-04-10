<?php
$link = mysqli_connect("localhost","root", "", "CPSC471");

if(!$link)
{
	die('Unable to connect', mysqli_error($link));
}
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>
			Search for patient 
		</title>
	</head>
	<body>
		<div class = "Search bar">
			<form action = "getPatient.php" method = "GET" > 
			<input type = "test" name = "search" placeholder=" "Please enter patient ID" />
			<input type = "submit" value="Search"/>		
			</form>
		</div>
	
		<div class = "Table output">
			<table width = "900" border="non" cellpadding="5" cellspacing="5">
				<tr>
					//put table contents in here 
				
				
				
				
				</tr>
			<?php
			
			
			
			
			
			if(isset($_GET["Search"])))
			{
				$search = $_GET["Search"];
				$search = mysqli_real_escape_string($link,$search);
				
				$query = SELECT USER ucredentials FROM HEALTHCARE_SYSTEM_USER AS USER WHERE USER.ucredentials = @username AND USER.upassword = @PASSWORD"
				
				
				if(mysqli_query($link,$query))
				{
					$result = mysqli_query($link, $query);
					while($ROW = mysqli_fetch_assoc($result))
					{
						echo "<tr>"
						//ONCE AGAIN NEED THE SQL @ JORGE 
						
						
						
						
						
						
						
						echo "</tr>"
						
						
						
					}
					
				}
				
			}
			else
			{
				$query2 = SELECT * FROM HEALTHCARE_SYSTEM_USER AS USER WHERE USER.ucredentials = “SELECT USER.ucredentials FROM HEALTHCARE_SYSTEM_USER AS USER WHERE USER. ucredentials = @USERNAME  AND USER.upassword = @PASSWORD”.
				$result = mysqli_query($link, $query2);
				
				while($ROW = mysqli_fetch_assoc($result))
				{
					echo "<tr>"
					
					
					echo "</tr>"
					
					
					
					
					
				}
				
				
			}
			mysqli_close($link);
			?>
			</table>
		
		
		
		
		
		</div>
	
	
	</body>

</html>
