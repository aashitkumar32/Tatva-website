<?
	include('DBLinker.php');
	if(empty($_SESSION['fullname']))
		session_start();
	if (isset($_SESSION['fullname'])) 
	{

	    $flag = $_SESSION['fullname'];
	    if(($flag === true) || ($flag === 'admin'))
	    {

			if(!empty($_POST['id']) && !empty($_POST['pass']) && !empty($_POST['newpass']) && !empty('confirmpass'))
			{
				$name = $_POST['id'];
				$pass = $_POST['pass'];
				$newpass = $_POST['newpass'];
				$confirmpass = $_POST['confirmpass'];

				if($newpass==$confirmpass)
				{

					$id = mysqli_query($con, "SELECT `email` FROM `Users` WHERE email = '$name'");
					$nam = mysqli_fetch_array($id);
					if($nam)
					{
						$pass=hash('sha1',$pass);
						$password = mysqli_query($con, "SELECT `email`, `password` FROM `Users` WHERE email = '$name' and password = '$pass'");
						$passw = mysqli_fetch_array($password);
						if($passw)
						{
							$confirmp=hash('sha1',$confirmpass);
							$update = mysqli_query($con, "UPDATE `Users` SET `password`= '$confirmp' WHERE email = '$name'");
							if($update)
							{
								$comment = "Password successfully changed";
								include('uploadpanel.php');
							}
							else
							{
								$comment = "Sorry!! There was an error in changing password. Please try after some time";
								include('changepanel.php');
							}
						}
						else
						{
							$comment = 'Invalid password!!';
							include('changepanel.php');
						}
					}
					else
					{
						$comment = 'Invalid Username!!';
						include('changepanel.php');
					}
				}
				else
				{
					$comment = 'Password did not matched!!';
					include('changepanel.php');
				}
			}
			else
			{
				$comment = 'Every field is mandatory!!';
				include('changepanel.php');
			}
		}
		else
		{
			$comment = "You must login first";
			include('admin.php');
		}
	}
	else
		{
			$comment = "You must login first";
			include('admin.php');
		}

	

?> 