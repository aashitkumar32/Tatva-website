<html>
	<head>
		<title>SignUp</title>
	</head>
	<style>
		body
		{
			background-image:linear-gradient(To left ,rgb(184, 87, 145), rgba(50, 48, 168, 0.74));
		}
		#signup
		{
			width: 40%;
			padding: 20px;
			border: solid black 2px;
		//border-radius: 10px;
			margin-left: auto;
			margin-right: auto;
			margin-top: 50px;
			background-color:white;

		}
		
		input
		{
			font-family: 'Courier New', Courier, monospace;
			font-size:18px;
			margin-top: 10px;
			width: 80%;
			margin-left: 10%;	
			padding:12px;
			border:2px grey solid;
			border-radius:4px;	
			outline:none;
			transition:.5s;
		}
		input:focus{
			transition:.5s;
			border:2px black solid;
		}
		img
		{
			width: 40%;
			margin-left: 30%;
			border-radius: 50%;
		}
	</style>
	<body>
		<div id="signup">
		<img src="images/userimg.png" />
			<?php
				if(isset($error))
					echo '<p style="color: red">'.$error.'</p>';
			?>
			<form action="register.php" method="post">
				<input type="text" name="fullname" placeholder="Full Name" autofocus />
				<br><br>
				<input type="number" name="mobno" placeholder="Mobile Number" />
				<br><br>
				<input type="email" name="email" placeholder="E-Mail" />
				<br><br>D.O.B<br>
				<input type="date" name="dob" placeholder="Date of Birth" />
				<br><br>
				<input type="password" name="pass" placeholder="Password" />
				<br><br>
				<input type="password" name="confirmpass" placeholder="Confirm Password" />
				<br><br>
				<input type="submit" name="submit" value="Sign Up" />
			</form>
		</div>
	</body>
</html>
