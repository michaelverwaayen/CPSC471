<!DOCTYPE html>
<html>
	<head>
		<title> HealthCare </title>
		<link rel = "stylesheet" type="text/css" href="style.css" >
	</head>
	
	<body>
		<header>
			<nav>
				<div class="main-wrapper">
				<ul>
					<li> <a href="learnphp.php" >Home</a></li>
				</ul>
				<div class="nav-login">
					<form>
						<input type = "text" name="uid" placeholder="Username">
						<input type = "password" name="pwd" placeholder="password">
						<button type = "submit" name="submit"> Login </button>
					</form>
					<a href="Signup.php">Login Page </a>					
				
				</div>
			</div>
			</nav>
		<section class="main-container">
			<div class="main-wrapper">
				<p>Thank you for wanting to register. Please provide information below.  </p>
				<h2> Sign Up </h2>
				<form class="Login" action="includes/login.php">
						<input type = "text" name="uid" placeholder="Username">
						<input type = "password" name="pwd" placeholder="password">
						<button type = "submit" name="submit"> Login </button>
					</form>
				
			</div>
		</section>
		<h1>
			The Alberta healthcare system designed by group 36 automatically has added you to the medical data base as every citizen of Alberta <br>
			has an Alberta HealthCare number.
		</h1>
	</body>
</html>
