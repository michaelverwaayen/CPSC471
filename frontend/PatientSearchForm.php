<!DOCTYPE html>
<html>
	<head>
		<title> HealthCare DB</title>
		<link rel = "stylesheet" type="text/css" href="../style.css" >
	</head>
	
	<body>
		<header>
			<nav>
				<div class="main-wrapper">
				<ul>
					<li> <a href="learnphp.php" >Home</a></li>
				</ul>
				<div class="nav-login">
					<a href="Signup.php">Patient</a>					
					<a href="Proffessional.php">Professional </a> 
				</div>
			</div>
			</nav>
		<section class="main-container">
			<div class="main-wrapper">
				<p>Enter search term to find patient. Search term can be name or ID number.</p>
				<h2> Search </h2>
				<form class="LoginProffessional" action="../DoctorSearch.php" method="GET">
						<input type = "text" name="query" placeholder="Name or ID">
						<br>
						<button type = "submit" name="submit"> Search for Patient </button>
						<br>
					</form>
				
			</div>
		</section>

	</body>
</html>