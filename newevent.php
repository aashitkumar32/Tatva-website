<?php
include('DBLinker.php');
session_start();
?>
<?php
if (isset($_SESSION['fullname'])) 
{

    $flag = $_SESSION['fullname'];
    if(($flag === true) || ($flag === 'admin')) 
    {
    	if((isset($_POST['descevent'])) && (isset($_POST['namevent'])))
    	{

			$descevent = $_POST['descevent'];
			$namevent = $_POST['namevent'];    		
    		$upload = mysqli_query($con, "INSERT INTO `recentevents`(`sno`, `link_name`, `link_addr`) VALUES ('', '$descevent', '$namevent')");
    		if($upload)
    		{
    			$comment = "Event has been successfully uploaded";
    			include('uploadpanel.php');
    		}
    		else
    		{
    			$comment = "Sorry!! An error occurred in uploading. Please try again";
    			include('uploadpanel.php');
    		}
    	}
    	else
    	{
    		$comment = "Refill the form Completely";
    		include('uploadpanel.php');
    	}
    }
    else
    {
    	$comment = "Error occured white setting your session. Please try again";
    	include('admin.php');
    }
}
else
{
	$comment = "You must login before you upload";
	include('admin.php');
}
?>
