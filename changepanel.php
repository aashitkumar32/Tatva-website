<html>
	<head>
		<title>Change Password</title>
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
		<?php
			if(empty($_SESSION['fullname']))
			session_start();
			?>
			<?php
			if (isset($_SESSION['fullname'])) 
			{

			    $flag = $_SESSION['fullname'];
		    	if(($flag === true) || ($flag === 'admin'))
    			{
			        echo"
					<div id='login'>
					<img src='images/userimg.png' />";
					
						if(isset($comment))
						 echo '<p style="color: red">'.$comment.'</p>';
					
						echo	"<form action='changepassword.php' method='post'>
							
							<input type='text' name='id' placeholder='Username' autofocus />
							<br><br><br><br>
							<input type='password' name='pass' placeholder='Current Password' />
							<br><br><br><br>
							<input type='password' name='newpass' placeholder='New Password' />
							<br><br><br><br>
							<input type='password' name='confirmpass' placeholder='Confirm  New Password' />
							<br><br><br><br>
							<input type='submit' name='submit' value='Submit' />
							
						</form>
					</div>";
				}
				else
				{
					$comment = 'You must login before you upload';
        			include('admin.php');
				}
			}
			else
			{
				$comment = 'You must login before you upload';
        		include('admin.php');
			}
		?>
	</body>
</html>

