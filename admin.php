<html>
	<head>
		<title>LogIn</title>
	</head>
	<style>
		body
		{
			background-image:linear-gradient(To left ,rgb(184, 87, 145), rgba(50, 48, 168, 0.74));
		}
		#login
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
		a
		{
			text-decoration: none;
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
		w	border-radius: 50%;
		}
		a:hover
		{
			color: deeppink;
		}
	</style>
	<body>
		<div id="login">
		<img src="images/userimg.png" />
		<?php
			if(isset($comment))
				echo '<p style="color: red">'.$comment.'</p>';
		?>
			<form action="verify.php" method="post">
				
				<p><input type="text" name="id" placeholder="Username" autofocus /></p>
				<p><input type="password" name="pass" placeholder="Password" /></p>
				<p><input type="submit" name="login" value="LogIn" /></p>
			</form>
		</div>
	</body>
</html>
