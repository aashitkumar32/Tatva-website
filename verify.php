<?php
	
include('DBLinker.php');



	if((!empty($_POST['id'])) && (!empty($_POST['pass'])))
	{
		$id = $_POST['id'];
		$pass = $_POST['pass'];
		$name = mysqli_query($con, "SELECT `email` FROM `Users` WHERE email = '$id'");
		$nam = mysqli_fetch_array($name);
		if($nam)
		{
			$id1 = 'aashitkumar32@gmail.com';
			$id2 = 'parrishstyle77@gmail.com';
			if(($nam[0] == $id1) || ($nam[0] == $id2))
			{
				$pass=hash('sha1',$pass);
				$password = mysqli_query($con, "SELECT `email`, `password`  FROM `Users` WHERE email = '$id' and password = '$pass'");
				$passw = mysqli_fetch_array($password);
				if($passw)
				{
					session_start();
					$_SESSION['fullname'] = 'admin';
					header('location:controlpanel.php');
				}
				else
				{
					$comment = 'Invalid password!!';
					include('admin.php');
				}
			}
			else
			{
				$pass=hash('sha1',$pass);
				$password = mysqli_query($con, "SELECT `email`, `password`  FROM `Users` WHERE email = '$id' and password = '$pass'");
				$passw = mysqli_fetch_array($password);
				if($passw)
				{
					session_start();
					$_SESSION['fullname'] = true;
					header('location:uploadpanel.php');
				}
				else
				{
					$comment = 'Invalid password!!';
					include('admin.php');
				}
			}
		}
		else
		{
			$comment = 'Invalid Username!!';
			include('admin.php');
		}
	}
	else
	{
		$comment = 'Every field is mandatory!!';
		include('admin.php');
	}

?>
