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
				<p>Welcome, HealthCare Professionals. Please log in with the correct user name and password to review your patient records.  </p>
				<h2> Sign Up </h2>
				<form class="LoginProffessional" action="loginProffessional.php">
						<input type = "text" name="uid" placeholder="Username">
						<br>
						<input type = "password" name="pwd" placeholder="password">
						<br>
						<button type = "submit" name="submit"> Login Professional </button>
						<br>
					</form>
				
			</div>
		</section>

	</body>
</html>