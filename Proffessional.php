<!DOCTYPE html>
<html>
	<head>
		<title> HealthCare Proffesionals </title>
		<link rel = "stylesheet" type="text/css" href="style.css" >
	</head>
	
	<body>
		<header>
			<nav>
				<div class="main-wrapper2">
				<ul>
					<li> <a href="learnphp.php" >Home</a></li>
				</ul>
				<div class="nav-login2">
					<form>
						<input type = "text" name="uid" placeholder="Username">
						<input type = "password" name="pwd" placeholder="password">
						<button type = "submit" name="submit"> Login </button>
					</form>
					<a href="Signup.php">Patient Login Page </a>					
				
				</div>
			</div>
			</nav>
		<section class="main-container2">
			<div class="main-wrapper2">
				<p>Welcome HealthCare Proffesionals Please login with the correct user name and password to review your patients records  </p>
				<h2> Sign Up </h2>
				<form class="LoginProffessional" action="includes/loginProffessional.php">
						<input type = "text" name="uid" placeholder="Username">
						<input type = "password" name="pwd" placeholder="password">
						<button type = "submit" name="submit"> Login </button>
					</form>
				
			</div>
		</section>
		<h1>
			As a healthcare proffessional you have a login as a patient as well as a Proffesional as your abilities to use the database are based on<br>
			the role you currently are.
		</h1>
	</body>
</html>
