<?php

	if(!empty($_POST['fullname']) && !empty($_POST['mobno']) && !empty($_POST['email']) && !empty($_POST['dob']) && !empty($_POST['post']))
	{
		$name = $_POST['fullname'];
		$mobile = $_POST['mobno'];
		$email = $_POST['email'];
		$dob = $_POST['dob'];
		$post = $_POST['post'];
		

		
			$connection = mysqli_connect("localhost", "website", "website@admin", "Aashit");

			$duplicate = mysqli_query($connection, "SELECT `email` FROM `members` WHERE email = '$email'");
			$dup = mysqli_fetch_array($duplicate);
			if(!$dup)
			{
				$done = mysqli_query($connection, "INSERT INTO `members`(`id`, `fullname`, `mobile`, `email`, `dob`, `post`, `dos`) VALUES ('', '$name', '$mobile', '$email', '$dob', '$post', NOW())");
				if($done)
				{
					echo 'You are successfully registered!!';
				}
				else
				{
					$error = 'Sorry!! Not registered. Please try again';
					include('members.php');
				}
			}
			else
			{
				$error = 'Email-id already exists';
				include('members.php');
			}
 
	}	
	else
	{
		$error = 'Please fill the form completely!!';
		include('members.php');
	}	
	


?>
