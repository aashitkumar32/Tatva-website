<?php

	session_start();

	$logout = session_destroy();

	if($logout)
	{
		header('location:index.php');
	}
	else
		echo 'your request for logout failed';



?>