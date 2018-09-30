<?php
include('DBLinker.php');

	if(!empty($_POST['fullname']) && !empty($_POST['mobno']) && !empty($_POST['email']) && !empty($_POST['dob']) && !empty($_POST['pass']) && !empty($_POST['confirmpass']))
	{
		$name = $_POST['fullname'];
		$mobile = $_POST['mobno'];
		$email = $_POST['email'];
		$dob = $_POST['dob'];
		$pass = $_POST['pass'];
		$confirm = $_POST['confirmpass'];

		if($pass==$confirm)
		{
			

			$duplicate = mysqli_query($con, "SELECT `email` FROM `Users` WHERE email = '$email'");
			$dup = mysqli_fetch_array($duplicate);
			if(!$dup)
			{
				$pass=hash('sha1',$pass);
				$done = mysqli_query($con, "INSERT INTO `Users`(`User_id`, `fullname`, `mobile`, `email`, `dob`, `password`, `dos`) VALUES ('', '$name', '$mobile', '$email', '$dob', '$pass', NOW())");
				if($done)
				{
					echo 'You are successfully registered!!';
				}
				else
				{
					$error = 'Sorry!! Not registered. Please try again';
					include('signup.php');
				}
			}
			else
			{
				$error = 'Email-id is already in use!! Please try with another username';
				include('signup.php');
			}
		}
		else
		{
			$error = 'Password did not matched!!';
			include('signup.php');
		} 
	}	
	else
	{
		$error = 'Please fill the form completely!!';
		include('signup.php');
	}	
	


?>
