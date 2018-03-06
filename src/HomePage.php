<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href = "HomeStyle.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amatic+SC:700|Cinzel">
<link rel="shortcut icon" type="image/x-icon" href="../assets/main/e.t.icon.ico" />
<title> Event? Plan.E.T. </title>
</head>
<body>
<!--<h1> Event? PlanET </h1>-->
<div class = "st-container">
	<input type = "radio" name="radio-set" onclick="clearfields()" checked="checked" id="st-control-1"/>
	<a href="#st-panel-1">Home</a>
	
	<input type = "radio" name="radio-set" onclick="clearfields()" id="st-control-2"/>
	<a href="#st-panel-2">Login</a>
	
	<input type = "radio" name="radio-set" onclick="clearfields()" id="st-control-3"/>
	<a href="#st-panel-3">Sign Up</a>
	
	<input type = "radio" name="radio-set" onclick="clearfields()" id="st-control-4"/>
	<a href="#st-panel-4">About Us</a>	
	
	<input type = "radio" name="radio-set" onclick="clearfields()" id="st-control-5"/>
	<a href="#st-panel-5">Help</a>
	
	<script> function clearfields(){
		var fields_to_clear = ["login_username", "login_password", "signup_username", "signup_password"];
		fLen = fields_to_clear.length;
		for(i = 0; i < fLen; i++){
			var y = document.getElementById(fields_to_clear[i]);
			y.value = "";
		}
	}
	</script>
	
	<div class="st-scroll">
		<section class = "st-panel st-background" id = "st-panel-1">
			<div class = "st-deco" data-icon = "Home"></div>
			<!-- what does it mean by data-icon = "Home"?? -->
			<h1> Event? Plan.E.T. </h1>
			<h3 class ="tagline"> A fun way to plan your events with your friends and family! </h3>
		</section>
		<section class = "st-panel" id = "st-panel-2">
			<div class = "st-deco" data-icon = "Login"></div>
				<?php
                                    include_once "Login.php";
                                ?>
		</section>
		<section class = "st-panel" id = "st-panel-3">
			<div class = "st-deco" data-icon = "SignUp"></div>
			<form action="sign_up_page.php" target ="_blank">
				<h2>
					Create a username:<br>
					<input type="text" name="username" id="signup_username"/>
					<br>
					Create a password:<br>
					<input type="password" name="password" id="signup_password">
					<br>
					<input type="submit" value="SIGN UP">
				</h2>
				</form>
		</section>
		<section class = "st-panel" id = "st-panel-4">
			<div class = "st-deco" data-icon = "AboutUs"></div>
			<h1> Event? Plan.E.T. </h1>
			<!-- About us fam -->
		</section>
		<section class = "st-panel" id = "st-panel-5">
			<div class = "st-deco" data-icon = "Help"></div>
			<h1> Event? Plan.E.T. </h1>
			<h3> You know it would really help if you signed in... </h3>
		</section>
	</div>
</div>

<!--<h2> (scroll down to view more) </h2> -->
</body>
</html>
